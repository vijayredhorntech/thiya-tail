<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductRequest;
use App\Models\Product;
use App\Tables\Products;
use Carbon\Carbon;
use ProtoneMedia\Splade\Facades\Toast;
use ProtoneMedia\Splade\FormBuilder\Input;
use ProtoneMedia\Splade\FormBuilder\Submit;
use ProtoneMedia\Splade\SpladeForm;
use ProtoneMedia\Splade\SpladeTable;

class ProductController extends Controller
{
    public function index()
    {
        return view('dashboard.product.home')->with('products', Products::class);
    }

    public function show(Product $product)
    {
        $variations = SpladeTable::for($product->variations())
            ->column('name', __('main.name'), sortable: true, searchable: true)
            ->column('price', __('Price'), sortable: true)
            ->column('discount', __('Discount'), sortable: true)
            ->column('status', __('Status'), sortable: true)
            ->column(
                'created_at',
                __('Added'),
                as: fn($created_at) => Carbon::parse($created_at)->format(getSetting('date_format')),
                sortable: true
            )
            ->column('actions', __('main.action'))
            ->selectFilter(key: 'status', label: __('main.status'), options: [
                1 => __('main.active'),
                0 => __('Inactive'),
            ]);
        return view('dashboard.product.show')->with('product', $product)->with('variations', $variations);
    }

    public function create()
    {
        $formMeta = [
            'method' => 'POST',
            'action' => route('dashboard.products.store'),
            'title' => 'Create Product',
        ];
        return view('dashboard.product.form')->with('formMeta', $formMeta);
    }

    public function store(ProductRequest $request)
    {
        $product = Product::create([
            'name' => $request->name,
            'category_id' => $request->category,
            'featured' => $request->featured,
            'status' => $request->status,
            'description' => $request->description,
            'mobile_description' => $request->mobile_description,
            'summary' => $request->summary,
            'tagged_products' => $request->tagged_products ? json_encode($request->tagged_products) : null,
            'summary_image' => $request->file('summary_image')?->store('product/summary_images', 'public'),
        ]);
        foreach ($request->file('images') as $image) {
            $product->media()->create([
                'location' => $image->store('product/' . $product->slug . '/images', 'public'),
                'name' => $image->getClientOriginalName(),
                'type' => 'image',
            ]);
        }
        Toast::success('Product created successfully');
        return redirect()->route('dashboard.products.show', $product);
    }


    // edit  and Update
    public function edit(Product $product)
    {
        $formMeta = [
            'method' => 'PUT',
            'action' => route('dashboard.products.update', $product),
            'title' => 'Update Product',
        ];
        $defaults = [
            'name' => $product->name,
            'category' => $product->category_id,
            'featured' => $product->featured,
            'status' => $product->status,
            'description' => $product->description,
            'mobile_description' => $product->mobile_description,
            'summary' => $product->summary,
            'tagged_products' => $product->tagged_products ? json_decode($product->tagged_products) : null,
            'summary_image' => $product->summary_image ? asset('storage/' . $product->summary_image) : null,
            'images' => $product->media->where('type', 'image')->map(function ($image) {
                return asset('storage/' . $image->location);
            })->toArray(),
        ];
        return view('dashboard.product.form')->with('formMeta', $formMeta)->with('defaults', $defaults)->with('product', $product);
    }

    public function update(Product $product, ProductRequest $request)
    {
        $product->update([
            'name' => $request->name,
            'category_id' => $request->category,
            'featured' => $request->featured,
            'status' => $request->status,
            'description' => $request->description,
            'mobile_description' => $request->mobile_description,
            'summary' => $request->summary,
            'tagged_products' => $request->tagged_products ? json_encode($request->tagged_products) : null,
        ]);
        if ($request->file('summary_image')) {
            if ($product->summary_image) {
                unlink(public_path('storage/' . $product->summary_image));
            }
            $product->update([
                'summary_image' => $request->file('summary_image')?->store('product/summary_images', 'public'),
            ]);
        }
        Toast::success('Product updated successfully');
        return redirect()->back();
    }

    // delete
    public function destroy()
    {

    }
}
