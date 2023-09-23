@seoTitle(__('Products'))

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
                            List
                        </a>
                    </li>
                </ul>
            </nav>
            <h1 class="text-2xl font-bold tracking-tight text-gray-950 dark:text-white sm:text-3xl">
                Products
            </h1>
        </div>
        <div>
            @can('create product')
                <x-btn-link href="{{ route('dashboard.products.create') }}">
                    @lang('main.add_new')
                </x-btn-link>
            @endcan

        </div>
    </div>

    <x-section-content>
        <x-splade-table :for="$products">
            <x-splade-cell category as="$product">
                {{ $product->category->name }}
            </x-splade-cell>
            <x-splade-cell featured as="$product">
                @if($product->featured)
                    <i class="fa fa-check-circle text-green-600 text-2xl"></i>
                @else
                    <i class="fa fa-times-circle text-red-600 text-2xl"></i>
                @endif
            </x-splade-cell>
            <x-splade-cell status as="$product">
                @if($product->status)
                    <i class="fa fa-check-circle text-green-600 text-2xl"></i>
                @else
                    <i class="fa fa-times-circle text-red-600 text-2xl"></i>
                @endif
            </x-splade-cell>
            <x-splade-cell actions as="$product">
                <Link href="{{ route('dashboard.products.show', $product) }}">
                    <i class="fa-solid fa-eye px-1"></i>
                </Link>
                <Link href="{{ route('dashboard.products.edit', $product) }}" modal>
                    <i class="fa-solid fa-edit px-1"></i>
                </Link>
            </x-splade-cell>
        </x-splade-table>
    </x-section-content>
</x-dashboard-layout>
