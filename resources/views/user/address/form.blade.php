<x-splade-modal>
    <span class="text-xl font-bold">{{ $formMeta['title'] }}</span>
    <x-splade-form  :method="$formMeta['method']"  :action="$formMeta['action']" :default="$address ?? []">
        <x-splade-input name="first_line" label="First Line" placeholder="First Line" required/>
        <x-splade-input name="second_line" label="Second Line" placeholder="Second Line"/>
        <div class="flex w-full">
            <x-splade-input name="city" label="City" placeholder="City" required class="w-1/2 mr-1"/>
            <x-splade-input name="state" label="State" placeholder="State" required class="w-1/2 mr-1"/>
            <x-splade-input name="postal_code" label="Postal Code" placeholder="Postal Code" required class="w-1/2 mr-1"/>
        </div>
        <x-splade-input name="phone" label="Phone" placeholder="Phone" required/>
        <x-splade-checkbox name="default" label="Set as Default Address"/>
        <x-splade-submit :label="$formMeta['title']"  class="mt-1"/>
    </x-splade-form>
</x-splade-modal>
