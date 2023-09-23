@seoTitle(__($product ->name))

<x-dashboard-layout>
    {{-- Head --}}
    <div class="flex justify-between items-end mb-4">
        <div>
            <nav class="fi-breadcrumbs mb-2 hidden sm:block">
                <ul class="flex flex-wrap items-center gap-x-2">
                    <li class="flex gap-x-2">
                        <Link href="{{ route('dashboard.products.index') }}"
                              class="text-sm font-medium text-gray-500 outline-none transition duration-75 hover:text-gray-700 focus:text-gray-700 dark:text-gray-400 dark:hover:text-gray-200 dark:focus:text-gray-200">
                        Products
                        </Link>
                    </li>
                    <li class="flex items-center gap-x-2">
                        <i class="fa-solid fa-chevron-right text-gray-400 dark:text-gray-500 text-xs rtl:rotate-180"></i>
                        <a href="#"
                           class="text-sm font-medium text-gray-500 outline-none transition duration-75 hover:text-gray-700 focus:text-gray-700 dark:text-gray-400 dark:hover:text-gray-200 dark:focus:text-gray-200">
                            {{ $product ->name }}
                        </a>
                    </li>
                </ul>
            </nav>
            <h1 class="text-2xl font-bold tracking-tight text-gray-950 dark:text-white sm:text-3xl">
                {{ $product ->name }}
            </h1>
        </div>
    </div>

    <x-section-content>
        Category: {{ $product ->category ->name }}
        <br>
        Featured: {{ $product ->featured ? 'Yes' : 'No' }};
        <br>
        Status: {{ $product ->status ? 'Yes' : 'No'}}
        <br>
        Summary: {{ $product ->summary }}
        <br>
        Description: {{ $product ->description }}
        <br>

        <div>
            Product Variations
            <Link modal href="{{ route('dashboard.products.product.variation.create', $product) }}">
            <i class="fa-solid fa-add px-1"></i>
            </Link>
            <x-splade-table :for="$variations">
                <x-splade-cell discount as="$variation">
                    @if($variation ->discount)
                        <span class="text-red-500">{{ $variation ->discount_amount }} {{ $variation->discount_type === 'percentage' ? '%':'Flat' }}</span>
                    @else
                        No Discount
                    @endif
                </x-splade-cell>
                <x-splade-cell status as="$variation">
                    @if($variation->status)
                        <i class="fa fa-check-circle text-green-600 text-2xl"></i>
                    @else
                        <i class="fa fa-times-circle text-red-600 text-2xl"></i>
                    @endif
                </x-splade-cell>
                <x-splade-cell actions as="$variation">
                    <Link href="{{ route('dashboard.products.product.variation.edit',['product'=>$variation->product,$variation,'variation'=>$variation]) }}" modal>
                        <i class="fa fa-edit text-green-600 text-2xl"></i>
                    </Link>
                </x-splade-cell>
            </x-splade-table>
        </div>
    </x-section-content>

</x-dashboard-layout>
