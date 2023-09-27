<x-splade-modal max-width="lg" :close-button="false">
    <div class="w-full flex">

        <x-vertical-recommended-products/>

        <div class="lg:w-[70%] md:w-[70%] w-[100%] min-h-scree max-h-screen overflow-y-auto overscroll-none">
            <div class="w-full py-4 flex justify-center relative">
                <span class="my-auto text-[25px] font-bold font-['Jost', sans-serif]">Cart ({{ $cartItems->count() }} Product)</span>
                <div class="h-full absolute right-10 top-50 ">
                    <button @click="modal.close"><i class="fa fa-xmark text-3xl"></i></button>
                </div>
            </div>
            <div class="w-full p-4">
                <div class="w-full grid grid-cols-1 gap-4 p-4 border-[2px] border-gray-200 rounded-xl">
                    @foreach($cartItems as $item)
                        <div class="w-full flex p-6">
                            <div class="w-[40%] p-4">
                                <img src="https://thehimalayanfarm.in/storage/313/23.jpg" alt="">
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
                                <div class="w-full  px-2 pt-4 pb-2  font-['Jost', sans-serif]">
                                    <span
                                        class="text-[#018472] lg:text-[18px] md:text-[18px] sm:text-[18px] text-[15px] ">Product Quantity</span>
                                </div>
                                <div class=" flex flex-row px-2  pb-2">
                                    <x-splade-form action="{{ route('store.cart.update', $item) }}"
                                                   submit-on-change="quantity" class=""
                                                   :default="['quantity'=>$item->quantity]" stay preserve-scroll
                                                   @success="$splade.emit('cart-updated')">
                                        <p v-if="form.processing">Updating Quantity.....</p>
                                        <div class="flex flex-row px-2  pb-2">

                                <span @click="`${form.quantity > 1 ? form.quantity-- : 1}`"
                                      class="bg-gray-200 lg:px-4 md:px-4 sm:px-2 px-2  lg:py-2 md:py-2 sm:py-1 py-1 text-[#018472] font-bold text-[15px]">
                                    -
                                </span>
                                            <x-splade-input name="quantity" type="number" min="1"
                                                            class="hidden w-1/5 bg-[#efefef] text-[#008973] py-6 xl:px-6 lg:px-4 md:px-4 sm:px-6 px-2 hover:scale-110 font-bold">
                                            </x-splade-input>
                                            <div class="flex bg-gray-200 border-gray-200 border-[1px] ">
                                                <span v-text="`${form.quantity}`" class="w-12 text-center my-auto"/>
                                            </div>
                                            <span @click="`${form.quantity++}`"
                                                  class="bg-gray-200 lg:px-4 md:px-4 sm:px-2 px-2  lg:py-2 md:py-2 sm:py-1 py-1 text-[#018472] font-bold text-[15px]">
                                    +
                                </span>
                                        </div>
                                        {{--                                    <x-splade-submit label="Update"--}}
                                        {{--                                        class="bg-gray-200 lg:px-6 md:px-6 sm:px-3 px-3 lg:py-2 md:py-2 sm:py-1 py-1 text-[#018472] font-bold text-[15px]">--}}
                                        {{--                                        </x-splade-submit>--}}
                                    </x-splade-form>
                                    <button
                                        class="bg-gray-200 lg:px-6 md:px-6 sm:px-3 px-3 lg:py-2 md:py-2 sm:py-1 py-1 text-[#018472] font-bold text-[15px]">
                                        <i class="fa fa-trash"></i></button>
                                </div>
                                <div class="w-full  px-2 pb-2  font-['Jost', sans-serif]">
                                    <span
                                        class="text-[#018472] lg:text-[18px] md:text-[18px] sm:text-[18px] text-[15px] ">Total Price: ₹{{ $item->variation->discountedPrice * $item->quantity }}</span>
                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>

                <div class="w-full grid grid-cols-1 gap-4 border-[2px] border-gray-200 rounded-xl mt-2 pb-4">
                    <div class="w-full bg-gray-100 py-4 px-6 border-b-[2px] border-b-gray-200 flex">
                        <span class="my-auto text-[22px] font-normal font-['Jost', sans-serif]">Cart Summary</span>
                    </div>
                    <div class="w-full flex flex-col">
                        <div class="w-full  px-6 pb-2  font-['Jost', sans-serif]">
                            <span class="text-black lg:text-[15px] md:text-[15px] sm:text-[15px] text-[12px] ">Total MRP: ₹ {{$summary['mrp']}}</span>
                        </div>
                        <div class="w-full  px-6 pb-2  font-['Jost', sans-serif]">
                          <span class=" text-black lg:text-[15px] md:text-[15px] sm:text-[15px] text-[12px] ">Discount on MRP:
                          <span class="text-[#018472]">
                              ₹{{ $summary['discount'] }}
                          </span>
                          </span>
                        </div>
                        <div class="w-full  px-6 pb-2  font-['Jost', sans-serif]">
                            <span class=" text-black lg:text-[15px] md:text-[15px] sm:text-[15px] text-[12px] ">Sub Total: ₹{{ $summary['subtotal'] }}</span>
                        </div>
                        <div class="w-full  px-6 pb-2  font-['Jost', sans-serif]">
                          <span class="text-black lg:text-[15px] md:text-[15px] sm:text-[15px] text-[12px] ">Shipping Charges:
                          <span class="text-[#018472]">
                            {{ $summary['shipping'] }}
                          </span>
                          </span>
                        </div>
                        <div class="w-full  px-6 pb-2  font-['Jost', sans-serif]">
                            <span
                                class="text-black lg:text-[15px] md:text-[15px] sm:text-[15px] text-[12px] ">Total: ₹{{$summary['subtotal']}}</span>
                        </div>
                    </div>

                    <div class="w-full flex px-6">
                        <span
                            class="my-auto text-[22px] font-normal font-['Jost', sans-serif]">Thiya Hearts ❤: ₹1999</span>
                        <button class="bg-[#018472] text-white text-[10px] ml-2 px-2 py-1 my-auto rounded-md">Redeem
                        </button>
                    </div>


                    {{--                  redeem points--}}
                    <div class="px-6">
                        <div class="w-full flex flex-wrap p-6 border-[1px] border-[#018472] rounded-lg">
                            <input type="text"
                                   class="lg:w-[40%] md:w-[60%] sm:w-[100%] w-[100%] rounded-md bg-white border-[1px] border-gray-200 p-2"
                                   placeholder="Points to Redeem">
                            <button class="bg-[#018472] text-white text-[10px] ml-2 px-2 py-1 my-auto rounded-md">
                                Redeem
                            </button>
                        </div>
                    </div>

                    {{--                  apply coupon--}}
                    <div class="px-6 flex w-full">
                        <div class="lg:w-[50%] md:w-[50%] sm:w-[100%] w-[100%] flex">
                            <div class="w-full flex flex-col pb-2  font-['Jost', sans-serif]">
                                <span class="text-gray-700 lg:text-[15px] md:text-[15px] sm:text-[15px] text-[12px] ">Coupon/Gift Card</span>
                                <input type="text" class="w-full rounded-md bg-white border-[1px] border-gray-200 p-2"
                                       placeholder="Coupon Code / Gift Card">
                            </div>
                            <button class="bg-[#018472] text-white text-[15px] w-max h-max my-auto ml-2 px-8 py-4 ">
                                Apply
                            </button>
                        </div>
                    </div>


                    {{--                  activate coupon--}}
                    <div class="px-6">
                        <div class="w-full flex flex-wrap justify-between p-6 border-[1px] border-[#018472] rounded-lg">
                            <div class=" my-auto  font-['Jost', sans-serif]">
                                <span
                                    class="text-[#018472] font-semibold lg:text-[16px] md:text-[16px] sm:text-[16px] text-[14px] "><i
                                        class="fa fa-tag"></i> Coupons</span>
                            </div>
                            <div class=" my-auto  font-['Jost', sans-serif]">
                                <span
                                    class="text-[#018472] font-semibold lg:text-[16px] md:text-[16px] sm:text-[16px] text-[14px] ">Show Coupons <i
                                        class="fa fa-sort-down"></i> </span>
                            </div>
                        </div>
                    </div>

                    {{--                  coupons card--}}
                    <div class="w-full">
                        <div class="w-full grid lg:grid-cols-4 md:grid-cols-2 sm:grid-cols-2 grid-cols-1 gap-4 px-6">
                            <div
                                class="w-full flex flex-col px-6 bg-gradient-to-r from-[#008973] to-[#63cfbd] py-8 rounded-md  relative">
                                <span class=" text-white mx-auto text-[17px] font-normal font-['Jost', sans-serif]">Get this order for:    ₹1999</span>
                                <button
                                    class="w-[50%] bg-transparent text-white text-[13px] w-full h-full mx-auto px-2 py-2 mt-4 border-[1px] border-white border-dotted ">
                                    CODE
                                </button>
                                <button
                                    class="w-[50%] bg-white text-black font-semibold text-[13px] w-full h-full mx-auto px-2 py-2">
                                    Apply Coupon
                                </button>
                                <div class="absolute -left-6 top-16 h-12 w-12 rounded-full bg-white"></div>
                                <div class="absolute -right-6 top-16 h-12 w-12 rounded-full bg-white"></div>

                            </div>
                            <div
                                class="w-full flex flex-col px-6 bg-gradient-to-r from-[#008973] to-[#63cfbd] py-8 rounded-md  relative">
                                <span class=" text-white mx-auto text-[17px] font-normal font-['Jost', sans-serif]">Get this order for:    ₹1999</span>
                                <button
                                    class="w-[50%] bg-transparent text-white text-[13px] w-full h-full mx-auto px-2 py-2 mt-4 border-[1px] border-white border-dotted ">
                                    CODE
                                </button>
                                <button
                                    class="w-[50%] bg-white text-black font-semibold text-[13px] w-full h-full mx-auto px-2 py-2">
                                    Apply Coupon
                                </button>
                                <div class="absolute -left-6 top-16 h-12 w-12 rounded-full bg-white"></div>
                                <div class="absolute -right-6 top-16 h-12 w-12 rounded-full bg-white"></div>

                            </div>
                            <div
                                class="w-full flex flex-col px-6 bg-gradient-to-r from-[#008973] to-[#63cfbd] py-8 rounded-md  relative">
                                <span class=" text-white mx-auto text-[17px] font-normal font-['Jost', sans-serif]">Get this order for:    ₹1999</span>
                                <button
                                    class="w-[50%] bg-transparent text-white text-[13px] w-full h-full mx-auto px-2 py-2 mt-4 border-[1px] border-white border-dotted ">
                                    CODE
                                </button>
                                <button
                                    class="w-[50%] bg-white text-black font-semibold text-[13px] w-full h-full mx-auto px-2 py-2">
                                    Apply Coupon
                                </button>
                                <div class="absolute -left-6 top-16 h-12 w-12 rounded-full bg-white"></div>
                                <div class="absolute -right-6 top-16 h-12 w-12 rounded-full bg-white"></div>

                            </div>
                            <div
                                class="w-full flex flex-col px-6 bg-gradient-to-r from-[#008973] to-[#63cfbd] py-8 rounded-md  relative">
                                <span class=" text-white mx-auto text-[17px] font-normal font-['Jost', sans-serif]">Get this order for:    ₹1999</span>
                                <button
                                    class="w-[50%] bg-transparent text-white text-[13px] w-full h-full mx-auto px-2 py-2 mt-4 border-[1px] border-white border-dotted ">
                                    CODE
                                </button>
                                <button
                                    class="w-[50%] bg-white text-black font-semibold text-[13px] w-full h-full mx-auto px-2 py-2">
                                    Apply Coupon
                                </button>
                                <div class="absolute -left-6 top-16 h-12 w-12 rounded-full bg-white"></div>
                                <div class="absolute -right-6 top-16 h-12 w-12 rounded-full bg-white"></div>

                            </div>
                        </div>
                    </div>

                    {{--                  checkout--}}
                    <div class="w-full flex flex-col mt-2 px-6">
                        <div class="w-full  pb-2  font-['Jost', sans-serif]">
                            <span class="text-[#018472]  text-[16px] ">Add Order Note:</span>
                        </div>
                        <div class="w-full  flex pb-2  font-['Jost', sans-serif]">
                            <input class="mr-2" type="checkbox" checked>
                            <span class="text-black  text-[12px] my-auto ">Email me with news and offers.</span>
                        </div>
                        <div>
                            <x-splade-form method="GET" action="{{ route('store.cart.checkout') }}">

                                <x-splade-submit class="bg-[#018472] text-white py-3 px-1">Proceed to Checkout
                                </x-splade-submit>
                            </x-splade-form>
                        </div>
                    </div>


                </div>
            </div>

        </div>
    </div>
</x-splade-modal>
