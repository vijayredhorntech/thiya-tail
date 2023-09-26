<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductReviewRequest;
use App\Models\Product;
use App\Models\ProductReview;
use ProtoneMedia\Splade\Facades\Toast;
use ProtoneMedia\Splade\SpladeTable;

class ReviewController extends Controller
{
    public function index()
    {
        $reviews = SpladeTable::for(ProductReview::class)
            ->column('product.name', __('Product'), sortable: true, searchable: true)
            ->column('user.name', __('User'), sortable: true, searchable: true)
            ->column('review', __('Review'), sortable: true, searchable: true)
            ->column('rating', __('Rating'), sortable: true, searchable: true)
            ->column('active', __('Status'), sortable: true, searchable: true)
            ->column('created_at', __('Added'), sortable: true, searchable: true)
            ->selectFilter(key: 'active', label: __('Status'), options: [
                1 => __('Active'),
                0 => __('Inactive'),
            ])->paginate(10);
        return view('dashboard.product.review.index')->with('reviews', $reviews);
    }
    public function store(Product $product, ProductReviewRequest $request)
    {
        $review = $product->reviews()->create([
            'user_id' => auth()->id(),
            'review' => $request->review,
            'rating' => $request->rating,
        ]);
        if($request->has('images')) {
            $images = [];
            foreach ($request->images as $image) {
                $images[] = $image->store('product/' . $product->slug . 'review-images', 'public');
            }
            $review->update([
                'images' => $images,
            ]);
        }
        Toast::title('Review Added')
            ->message('Successfully added your review.')
            ->success()
            ->rightBottom()
            ->backdrop()
            ->autoDismiss(5);

        return redirect()->back();
    }

    public function toggle(ProductReview $review)
    {
        $review->update([
            'active' => !$review->active,
        ]);
        Toast::title('Review Updated')
            ->message('Successfully updated your review.')
            ->success()
            ->rightBottom()
            ->backdrop()
            ->autoDismiss(5);

        return redirect()->back();
    }
}
