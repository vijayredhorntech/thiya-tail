@seoTitle('The Himalayan Farm | Store')
<x-frontend-layout>
    <div class="w-full px-4 mt-2">
        <div
            class="w-full flex lg:flex-nowrap md:flex-nowrap sm:flex-nowrap flex-wrap lg:flex-row  justify-between border-[1px] border-gray-300 px-4 rounded-lg">
            @foreach($categories as $category)

            <div class="lg:w-[10%] md:w-[10%] sm:w-[10%] w-[40%] flex justify-center  py-3">
                <a href="">
                    <img class=" w-full "
                         src="{{ asset($category->image) }}" alt="{{ $category->name }}">
                </a>
            </div>

            @endforeach
        </div>
    </div>


    <div class="w-full px-4 mt-4">
        <div class="w-full flex justify-center border-[1px] border-gray-300 p-4 rounded-lg">
            <h1 style="font-size: 25px">Showing All Products</h1>
        </div>
    </div>

    <div class="w-full px-2 mt-16 ">
        <div class="grid lg:grid-cols-4 md:grid-cols-4 sm:grid-cols-2 grid-cols-2 lg:gap-20 md:gap-5 sm:gap-10 gap-2">
            @foreach($products as $product)
                <x-product :product="$product"></x-product>
            @endforeach
        </div>
    </div>

</x-frontend-layout>
