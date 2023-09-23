<div class="w-full lg:rounded-3xl md:rounded-3xl sm:rounded-3xl rounded-lg overflow-hidden">
    <div class="w-full relative overflow-hidden">

        <Link href="{{ $detailUrl }}">
            <img class="w-full" src="{{ $media[0] }}"
                 alt="">
        </Link>
        @if(array_key_exists(1, $media))
            <Link href="{{ $detailUrl }}">
                <img class="w-full absolute top-0 left-0 opacity-0 hover:opacity-100" id="productImg1"
                     src="{{ $media[1] }}" alt="">

            </Link>
        @endif
        <div
            class="font-bold lg:text-[12px] md:text-[12px] sm:text-[10px] text-[8px] text-white bg-[#008973] px-12 rotate-45 py-1 absolute lg:top-[20px] md:top-[20px] sm:top-[15px] top-[10px] lg:right-[-55px] md:right-[-55px] sm:right-[-50px]  right-[-50px]"
            style="border-bottom: dotted white 2px">
            @if($discountType === 'percentage')
                {{ $discountAmount }}% OFF
            @else
                ₹ {{ $discountAmount }} OFF
            @endif
        </div>
    </div>
    <div class="flex flex-col lg:w-[75%] md:w-[75%] sm:w-[75%] w-[100%] p-2 ">
        <h4 class="font-sans">{{ $variationName }}</h4>
        <h4 class=" font-semibold font-sans lg:text-[18px] md:text-[18px] sm:text-[18px] text-[16px]  hover:text-[#2B96CC]"
            id="productName1">
            <strong>
        <Link href="{{ $detailUrl }}">
              {{ $name }}
        </Link>
            </strong>
        </h4>
    </div>
    <div class="text-[#9d9d9d] text-justify  max-h-[75px] overflow-hidden  min-h-[30px] font-normal px-2">
        {{ $summary }}
    </div>
    <div
        class="flex lg:flex-col md:flex-col sm:flex-col flex-row text-right justify-end px-2 pt-4 pb-2  font-['Jost', sans-serif]">
        <span
            class="line-through text-[#018472] lg:text-[15px] md:text-[15px] sm:text-[15px] text-[12px] ">₹ {{ $price }}</span>
        <strong class="lg:text-[18px] md:text-[18px] sm:text-[18px] text-[15px] ml-4">₹ {{ $discountedPrice }}</strong>
    </div>

    <div class="grid lg:grid-cols-2 md:grid-cols-2 sm:grid-cols-2 grid-cols-1">
        <div
            class="w-full flex justify-center bg-[#018472] border-white  lg:border-r-2 lg:border-b-0 md:border-b-0 sm:border-b-0 md:border-r-2 sm:border-r-2 border-b-2  ">
            <button
                class="text-white font-semibold hover:bg-yellow-500 lg:text-[15px] md:text-[12px] text-[15px]  transition ease-in-out delay-150 p-1">
                <i class="fas fa-heart mr-2"></i>
                <span>Wishlist</span>
            </button>
        </div>
        <div class="w-full flex justify-center bg-[#018472]">
            <button
                class="text-white font-semibold hover:bg-yellow-500 lg:text-[15px] md:text-[12px] text-[15px]  transition ease-in-out delay-150 p-1">
                <i class="fas fa-shopping-cart mr-2"></i>
                <span>Add To Cart</span>
            </button>
        </div>
    </div>


</div>
