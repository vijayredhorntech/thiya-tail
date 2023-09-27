<?php

namespace App\View\Components;

use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Cart extends Component
{
    public $cart;
    public $cartItems;
    public $summary;
    public function __construct(){
        $this->cart = auth()->user()->cart;
        $this->cartItems = $this->cart->items;
        // this->sumamry is an array containing total mrp, discount on mrp subtotal, shipping charges
        $summary = [
            'mrp' => 0,
            'discount' => 0,
            'subtotal' => 0,
        ];
        foreach($this->cartItems as $item){
            $summary['mrp'] += $item->variation->price * $item->quantity;
            $summary['discount'] += ($item->variation->price - $item->variation->discountedPrice) * $item->quantity;
            $summary['subtotal'] += $item->variation->discountedPrice * $item->quantity;
        }
        $summary['shipping'] = $this->calculateShipping($summary['subtotal']);
        $this->summary = $summary;

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

    public function render(): View
    {
        return view('components.cart');
    }
}
