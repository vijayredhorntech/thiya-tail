<?php

namespace App\Http\Controllers;

use App\Http\Requests\CategoryRequest;
use App\Models\Category;
use Illuminate\Http\Request;
use ProtoneMedia\Splade\Facades\Toast;
use ProtoneMedia\Splade\SpladeTable;

class ProductCategoryController extends Controller
{
    // crud with all methods
    public function index()
    {

        $categories = SpladeTable::for(Category::class)
            ->column('name', __('Name'))
            ->column('image', __('Image'))
            ->column('description', __('Description'))
            ->column('actions', __('main.action'))
            ->paginate(10);
        return view('dashboard.productCategory.home')->with('categories', $categories);
    }

    public function create()
    {
        return view('dashboard.productCategory.form')->with('action',route('dashboard.productCategories.store'));
    }

    public function store(CategoryRequest $request)
    {
        Category::create([
            'name' => $request->name,
            'image' => str_replace('public/', 'storage/', $request->file('image')?->store('public/categoryImages')),
            'description' => $request->description,
        ]);
        Toast::success('Category Added Successfully');
        return redirect()->route('dashboard.productCategories.index');
    }

    public function edit(Category $productCategory)
    {
        $defaults = [
            'name' => $productCategory->name,
            'image' => asset($productCategory->image),
            'description' => $productCategory->description,
        ];
        return view('dashboard.productCategory.form')->with('category',$productCategory)->with('defaults',$defaults)->with('action',route('dashboard.productCategories.update',$productCategory));
    }

    public function update(Category $productCategory,CategoryRequest $request)
    {
        if ($request->file('image')) {
            unlink($productCategory->image);
        }
        $productCategory->update([
            'name' => $request->name,
            'image' => str_replace('public/', 'storage/', $request->file('image')?->store('public/categoryImages')),
            'description' => $request->description,
        ]);
        Toast::success('Category Updated Successfully');
        return redirect()->route('dashboard.productCategories.index');
    }

    public function delete(Category $productCategory)
    {
        $productCategory->delete();
        Toast::success('Category Deleted Successfully');
        return redirect()->route('dashboard.productCategories.index');
    }

}
