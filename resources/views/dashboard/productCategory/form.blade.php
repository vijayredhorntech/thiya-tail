<x-splade-modal>
    <span class="text-xl font-bold">Category</span>
    <x-splade-form  method="put" enctype=" multipart/form-data" :action="$action" :default="$defaults ?? []">
        <x-splade-input name="name" label="Name" placeholder="Category Name" required/>
        <x-splade-file name="image" label="Image" placeholder="Category Image" filepond preview max-size="1MB" :accept="['image/png', 'image/jpeg']" required />
        <x-splade-textarea name="description" label="Description" placeholder="Category Description" />
        <x-splade-submit :label="__('Submit')"  class="mt-1"/>
    </x-splade-form>
</x-splade-modal>
