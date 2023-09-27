<x-splade-modal max-width="lg" :close-button="false" >
    <div class="w-full flex">
        <x-vertical-recommended-products/>


        <div class="lg:w-[70%] md:w-[70%] w-[100%] min-h-scree max-h-screen overflow-y-auto overscroll-none">
            <div class="w-full py-4 flex justify-center relative">

                    <span class="my-auto text-[25px] font-bold font-['Jost', sans-serif]">Your Wishlist ({{ $wishlistItems->count() }})</span>
                <div class="h-full absolute right-10 top-50 ">
                    <button @click="modal.close"><i class="fa fa-xmark text-3xl"></i></button>
                </div>
            </div>
            <div class="w-full">
                <div class="w-full grid grid-cols-1 gap-4 p-4 border-[2px] border-gray-200 rounded-xl">
                    @forelse($wishlistItems as $item)
                        <div class="w-full flex">
                            <div class="w-[40%] p-4">
                                @php
                                    $image = $item->variation->media->count() ? $item->variation->media->first()->url : $item->product->media->first()->url;
                                @endphp
                                <img src="{{ $image }}" alt="{{ $item->variation->name }}">
                            </div>
                            <div class="w-[60%] p-4">
                                <div>
                                    <Link href="">
                                    <h3 class="lg:text-[28px] md:text-[28px] sm:text-[26px] text-[15px] font-['Jost', sans-serif] text-[#112433]">
                                        <strong>
                                            {{ $item->product->name }}({{ $item->variation->name }})
                                        </strong>
                                    </h3>
                                    </Link>
                                </div>
                                <div class="flex flex-row  px-2 pt-4 pb-2  font-['Jost', sans-serif]">
                                    <span
                                        class="line-through text-[#018472] lg:text-[15px] md:text-[15px] sm:text-[15px] text-[12px] ">₹ {{ $item->variation->price }}</span>
                                    <span
                                        class="lg:text-[15px] md:text-[15px] sm:text-[15px] text-[12px] ml-2">₹ {{ $item->variation->discountedPrice }}</span>
                                </div>
                                <div class=" flex flex-row gap-4 px-2  pb-2">
                                    <x-splade-form method="POST" action="{{ route('store.wishlist.move-to-cart',$item) }}">
                                    <x-splade-submit label="Move To Cart"
                                        class="bg-gray-200 lg:px-6 md:px-6 sm:px-3 px-3 lg:py-2 md:py-2 sm:py-1 py-1 text-[#018472] font-normal text-[15px] flex flex-col">
                                        <i class="fa fa-cart-shopping mx-auto"></i>Move To Cart</x-splade-submit>
                                    </x-splade-form>
                                    <Link href="{{ route('store.wishlist.remove',$item) }}" stay method="POST"
                                          class="bg-gray-200 lg:px-6 md:px-6 sm:px-3 px-3 lg:py-2 md:py-2 sm:py-1 py-1 text-[#018472] font-normal text-[15px] flex flex-col">
                                    <i class="fa fa-trash mx-auto"></i> Remove</Link>
                                </div>
                            </div>
                        </div>
                    @empty
                        <div class="w-full flex justify-center">
                            <span
                                class="my-auto text-[25px] font-bold font-['Jost', sans-serif]">No Items in Wishlist</span>
                        </div>
                    @endforelse
                </div>

            </div>
            @if($wishlistItems->count())
                <div class="w-full p-4">
                    <div class="w-full  flex gap-4 p-4 border-[2px] border-gray-200 rounded-xl">
                        <x-splade-form method="POST" href="{{ route('store.wishlist.move-all-to-cart') }}">
                            <x-splade-submit label="Move All
                                To Cart"
                                class="bg-[#008973] text-white font-semibold lg:px-8 md:px-8 sm:px-6 px-4 py-4">
                            </x-splade-submit>
                        </x-splade-form>
                        <x-splade-form method="POST" href="{{ route('store.wishlist.empty') }}">
                            <x-splade-submit label="Clear
                                Wishlist"
                                class="bg-[#008973] text-white font-semibold lg:px-8 md:px-8 sm:px-6 px-4 py-4">
                            </x-splade-submit>
                        </x-splade-form>
                    </div>

                </div>
            @endif


        </div>
    </div>

</x-splade-modal>
