<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use App\Models\ProductVariation;
use Illuminate\Http\Request;

class StoreController extends Controller
{
    public function index()
    {
        $products = Product::where('status', 1)
            ->whereHas('variations')
            ->get()
            ->map(function ($product) {
                $variation = $product->variations->where('status', 1)
                    ->filter(function ($variation) {
                        return $variation->discount &&
                            ($variation->discount_type === 'percentage' || $variation->discount_type === 'flat') &&
                            $variation->discount_amount > 0;
                    })
                    ->sortBy('discountPrice')
                    ->first();
                $priceWithDiscount = $variation ? $this->calculatePriceWithDiscount($variation) : null;
                return [
                    'name' => $product->name,
                    'summary' => $product->summary,
                    'slug' => $product->slug,
                    'media' => $product->media->take(2)->map(function ($media) {
                        return asset('storage/' . $media->location);
                    })->toArray(),
                    'price' => $variation ? $variation->price : null,
                    'discountedPrice' => $priceWithDiscount,
                    'discountType' => $variation->discount_type,
                    'discountAmount' => $variation->discount_amount,
                    'variationName' => $variation->name ?? '',
                    'variationId' => $variation->id ?? null,
                ];
            });

        $categories = Category::all();

        return view('store')->with('products', $products)->with('categories', $categories);
    }

    public function product(Product $product, ProductVariation $variation = null){
        if(!$variation){
            $variation = $product->variations->where('status', 1)
                ->filter(function ($variation) {
                    return $variation->discount &&
                        ($variation->discount_type === 'percentage' || $variation->discount_type === 'flat') &&
                        $variation->discount_amount > 0;
                })
                ->sortBy('discountedPrice')
                ->map(function ($variation) {
                    $variation->media = $variation->media->map(function ($media) {
                        return asset('storage/' . $media->location);
                    })->toArray();
                    return $variation;
                })
                ->first();
        }
        $images = $product->media->map(function ($media) {
            return [
                'url' => asset('storage/' . $media->location),
                'variationId' => $media->variation_id ?? null,
            ];
        })->toArray();

            return view('product.detail')->with('product', $product)->with('variation', $variation)->with('images', $images);
    }

    private function calculatePriceWithDiscount($variation)
    {
        $price = $variation->price;

        if ($variation->discount_type === 'percentage') {
            $discountedPrice = $price - ($price * ($variation->discount_amount / 100));
        } elseif ($variation->discount_type === 'flat') {
            $discountedPrice = $price - $variation->discount_amount;
        } else {
            $discountedPrice = $price;
        }

        return $discountedPrice;
    }
}
