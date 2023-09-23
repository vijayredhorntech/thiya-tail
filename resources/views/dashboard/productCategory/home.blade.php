@seoTitle(__('Product Category'))

<x-dashboard-layout>
    <div class="flex justify-between items-end mb-4">
        <div>
            <nav class="fi-breadcrumbs mb-2 hidden sm:block">
                <ul class="flex flex-wrap items-center gap-x-2">
                    <li class="flex gap-x-2">
                        <Link href="{{ route('dashboard.homeSlider.index') }}"
                              class="text-sm font-medium text-gray-500 outline-none transition duration-75 hover:text-gray-700 focus:text-gray-700 dark:text-gray-400 dark:hover:text-gray-200 dark:focus:text-gray-200">
                        Product Categories
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
                Categories
            </h1>
        </div>
            <x-btn-link href="{{ route('dashboard.productCategories.create') }}" modal>
                @lang('main.add_new')
            </x-btn-link>


    </div>

    <x-section-content>
        <x-splade-table :for="$categories">

            <x-splade-cell image as="$category">
                <img src="{{ asset($category->image) }}" alt="" class="w-48">
            </x-splade-cell>

            <x-splade-cell actions as="$category">
                @can('update homeSlider')
                    <Link class="bg-yellow-500 rounded-md p-1 text-white mx-1"
                          href="{{ route('dashboard.productCategories.edit',['productCategory'=>$category]) }}"
                          modal>Edit</Link>
                @endcan

                    @can('delete homeSlider')
                    <Link class="bg-red-500 rounded-md p-1 text-white"
                          href="{{ route('dashboard.productCategories.delete',['productCategory'=>$category]) }}"
                          confirm="Are you sure you want to delete this Category?">Delete</Link>
                @endcan
            </x-splade-cell>
        </x-splade-table>
    </x-section-content>
</x-dashboard-layout>
