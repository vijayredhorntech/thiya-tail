@seoTitle(__('Home Sliders'))

<x-dashboard-layout>
    <div class="flex justify-between items-end mb-4">
        <div>
            <nav class="fi-breadcrumbs mb-2 hidden sm:block">
                <ul class="flex flex-wrap items-center gap-x-2">
                    <li class="flex gap-x-2">
                        <Link href="{{ route('dashboard.homeSlider.index') }}"
                              class="text-sm font-medium text-gray-500 outline-none transition duration-75 hover:text-gray-700 focus:text-gray-700 dark:text-gray-400 dark:hover:text-gray-200 dark:focus:text-gray-200">
                        Home Slider
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
                Home Slider
            </h1>
        </div>
        @can('create homeSlider')
            <x-btn-link href="#create">
                @lang('main.add_new')
            </x-btn-link>
        @endcan

        @can('create homeSlider')
            <x-splade-modal name="create">
                <x-splade-form :action="route('dashboard.homeSlider.store')" method="POST" class="space-y-4" :default="[
                    'button'=>0,
                    'text_overlay'=>0,
                    'status'=>0,
                ]">
                    <h3 class="text-xl font-medium text-gray-900 dark:text-white">
                        Add New Slider Image
                    </h3>
                    @php
                        $status_options = [
                            1 => __('main.active'),
                            0 => __('Inactive'),
                        ];
                    @endphp
                    <x-splade-file name="image" :label="__('Slider Image')" placeholder="Slider Image" filepond required preview/>
                    <x-splade-select name="text_overlay" :label="__('Text Overlay')" placeholder="Text Overlay" :options="$status_options" choices required />
                    <x-splade-textarea   name="text" :label="__('Overlay Text')"  autosize placeholder="Overlay Text" />

                    <x-splade-select name="button" :label="__('Button')" placeholder="Button" :options="$status_options" choices required />
                    <x-splade-input name="button_text" :label="__('Button Text')" placeholder="Button Text" />
                    <x-splade-input name="button_link" :label="__('Button Link')" placeholder="Button Link" />

                    <x-splade-select name="status" :label="__('main.status')" placeholder="Status" :options="$status_options" choices required />

                    <x-splade-submit :label="__('main.submit')" />
                </x-splade-form>
            </x-splade-modal>
        @endcan

    </div>

    <x-section-content>
        <x-splade-table :for="$sliders">
            <x-splade-cell image as="$slider">
                <a href="{{  asset($slider->image) }}" target="_blank">
                    <img src="{{ asset($slider->image) }}" alt="Slider Image" class="w-48 rounded-md">
                </a>
            </x-splade-cell>
            <x-splade-cell text_overlay as="$slider">
                {{ $slider->text_overlay ? $slider->text : 'No Overlay' }}
            </x-splade-cell>
            <x-splade-cell button as="$slider">
                {{ $slider->button ? $slider->button_text . ':  Redirect To - '. $slider->button_link : 'No Button' }}
            </x-splade-cell>
            <x-splade-cell actions as="$slider">
                @can('delete homeSlider')
                    <Link class="bg-red-500 rounded-md p-1 text-white" href="{{ route('dashboard.homeSlider.delete',['slider'=>$slider]) }}" confirm="Are you sure you want to delete this Slider?">Delete</Link>
                @endcan
            </x-splade-cell>
        </x-splade-table>
    </x-section-content>
</x-dashboard-layout>
