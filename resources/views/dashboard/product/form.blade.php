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
    <x-splade-modal>
        <x-splade-form :action="$formMeta['action']" :default="$defaults ?? []" :method="$formMeta['method']" class="space-y-4" enctype="multipart/form-data">
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
                <x-splade-select class="w-1/2 p-2" name="featured" label="Featured" :options="$featured_options"
                                 placeholder="Featured"
                                 choices required/>

                @php
                    $status_options = [
                        1 => __('Active'),
                        0 => __('Inactive'),
                    ];
                @endphp
                <x-splade-select class="w-1/2 p-2" name="status" :label="__('main.status')" :options="$status_options"
                                 placeholder="Status" choices required/>
            </div>

            <x-splade-select name="category" :label="__('Category')" choices
                             :options="\App\Models\Category::pluck('name', 'id')"
                             placeholder="Product Category" required/>

            @php
                $products =  \App\Models\Product::all();
            @endphp
            <x-splade-select name="tagged_products" :label="__('Frequently Bought Together')"
                             :options="$products" option-label="name" option-value="id"
                             placeholder="Frequently Bought Together" choices multiple/>

            <x-splade-wysiwyg name="description" :label="__('Description')"  placeholder="Description" jodit="{ showXPathInStatusbar: true }" required/>
            <x-splade-wysiwyg name="mobile_description" :label="__('Mobile Description')" placeholder="Mobile Description" jodit="{ showXPathInStatusbar: true }" required/>


            <x-splade-textarea  name="summary" :label="__('Short Description')"  placeholder="Short Description" autosize required/>

            <x-splade-file name="summary_image" :label="__('Short Description Image')" placeholder="Short Description Image" filepond preview max-size="1MB" :accept="['image/png', 'image/jpeg']"/>

            <x-splade-file name="images[]" :label="__('Images')" placeholder="Product Images" multiple filepond preview  max-size="1MB" :accept="['image/png', 'image/jpeg']" required/>


            <x-splade-submit :label="__($formMeta['title'])"/>
        </x-splade-form>
    </x-splade-modal>
    </x-section-content>

</x-dashboard-layout>
