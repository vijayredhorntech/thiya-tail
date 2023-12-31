<?php

namespace App\Tables;

use App\Models\Product;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;
use ProtoneMedia\Splade\AbstractTable;
use ProtoneMedia\Splade\SpladeTable;
use Spatie\QueryBuilder\AllowedFilter;
use Spatie\QueryBuilder\QueryBuilder;

class Products extends AbstractTable
{
    /**
     * Create a new instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Determine if the user is authorized to perform bulk actions and exports.
     *
     * @return bool
     */
    public function authorize(Request $request)
    {
        return true;
    }

    /**
     * The resource or query builder.
     *
     * @return mixed
     */
    public function for()
    {
        $globalSearch = AllowedFilter::callback('global', function ($query, $value) {
            $query->where(function ($query) use ($value) {
                Collection::wrap($value)->each(function ($value) use ($query) {
                    $query
                        ->orWhere('name', 'LIKE', "%{$value}%");
                });
            });
        });

        return QueryBuilder::for(Product::class)
            ->defaultSort('-created_at')
            ->allowedSorts(['name'])
            ->allowedFilters(['name',$globalSearch])
            ->paginate()
            ->withQueryString();
    }

    /**
     * Configure the given SpladeTable.
     *
     * @param \ProtoneMedia\Splade\SpladeTable $table
     * @return void
     */
    public function configure(SpladeTable $table)
    {
        $table
            ->withGlobalSearch(columns: ['name'])
            ->column('name', __('main.name'), sortable: true, searchable: true)
            ->column('category', __('Category'), sortable: true)
            ->column('featured', __('Featured'), sortable: true)
            ->column('status', __('Status'), sortable: true)
            ->column(
                'created_at',
                __('Added'),
                as: fn ($created_at) => Carbon::parse($created_at)->format(getSetting('date_format')),
                sortable: true
            )
            ->column('actions', __('main.action'))
            ->selectFilter(key: 'status', label: __('main.status'), options: [
                1 => __('main.active'),
                0 => __('Inactive'),
            ]);
    }
}
