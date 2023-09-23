<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductVariationRequest;
use App\Models\Product;
use App\Models\ProductVariation;
use Illuminate\Http\Request;
use ProtoneMedia\Splade\Facades\Toast;

class ProductVariationController extends Controller
{
    public function create(Product $product)
    {
        $formMeta = [
            'method' => 'POST',
            'action' => route('dashboard.products.product.variation.store', $product),
            'title' => 'Create ' . $product->name . ' Variation',
        ];
        return view('dashboard.product.variation.form')->with('formMeta', $formMeta);
    }

    public function store(ProductVariationRequest $request, Product $product)
    {
        $variation = $product->variations()->create([
            'name' => $request->name,
            'price' => $request->price,
            'status' => $request->status,
            'discount' => $request->discount,
            'discount_type' => $request->discount_type,
            'discount_amount' => $request->discount_amount,
        ]);
        foreach ($request->file('images') as $image) {
            $variation->media()->create([
                'product_id' => $product->id,
                'location' => $image->store('product/' . $product->slug . '/variation/' . $variation->id . '/images', 'public'),
                'name' => $image->getClientOriginalName(),
                'type' => 'image',
            ]);
        }
        Toast::success('Product Variation created successfully');
        return redirect()->route('dashboard.products.show', $product);
    }

    public function edit(Product $product, ProductVariation $variation)
    {
        $formMeta = [
            'method' => 'PUT',
            'action' => route('dashboard.products.product.variation.update', [$product, $variation]),
            'title' => 'Edit ' . $product->name . ' Variation',
        ];
        $defaults = [
            'name' => $variation->name,
            'price' => $variation->price,
            'status' => $variation->status,
            'discount' => $variation->discount,
            'discount_type' => $variation->discount_type,
            'discount_amount' => $variation->discount_amount,
            'images' => $variation->media->where('type', 'image')->map(function ($media) {
                return asset('storage/' . $media->location);
            })->toArray(),
        ];
        return view('dashboard.product.variation.form')->with('formMeta', $formMeta)->with('variation', $variation)->with('defaults', $defaults);
    }

    public function update(ProductVariationRequest $request, Product $product, ProductVariation $variation)
    {
        $variation->update([
            'name' => $request->name,
            'price' => $request->price,
            'status' => $request->status,
            'discount' => $request->discount,
            'discount_type' => $request->discount_type,
            'discount_amount' => $request->discount_amount,
        ]);
        if ($request->has('images')) {
            foreach ($request->file('images') as $image) {
                if (!$variation->media->where('name', $image->getClientOriginalName())->count()) {
                    $variation->media()->create([
                        'product_id' => $product->id,
                        'location' => $image->store('product/' . $product->slug . '/variation/' . $variation->id . '/images', 'public'),
                        'name' => $image->getClientOriginalName(),
                        'type' => 'image',
                    ]);
                }
            }
            foreach ($variation->media->where('type', 'image') as $media) {
                if (!in_array($media->name, $request->images)) {
                    unlink(public_path('storage/' . $media->location));
                    $media->delete();
                }
            }
        } else {
            foreach ($variation->media->where('type', 'image') as $media) {
                unlink(public_path('storage/' . $media->location));
                $media->delete();
            }
        }
        Toast::success('Product Variation updated successfully');
        return redirect()->route('dashboard.products.show', $product);
    }

}
