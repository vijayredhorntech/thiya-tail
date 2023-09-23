<?php

namespace App\View\Components;

use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Product extends Component
{
    public $name;
    public $slug;
    public $media;
    public $price;
    public $discountedPrice;
    public $discountType;
    public $discountAmount;
    public $summary;
    public $detailUrl;
    public $variationName;


    public function __construct($product)
    {
        $this->name = $product['name'];
        $this->slug = $product['slug'];
        $this->media = $product['media'];
        $this->price = $product['price'];
        $this->discountedPrice = $product['discountedPrice'];
        $this->discountType = $product['discountType'];
        $this->discountAmount = $product['discountAmount'];
        $this->summary = $product['summary'];
        $this->detailUrl = route('store.product', ['product' => $product['slug']]);
        $this->variationName = $product['variationName'];
    }
    public function render(): View
    {
        return view('components.product');
    }
}
