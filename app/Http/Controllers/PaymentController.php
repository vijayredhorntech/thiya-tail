<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function payment(Request $request)
    {
        $cart = auth()->user()->cart;
        $order = Order::create([
            'amount' => $cart->amount,
            'address' => session()->get('deliveryAddress')->completeAddress,
            'phone' => session()->get('deliveryAddress')->phone,
            'user_id' => auth()->user()->id,
        ]);
        foreach ($cart->items as $item) {
            $order->items()->create([
                'product_id' => $item->product_id,
                'variation_id' => $item->variation_id,
                'quantity' => $item->quantity,
                'price' => $item->variation->discountedPrice,
            ]);
        }
        $data = array(
            "merchantId" => "M1R68MJ83W8Z",
            "merchantTransactionId" => uniqid(),
            "merchantUserId" => "M1R68MJ83W8Z",
            "amount" => $order->amount,
            "redirectUrl" => route('store.cart.payment.response'),
            "redirectMode" => "POST",
            "callbackUrl" => route('store.cart.payment.response'),
            "mobileNumber" => "8091004910",
            "paymentInstrument" => array(
                "type" => "PAY_PAGE"
            )
        );
        $encode = base64_encode(json_encode($data));
        $saltKey = 'cbe6766e-341d-4099-8bc5-33398be0be90';
        $saltIndex = 1;
        $string = $encode . '/pg/v1/pay' . $saltKey;
        $sha256 = hash('sha256', $string);
        $finalXHeader = $sha256 . '###' . $saltIndex;


        $response = \Ixudra\Curl\Facades\Curl::to('https://api.phonepe.com/apis/hermes')
            ->withHeader('Content-Type:application/json')
            ->withHeader('X-VERIFY: ' . $finalXHeader)
            ->withData(json_encode(['request' => $encode]))
            ->post();
        return dd($response);
    }

    public function paymentResponse(Request $request){
        return $request;
    }
}
