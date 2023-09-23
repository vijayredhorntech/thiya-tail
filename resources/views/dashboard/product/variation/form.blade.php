
        <x-splade-modal>
            <x-splade-form :action="$formMeta['action']" :default="$defaults ?? []" :method="$formMeta['method']" class="space-y-4" enctype="multipart/form-data">
                            <h3 class="text-xl font-medium text-gray-900 dark:text-white">
                                {{ $formMeta['title'] }}
                            </h3>

                <x-splade-input v-model="form.name" name="name" :label="__('main.name')" placeholder="Product Variation Name"
                                required/>

                <div class="flex w-full">
                    @php
                        $status_options = [
                            1 => __('Active'),
                            0 => __('Inactive'),
                        ];
                    @endphp
                    <x-splade-select class="w-full" name="status" :label="__('main.status')" :options="$status_options"
                                     placeholder="Status" choices required/>
                </div>
                <x-splade-input  name="price" :label="__('Price')"  placeholder="Price"  required/>

                <div class="flex w-full justify-between">
                    @php
                        $discount_options = [
                            'percentage' => __('Percentage'),
                            'flat' => __('Flat Amount'),
                        ];
                    @endphp
                    <x-splade-select class="w-full" name="discount" :label="__('Discount')" :options="$status_options"
                                     placeholder="Discount" choices required/>

                    <x-splade-select class="w-full" name="discount_type" :label="__('Discount Type')" :options="$discount_options"
                                     placeholder="Discount Type" choices/>
                    <x-splade-input  class="w-full" name="discount_amount" :label="__('Discount Amount')"  placeholder="Discount Amount" />
                </div>


                <x-splade-file name="images[]" :label="__('Images')" placeholder="Product Images" multiple filepond preview  max-size="1MB" :accept="['image/png', 'image/jpeg']" />


                <x-splade-submit :label="__($formMeta['title'])"/>
            </x-splade-form>
        </x-splade-modal>
