<?php

namespace App\View\Components;

use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Wishlist extends Component
{
    public $wishlistItems;
    public function __construct(){
        $this->wishlistItems = auth()->user()->wishlist;
    }
    public function render(): View
    {
        return view('components.wishlist');
    }
}
