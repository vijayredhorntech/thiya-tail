<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\ProductVariation;
use App\Models\Wishlist;
use ProtoneMedia\Splade\Facades\Toast;

class WishlistController extends Controller
{
    public function index()
    {
        return view('wishlist');
    }

    public function store(Product $product, ProductVariation $variation)
    {
       auth()->user()->wishlist()->firstOrCreate([
            'product_id' => $product->id,
            'variation_id' => $variation->id,
        ]);
        Toast::success('Product added to wishlist.')->rightBottom();
        return redirect()->back();
    }

    public function remove(Wishlist $wishlistItem){
        $wishlistItem->delete();
        Toast::success('Product removed from wishlist.')->rightBottom();
        return redirect()->back();
    }

    public function move(Wishlist $wishlistItem){
        $cart = auth()->user()->cart;
        $cartItem = $cart->items()->where('product_id', $wishlistItem->product_id)->where('variation_id', $wishlistItem->variation_id)->first();
        if($cartItem){
            $cartItem->update([
                'quantity' => $cartItem->quantity + 1,
                'amount' => $cartItem->amount + $wishlistItem->variation->discountedPrice,
            ]);
        }else{
            $cart->items()->create([
                'product_id' => $wishlistItem->product_id,
                'variation_id' => $wishlistItem->variation_id,
                'quantity' => 1,
                'amount' => $wishlistItem->variation->discountedPrice,
            ]);
        }
        $wishlistItem->delete();
        Toast::success('Product moved to cart.')->rightBottom();
        return redirect()->back();
    }

    public function empty(){
        foreach (auth()->user()->wishlist as $wishlistItem) {
            $wishlistItem->delete();
        }
        Toast::success('Wishlist Cleared')->rightBottom();
        return redirect()->back();
    }

    public function moveAllToCart(){
        $cart = auth()->user()->cart;
        foreach (auth()->user()->wishlist as $wishlistItem) {
            $cartItem = $cart->items()->where('product_id', $wishlistItem->product_id)->where('variation_id', $wishlistItem->variation_id)->first();
            if($cartItem){
                $cartItem->update([
                    'quantity' => $cartItem->quantity + 1,
                    'amount' => $cartItem->amount + $wishlistItem->variation->discountedPrice,
                ]);
            }else{
                $cart->items()->create([
                    'product_id' => $wishlistItem->product_id,
                    'variation_id' => $wishlistItem->variation_id,
                    'quantity' => 1,
                    'amount' => $wishlistItem->variation->discountedPrice,
                ]);
            }
            $wishlistItem->delete();
        }
        Toast::success('All wishlist items moved to cart.')->rightBottom();
        return redirect()->back();
    }

}
