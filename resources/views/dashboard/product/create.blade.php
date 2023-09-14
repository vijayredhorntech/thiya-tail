@seoTitle(__('Create Product'))

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
                            Create
                        </a>
                    </li>
                </ul>
            </nav>
            <h1 class="text-2xl font-bold tracking-tight text-gray-950 dark:text-white sm:text-3xl">
                New Product
            </h1>
        </div>
    </div>

    <x-section-content>

        <x-splade-form :action="route('dashboard.products.store')" method="POST" class="space-y-4">
            {{--            <h3 class="text-xl font-medium text-gray-900 dark:text-white">--}}
            {{--                Create New Product--}}
            {{--            </h3>--}}
            {{-- Name --}}
            <x-splade-input v-model="form.name" name="name" :label="__('main.name')" placeholder="Product Name"
                            required/>

            <div class="flex w-full">

                @php
                    $featured_options = [
                        1 => __('Active'),
                        0 => __('Inactive'),
                    ];
                @endphp
                <x-splade-select class="w-1/2 p-2" name="featured" label="Featured" :options="$featured_options" placeholder="Featured"
                                 choices required/>

                {{--                            <x-splade-textarea v-model="form.bio" name="bio" :label="__('main.bio')" autocomplete="bio" autosize />--}}
                @php
                    $status_options = [
                        1 => __('Active'),
                        0 => __('Inactive'),
                    ];
                @endphp
                <x-splade-select class="w-1/2 p-2" name="status" :label="__('main.status')" :options="$status_options"
                                 placeholder="Status" choices required/>
            </div>
            <x-splade-submit :label="__('main.submit')"/>
        </x-splade-form>
    </x-section-content>

</x-dashboard-layout>
