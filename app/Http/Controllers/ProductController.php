<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductRequest;
use App\Models\Product;
use App\Tables\Products;
use ProtoneMedia\Splade\Facades\Toast;
use ProtoneMedia\Splade\FormBuilder\Input;
use ProtoneMedia\Splade\FormBuilder\Submit;
use ProtoneMedia\Splade\SpladeForm;

class ProductController extends Controller
{
    public function     index()
    {
        return view('dashboard.product.home')->with('products', Products::class);
    }

    public function create()
    {
        return view('dashboard.product.create');
    }

    public function store(ProductRequest $request)
    {
        $validated = $request->validated();
        $product = Product::create($validated);
        Toast::success('Product created successfully');
        return redirect()->route('product.index');
    }


    // edit  and Update
    public function edit()
    {

    }

    public function update()
    {

    }

    // delete
    public function destroy()
    {

    }
}
