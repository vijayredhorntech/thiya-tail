<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\ProductVariation;
use Illuminate\Http\Request;
use ProtoneMedia\Splade\Facades\Toast;

class CartController extends Controller
{
    public function index()
    {

    }

    public function store(Product $product, ProductVariation $variation, Request $request)
    {
        $cart = auth()->user()->cart()->firstOrCreate([
            'user_id' => auth()->id(),
            'amount' => 0,
        ]);

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
}
