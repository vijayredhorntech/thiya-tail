@seoTitle($product->name . ' | The Himalayan Farm')
<x-frontend-layout>
    <div class="w-full mt-4">
        <div class="w-full flex lg:flex-row md:flex-row  flex-col gap-2">
            <div class="lg:w-[50%]  gap-4 p-4 lg:flex md:flex hidden ">
                 <Product-images :images="@js($images)" selectedVariation="{{ $variation->id }}"></Product-images>

            </div>
            <div class="lg:w-[50%] flex gap-4 p-4 lg:hidden md:hidden block ">
                <div class="swiffy-slider">
                    <ul class="slider-container">
                        <li><img src="https://thehimalayanfarm.in/storage/314/conversions/27-optimized.webp" class="w-full sm:h-[500px] h-[400px]"></li>
                        <li><img src="https://thehimalayanfarm.in/storage/313/conversions/23-optimized.webp" class="w-full sm:h-[500px] h-[400px]"></li>
                        <li><img src="https://thehimalayanfarm.in/storage/315/conversions/32-optimized.webp" class="w-full sm:h-[500px] h-[400px]"></li>
                        <li><img src="https://thehimalayanfarm.in/storage/312/IMG_20220910_100942.jpg" class="w-full sm:h-[500px] h-[400px]"></li>
                        <li><img src="https://thehimalayanfarm.in/storage/311/IMG_20220910_095850.jpg" class="w-full sm:h-[500px] h-[400px]"></li>
                        <li>   <video class="w-full sm:h-[500px] h-[400px] videoSection" controls>
                                <source class="videoSrc " src="https://thehimalayanfarm.in/storage/videos/1/augmxv6Ow5OAxuGaai6IZvcxkXViyPgb7QapdLvo.mp4" type="video/mp4">
                            </video></li>
                    </ul>
                </div>

            </div>
            <div class="lg:w-[50%] p-4">
                <div class="xl:w-[65%] lg:w-[80%] md:w-[100%] w-[100%] flex flex-col font-['Rubik', sans-serif]">
                        <span class="font-bold text-[22px]">
                        {{ $product->name }}({{ $variation->name }})
                        </span>
                    <span class="text-[20px] text-black font-normal ">₹{{ $variation->discountedPrice }} <span class="line-through font-semibold text-[#c4cfd8] ml-2">₹ {{ $variation->price }}</span></span>

                    <div class="w-full text-justify mt-8">
                              <span class="text-[#7b8e9d] text-[14px] font-normal leading-8 text-justify mt-6">
                                    {{ $product->summary }}
                        </span>
                    </div>

                    <div class="w-full">
                        <img src="{{ asset('storage/'.$product->summary_image) }}" alt="{{ $product->name }}">
                    </div>
                    <div class="mt-4 flex gap-4">

                        @foreach($product->variations as $var)
                            <Link class="bg-{{ $var->slug  === $variation->slug ? '[#008a74] text-white' : '[#f5f5ff]'}} px-4 py-2 rounded-full text-sm"  href="{{ route('store.product',['product'=>$product->slug,'variation'=>$var->slug]) }}" >{{ $var->name }}</Link>
                        @endforeach
                    </div>

                    <div class="w-full flex mt-4 ">
                        <button class="bg-[#efefef] text-[#008973] py-6 xl:px-6 lg:px-4 md:px-4 sm:px-6 px-2 hover:scale-110 font-bold"><i class="fa fa-minus"></i></button>
                        <button class="bg-[#efefef] text-[#008973] py-6 xl:px-6 lg:px-4 md:px-4 sm:px-6 px-2 hover:scale-110 font-bold">1</button>
                        <button class="bg-[#efefef] text-[#008973] py-6 xl:px-6 lg:px-4 md:px-4 sm:px-6 px-2 hover:scale-110 font-bold"><i class="fa fa-plus"></i></button>
                        <button class="bg-[#efefef] text-[#008973] py-6 xl:px-6 lg:px-4 md:px-4 sm:px-6 px-2 hover:scale-110 font-normal"><i class="fa fa-shopping-cart"></i> Add To Cart</button>
                        <button class="bg-[#efefef] text-[#008973] py-6 xl:px-6 lg:px-4 md:px-4 sm:px-6 px-2 hover:scale-110 font-normal"><i class="fa fa-heart"></i> Wishlist</button>
                    </div>



                </div>


            </div>

        </div>
    </div>
    <div class="mt-4 px-4">
        <div class="w-full border-b-[1px] border-b-gray-200">
            <div class="w-max py-4 border-b-[2px] border-b-red-500">
                 <span class="text-black font-semibold text-md">
                     Description
                 </span>
            </div>
        </div>

        <div class="w-full mt-3 hidden md:inline">
            <span>{{ $product->description }}</span>
        </div>

        <div class="w-full mt-3 md:hidden">
            <span>{{ $product->mobile_description }}</span>
        </div>





    </div>
    <div class="mt-4 px-4">
        <div class="w-full border-b-[1px] border-b-gray-200">
            <div class="w-max py-4 border-b-[2px] border-b-red-500">
                         <span class="text-black font-semibold text-md">
                             Reviews(0)
                         </span>
            </div>
        </div>

        <div class="w-full mt-3">
            <span>No reviews yet</span>
        </div>
        <div class="w-full border-[1px] border-gray-300 flex flex-col ">
            <div class="flex flex-col">
                <div class="w-max flex p-4 gap-4">
                    <div class="h-32 w-32 rounded-full">
                        <img class="h-full w-full object-cover rounded-full" src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80" alt="">
                    </div>
                    <div class="flex flex-col gap-2 my-auto">
                    <span>
                        <i class="fa fa-star text-yellow-500"></i>
                        <i class="fa fa-star text-yellow-500"></i>
                        <i class="fa fa-star text-yellow-500"></i>
                        <i class="fa fa-star text-yellow-500"></i>
                    </span>
                        <span class="text-md font-semibold text-black ">User Name</span>
                        <span class="text-xs font-thin text-gray-400 ">April 1, 2021</span>
                    </div>
                </div>
                <div class="p-4">
                      <span class="text-[#7b8e9d] text-[14px] font-normal leading-8 text-justify mt-6">
                                  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid asperiores dolorem ex incidunt inventore perferendis rem sint. Accusamus, animi autem ducimus magnam odio recusandae. A ab aliquam animi delectus dolorem dolores illo in laborum nulla quasi quia quibusdam sapiente sint soluta totam vel, velit voluptatum. Aperiam at dolores ex quis.
                        </span>
                </div>
            </div>

            <div class="flex flex-col">
                <div class="w-max flex p-4 gap-4">
                    <div class="h-32 w-32 rounded-full">
                        <img class="h-full w-full object-cover rounded-full" src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80" alt="">
                    </div>
                    <div class="flex flex-col gap-2 my-auto">
                    <span>
                        <i class="fa fa-star text-yellow-500"></i>
                        <i class="fa fa-star text-yellow-500"></i>
                        <i class="fa fa-star text-yellow-500"></i>
                        <i class="fa fa-star text-yellow-500"></i>
                    </span>
                        <span class="text-md font-semibold text-black ">User Name</span>
                        <span class="text-xs font-thin text-gray-400 ">April 1, 2021</span>
                    </div>
                </div>
                <div class="p-4">
                      <span class="text-[#7b8e9d] text-[14px] font-normal leading-8 text-justify mt-6">
                                  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid asperiores dolorem ex incidunt inventore perferendis rem sint. Accusamus, animi autem ducimus magnam odio recusandae. A ab aliquam animi delectus dolorem dolores illo in laborum nulla quasi quia quibusdam sapiente sint soluta totam vel, velit voluptatum. Aperiam at dolores ex quis.
                        </span>
                </div>
            </div>
        </div>

    </div>
    <div class="mt-4 px-4">
        <div class="w-full h-max] border-[1px] border-gray-300 rounded-lg my-auto overflow-hidden">
            <div class="w-full py-4 bg-[#f7f7f7] flex px-2">
                <span>Review Product</span>
            </div>
            {{--            <div class="w-full p-6 ">--}}
            {{--                 <div class="w-full p-4 rounded-md bg-red-100">--}}
            {{--                        <span class="font-normal text-md">You need to Login to review this product</span>--}}
            {{--                 </div>--}}
            {{--            </div>--}}
            <div class="w-full p-6">
                <div class="flex flex-col mb-2">
                    <label for="amount" class="text-gray-400 text-sm ">Review Text:</label>
                    <textarea class="bg-white border-[1px] border-gray-400 rounded-md placeholder:text-gray-400 mt-2 focus:ring-0 focus:outline-none " rows="5"  placeholder="Write your review"></textarea>
                </div>
                <div class="flex flex-col mb-2">
                    <label for="amount" class="text-gray-400 text-sm ">Upload Images:</label>
                    <input class="form-control bg-white border-[1px] border-gray-400 rounded-md placeholder:text-gray-400 mt-2 p-2 focus:ring-0 focus:outline-none " type="file" placeholder="No file Chosen">
                </div>
                <div class="w-full py-4 flex ">
                    <button class="bg-[#008973] text-white py-3 px-6">Submit Review</button>
                </div>
            </div>


        </div>


    </div>



    {{--    heading--}}
    <div class=" w-full relative mt-8">
        <div class="w-full py-4 flex flex-col text-center">
            <img class="lg:w-[250px] md:w-[250px] sm:w-[200px] w-[180px] m-auto "
                 src="https://thehimalayanfarm.in/assets/frontend/img/shape/1.png" alt="">
            <h2 class="font-bold lg:text-[35px] md:text-[35px] text-[30px] font-sans m-auto">
                Products You May Like
            </h2>
            <h4 class="lg:text-[25px] md:text-[25px] text-[20px] font-sans m-auto">

            </h4>

            <div class=" absolute top-[80%] left-0  w-full flex justify-center">
                <img src="https://thehimalayanfarm.in/assets/frontend/img/shape/2.png" alt="">
            </div>
        </div>
    </div>
    {{--    prodcuts you may like--}}
    <div class="w-full px-2 mt-8 ">
        <div class="grid lg:grid-cols-4 md:grid-cols-4 sm:grid-cols-2 grid-cols-2 lg:gap-20 md:gap-5 sm:gap-10 gap-2">
            <div class="w-full lg:rounded-3xl md:rounded-3xl sm:rounded-3xl rounded-lg overflow-hidden">
                <div class="w-full relative overflow-hidden">
                    <a href="">
                        <img class="w-full" src="https://thehimalayanfarm.in/storage/313/conversions/23-optimized.webp"
                             alt="">

                    </a>
                    <a href="">
                        <img class="w-full absolute top-0 left-0 opacity-0 hover:opacity-100" id="productImg1"
                             src="https://thehimalayanfarm.in/storage/314/conversions/27-optimized.webp" alt="">

                    </a>
                    <div
                        class="font-bold lg:text-[15px] md:text-[15px] sm:text-[12px] text-[10px] text-white bg-[#008973] px-12 rotate-45 py-1 absolute lg:top-[20px] md:top-[20px] sm:top-[15px] top-[10px] lg:right-[-55px] md:right-[-55px] sm:right-[-50px]  right-[-50px]"
                        style="border-bottom: dotted white 2px">
                        10.00% OFF
                    </div>
                </div>
                <div class="flex flex-col lg:w-[75%] md:w-[75%] sm:w-[75%] w-[100%] p-2 ">
                    <h4 class="font-sans">5Kg</h4>
                    <h4 class=" font-semibold font-sans lg:text-[18px] md:text-[18px] sm:text-[18px] text-[16px]  hover:text-[#2B96CC]"
                        id="productName1">
                        <strong>
                            <a href="">FARM FRESH HIMALAYAN ROYAL DELICIOUS APPLES</a>
                        </strong>
                    </h4>
                </div>
                <div class="text-[#9d9d9d] text-justify  max-h-[75px] overflow-hidden  min-h-[30px] font-normal px-2">
                    Crowned with flavor, Royal Apple reigns supreme. Its regal appearance hides a ta ...
                </div>
                <div
                    class="flex lg:flex-col md:flex-col sm:flex-col flex-row text-right justify-end px-2 pt-4 pb-2  font-['Jost', sans-serif]">
                    <span class="line-through text-[#018472] lg:text-[15px] md:text-[15px] sm:text-[15px] text-[12px] ">₹ 1,999.00</span>
                    <strong class="lg:text-[18px] md:text-[18px] sm:text-[18px] text-[15px] ml-4">₹ 1,999.00</strong>
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
            <div class="w-full lg:rounded-3xl md:rounded-3xl sm:rounded-3xl rounded-lg overflow-hidden">
                <div class="w-full relative overflow-hidden">
                    <a href="">
                        <img class="w-full" src="https://thehimalayanfarm.in/storage/313/conversions/23-optimized.webp"
                             alt="">

                    </a>
                    <a href="">
                        <img class="w-full absolute top-0 left-0 opacity-0 hover:opacity-100" id="productImg1"
                             src="https://thehimalayanfarm.in/storage/314/conversions/27-optimized.webp" alt="">

                    </a>
                    <div
                        class="font-bold lg:text-[15px] md:text-[15px] sm:text-[12px] text-[10px] text-white bg-[#008973] px-12 rotate-45 py-1 absolute lg:top-[20px] md:top-[20px] sm:top-[15px] top-[10px] lg:right-[-55px] md:right-[-55px] sm:right-[-50px]  right-[-50px]"
                        style="border-bottom: dotted white 2px">
                        10.00% OFF
                    </div>
                </div>
                <div class="flex flex-col lg:w-[75%] md:w-[75%] sm:w-[75%] w-[100%] p-2 ">
                    <h4 class="font-sans">5Kg</h4>
                    <h4 class=" font-semibold font-sans lg:text-[18px] md:text-[18px] sm:text-[18px] text-[16px]  hover:text-[#2B96CC]"
                        id="productName1">
                        <strong>
                            <a href="">FARM FRESH HIMALAYAN ROYAL DELICIOUS APPLES</a>
                        </strong>
                    </h4>
                </div>
                <div class="text-[#9d9d9d] text-justify  max-h-[75px] overflow-hidden  min-h-[30px] font-normal px-2">
                    Crowned with flavor, Royal Apple reigns supreme. Its regal appearance hides a ta ...
                </div>
                <div
                    class="flex lg:flex-col md:flex-col sm:flex-col flex-row text-right justify-end px-2 pt-4 pb-2  font-['Jost', sans-serif]">
                    <span class="line-through text-[#018472] lg:text-[15px] md:text-[15px] sm:text-[15px] text-[12px] ">₹ 1,999.00</span>
                    <strong class="lg:text-[18px] md:text-[18px] sm:text-[18px] text-[15px] ml-4">₹ 1,999.00</strong>
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
            <div class="w-full lg:rounded-3xl md:rounded-3xl sm:rounded-3xl rounded-lg overflow-hidden">
                <div class="w-full relative overflow-hidden">
                    <a href="">
                        <img class="w-full" src="https://thehimalayanfarm.in/storage/313/conversions/23-optimized.webp"
                             alt="">

                    </a>
                    <a href="">
                        <img class="w-full absolute top-0 left-0 opacity-0 hover:opacity-100" id="productImg1"
                             src="https://thehimalayanfarm.in/storage/314/conversions/27-optimized.webp" alt="">

                    </a>
                    <div
                        class="font-bold lg:text-[15px] md:text-[15px] sm:text-[12px] text-[10px] text-white bg-[#008973] px-12 rotate-45 py-1 absolute lg:top-[20px] md:top-[20px] sm:top-[15px] top-[10px] lg:right-[-55px] md:right-[-55px] sm:right-[-50px]  right-[-50px]"
                        style="border-bottom: dotted white 2px">
                        10.00% OFF
                    </div>
                </div>
                <div class="flex flex-col lg:w-[75%] md:w-[75%] sm:w-[75%] w-[100%] p-2 ">
                    <h4 class="font-sans">5Kg</h4>
                    <h4 class=" font-semibold font-sans lg:text-[18px] md:text-[18px] sm:text-[18px] text-[16px]  hover:text-[#2B96CC]"
                        id="productName1">
                        <strong>
                            <a href="">FARM FRESH HIMALAYAN ROYAL DELICIOUS APPLES</a>
                        </strong>
                    </h4>
                </div>
                <div class="text-[#9d9d9d] text-justify  max-h-[75px] overflow-hidden  min-h-[30px] font-normal px-2">
                    Crowned with flavor, Royal Apple reigns supreme. Its regal appearance hides a ta ...
                </div>
                <div
                    class="flex lg:flex-col md:flex-col sm:flex-col flex-row text-right justify-end px-2 pt-4 pb-2  font-['Jost', sans-serif]">
                    <span class="line-through text-[#018472] lg:text-[15px] md:text-[15px] sm:text-[15px] text-[12px] ">₹ 1,999.00</span>
                    <strong class="lg:text-[18px] md:text-[18px] sm:text-[18px] text-[15px] ml-4">₹ 1,999.00</strong>
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
            <div class="w-full lg:rounded-3xl md:rounded-3xl sm:rounded-3xl rounded-lg overflow-hidden">
                <div class="w-full relative overflow-hidden">
                    <a href="">
                        <img class="w-full" src="https://thehimalayanfarm.in/storage/313/conversions/23-optimized.webp"
                             alt="">

                    </a>
                    <a href="">
                        <img class="w-full absolute top-0 left-0 opacity-0 hover:opacity-100" id="productImg1"
                             src="https://thehimalayanfarm.in/storage/314/conversions/27-optimized.webp" alt="">

                    </a>
                    <div
                        class="font-bold lg:text-[15px] md:text-[15px] sm:text-[12px] text-[10px] text-white bg-[#008973] px-12 rotate-45 py-1 absolute lg:top-[20px] md:top-[20px] sm:top-[15px] top-[10px] lg:right-[-55px] md:right-[-55px] sm:right-[-50px]  right-[-50px]"
                        style="border-bottom: dotted white 2px">
                        10.00% OFF
                    </div>
                </div>
                <div class="flex flex-col lg:w-[75%] md:w-[75%] sm:w-[75%] w-[100%] p-2 ">
                    <h4 class="font-sans">5Kg</h4>
                    <h4 class=" font-semibold font-sans lg:text-[18px] md:text-[18px] sm:text-[18px] text-[16px]  hover:text-[#2B96CC]"
                        id="productName1">
                        <strong>
                            <a href="">FARM FRESH HIMALAYAN ROYAL DELICIOUS APPLES</a>
                        </strong>
                    </h4>
                </div>
                <div class="text-[#9d9d9d] text-justify  max-h-[75px] overflow-hidden  min-h-[30px] font-normal px-2">
                    Crowned with flavor, Royal Apple reigns supreme. Its regal appearance hides a ta ...
                </div>
                <div
                    class="flex lg:flex-col md:flex-col sm:flex-col flex-row text-right justify-end px-2 pt-4 pb-2  font-['Jost', sans-serif]">
                    <span class="line-through text-[#018472] lg:text-[15px] md:text-[15px] sm:text-[15px] text-[12px] ">₹ 1,999.00</span>
                    <strong class="lg:text-[18px] md:text-[18px] sm:text-[18px] text-[15px] ml-4">₹ 1,999.00</strong>
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
        </div>
    </div>

</x-frontend-layout>
