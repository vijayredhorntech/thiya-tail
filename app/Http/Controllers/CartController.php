<?php

namespace App\Http\Controllers;

use App\Models\Address;
use App\Models\CartItems;
use App\Models\Product;
use App\Models\ProductVariation;
use Illuminate\Http\Request;
use ProtoneMedia\Splade\Facades\Splade;
use ProtoneMedia\Splade\Facades\Toast;
use ProtoneMedia\Splade\SpladeTable;

class CartController extends Controller
{
    public function index()
    {

    }

    public function store(Product $product, ProductVariation $variation, Request $request)
    {
        $cart = auth()->user()->cart;

        $cart->items()->updateOrCreate([
            'product_id' => $product->id,
            'variation_id' => $variation->id,
        ], [
            'quantity' => $request->quantity,
            'amount' => $variation->discountedPrice * $request->quantity,
        ]);
        $cart->update([
            'amount' => $cart->items()->sum('amount'),
        ]);
        Toast::success('Product added to cart successfully.')->rightBottom();

        return redirect()->back()->with('success', 'Product added to cart successfully.');
    }

    public function update(CartItems $cartItem)
    {
        $cartItem->update([
            'quantity' => request()->quantity,
            'amount' => $cartItem->variation->discountedPrice * request()->quantity,
        ]);
        $cartItem->cart->update([
            'amount' => $cartItem->cart->items()->sum('amount'),
        ]);
        Toast::success('Cart updated successfully.')->rightBottom();
        return redirect()->back();
    }

    public function checkout()
    {
        $cart = auth()->user()->cart;
        $cart->update([
            'amount' => $cart->items()->sum('amount'),
        ]);
        $addresses = SpladeTable::for(Address::class)
            ->column('address')
            ->column('actions')
            ->paginate(10);
        $deliveryAddress = session()->has('deliveryAddress') ? session()->get('deliveryAddress') : false;

        $summary = [
            'mrp' => 0,
            'discount' => 0,
            'subtotal' => 0,
        ];
        foreach($cart->items as $item){
            $summary['mrp'] += $item->variation->price * $item->quantity;
            $summary['discount'] += ($item->variation->price - $item->variation->discountedPrice) * $item->quantity;
            $summary['subtotal'] += $item->variation->discountedPrice * $item->quantity;
        }
        $summary['shipping'] = $this->calculateShipping($summary['subtotal']);
        if($summary['shipping'] != "Free for order above ₹999"){
            $summary['total'] = $summary['subtotal'] + $summary['shipping'];
        } else {
            $summary['total'] = $summary['subtotal'];
        }
        return view('checkout', compact('cart'))->with('addresses', $addresses)->with('deliveryAddress', $deliveryAddress)->with('summary', $summary);
    }

    public function setDeliveryAddress(Address $address)
    {
        session()->put('deliveryAddress', $address);
        Toast::success('Delivery address set successfully.')->rightBottom();
        return redirect()->back();
    }

    function calculateShipping($subtotal){
        $shipping = 0;
        // free above 1000, 99 below 499, 49 below 999
        if($subtotal < 499){
            $shipping = 99;
        }
        if($subtotal >= 499 && $subtotal < 999){
            $shipping = 49;
        }
        if($subtotal >= 999){
            $shipping = "Free for order above ₹999";
        }

        return $shipping;
    }
}
