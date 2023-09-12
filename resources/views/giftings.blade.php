@extends('layouts.main')

@section('content')



        <div class="w-full">
            <div class="w-full flex lg:flex-row md:flex-row sm:flex-col flex-col">
                  <div class="lg:w-[70%]">
                      <img class="w-full" src="https://thehimalayanfarm.in/assets/frontend/img/slider/gift_2.webp" alt="">
                  </div>

                <div class="lg:w-[30%] flex px-4">
                      <div class="w-full h-max] border-[1px] border-gray-300 rounded-lg my-auto overflow-hidden">
                               <div class="w-full py-4 bg-[#f7f7f7] flex justify-center">
                                    <span>Buy Gift Card</span>
                               </div>


                          <div class="w-full p-6">
                               <div class="flex flex-col">
                                   <label for="amount" class="text-gray-400 text-md ">Gift Card Amount</label>
                                   <input class="bg-white border-[1px] border-gray-400 rounded-md placeholder:text-gray-400 mt-2" type="number" placeholder="Amount">
                               </div>
                          </div>
                      </div>
                </div>
            </div>
        </div>


    {{--    main heading--}}
    <div class=" w-full relative">
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
    {{--    products you may like  products--}}
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
@endsection
