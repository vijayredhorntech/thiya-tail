@seoTitle('Checkout | The Himalayan Farm')
<div class="w-full">
    <div class="w-full flex justify-between px-4 py-2">
        <div class="">
            <img class="lg:h-16 md:h-16 sm:h-16 h-12 w-full"
                 src="https://thehimalayanfarm.in/assets/frontend/img/logo/logo@2x.png" alt="">
        </div>
        <div class="flex ">
            <span
                class="font-normal lg:text-[30px] md:text-[30px] sm:text-[30px] text-[20px] my-auto">Order Checkout</span>
            <i class="fa fa-xmark ml-2 text-[red] font-bold my-auto text-[30px]"></i>
        </div>
    </div>
</div>


<div class="w-full">
    <div class="w-full px-4 mt-10 flex lg:flex-row md:flex-row flex-col gap-4">
        <div class="lg:w-[70%] md:w-[70%] w-[100%]">
            <div class="w-full h-max] border-[1px] border-gray-300 rounded-xl my-auto overflow-hidden">
                <div class="w-full py-2 bg-[#f7f7f7] flex flex-col px-6">
                    <span class="font-normal text-[30px]">Select Address for Delivery</span>
                    <Link href="{{ route('user.address.create') }}" modal
                          class="bg-[#008973] text-white p-1 w-max rounded-sm">
                    Add New Address</Link>

                </div>
                <div class="w-full px-6 py-2 text-[16px] flex flex-col gap-4">
                    <x-splade-table :for="$addresses">
                        <x-splade-cell address as="$address">
                            {{ $address->first_line }}, {{ $address->second_line }}, {{ $address->city }}
                            , {{ $address->state }}, {{ $address->postal_code }}, {{ $address->phone }}
                        </x-splade-cell>

                        <x-splade-cell actions as="$address">
                            <div class=" flex flex-row gap-4">
                                {{--                                @if($address->default)--}}
                                {{--                                <span class="bg-yellow-500 p-1 m-auto text-white rounded-md">Default</span>--}}
                                {{--                                @endif--}}
                                @if(session()->has('deliveryAddress') &&session()->get('deliveryAddress')->id == $address->id)
                                    <span class="bg-gray-200 rounded-md lg:px-6 md:px-6 sm:px-3 px-3 lg:py-2 md:py-2 sm:py-1 py-1 text-[#018472] font-bold text-[15px]">Delivering Here</span>
                                @else
                                    <Link href="{{ route('store.cart.set-delivery-address',$address) }}" modal
                                          class="bg-gray-200 rounded-md lg:px-6 md:px-6 sm:px-3 px-3 lg:py-2 md:py-2 sm:py-1 py-1 text-[#018472] font-bold text-[15px]">
                                    Deliver Here</Link>
                                @endif
                                <Link href="{{ route('user.address.edit',$address) }}" modal
                                      class="bg-gray-200 rounded-md lg:px-6 md:px-6 sm:px-3 px-3 lg:py-2 md:py-2 sm:py-1 py-1 text-[#018472] font-bold text-[15px]">
                                <i class="fa fa-edit"></i></Link>
                                <Link href="{{ route('user.address.delete',$address) }}" confirm
                                      class="bg-gray-200 rounded-md lg:px-6 md:px-6 sm:px-3 px-3 lg:py-2 md:py-2 sm:py-1 py-1 text-[#018472] font-bold text-[15px]">
                                <i class="fa fa-trash"></i></link>
                            </div>
                        </x-splade-cell>
                    </x-splade-table>

                </div>

            </div>
            <div class=" w-full mt-4">
                <div class="w-full p-2 flex relative">
                    <span class="my-auto text-[25px] font-thin font-['Jost', sans-serif]">Your Products (1)</span>
                </div>

                <div class="w-full border-[1px] px-2 py-1 flex gap-4 border-gray-300 rounded-md ">
                    <div class=" w-[40%]">
                        <span class="font-semibold text-black text-[15px]">Products</span>
                    </div>
                    <div class="w-[20%]">
                        <span class="font-semibold text-black text-[15px]">Price</span>
                    </div>
                    <div class=" w-[40%]">
                        <span class="font-semibold text-black text-[15px]">Quantity</span>
                    </div>

                </div>

                <div class="w-full mb-4">
                    <div class="w-full grid grid-cols-1 gap-4 p-2 border-[2px] border-gray-200 rounded-md">
                        @foreach($cart->items as $item)
                            <div class="w-full flex gap-4">
                                <div class="flex lg:flex-row flex-col w-[40%]">
                                    <div class="w-[80px] ">
                                        <img src="https://thehimalayanfarm.in/storage/313/23.jpg" alt="">
                                    </div>
                                    <div class="flex my-auto flex-col">
                                        <a href="">
                                            <h3 class=" lg:text-[15px] md:text-[13px] sm:text-[12px] text-[10px] font-['Jost', sans-serif] text-[#112433]">
                                                <strong>
                                                    {{ $item->product->name }}
                                                </strong>
                                            </h3>
                                        </a>
                                        <p class="text-gray-500 text-[12px]">{{ $item->variation->name }}</p>
                                    </div>
                                </div>
                                <div class="w-[20%]">
                                    <div class="flex my-auto flex-row  px-2 pt-4 pb-2  font-['Jost', sans-serif]">
                                        <span
                                            class="lg:text-[15px] md:text-[15px] sm:text-[15px] text-[12px] ml-2">₹ {{ $item->variation->discountedPrice * $item->quantity }}</span>
                                    </div>
                                </div>
                                <div class="w-[40%] h-ful flex">
                                    <div class=" flex flex-row px-2 my-auto  pb-2">
                                        <x-splade-form action="{{ route('store.cart.update', $item) }}"
                                                       submit-on-change="quantity" class="flex flex-row px-2  pb-2"
                                                       :default="['quantity'=>$item->quantity]"
                                                       @success="$splade.emit('cart-updated')">

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

                                        </x-splade-form>
                                        <button
                                            class="bg-gray-200 lg:px-6 md:px-6 sm:px-3 px-3 lg:py-2 md:py-2 sm:py-1 py-1 text-[#018472] font-bold text-[15px]">
                                            <i class="fa fa-trash"></i></button>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>

                </div>

            </div>


        </div>

        <div class="lg:w-[30%] md:w-[30%] w-[100%]">
            <div class="w-full h-max] border-[1px] border-gray-300 rounded-xl my-auto overflow-hidden">
                <div class="w-full py-2 bg-[#f7f7f7] flex px-6">
                    <span class="font-normal text-[30px]">Checkout</span>
                </div>
                <div class="w-full p-6 text-[16px] flex flex-col gap-4">
                    <p>
                        <span class="font-semibold">Delivery Address:</span>
                        @if($deliveryAddress)
                            {{ $deliveryAddress->completeAddress }}
                        @else
                            Select a Delivery Address
                        @endif
                    </p>
                    <p>
                        <span class="font-semibold">Total MRP:</span> ₹ {{ $summary['mrp'] }}
                    </p>
                    <p>
                        <span class="font-semibold">Discount on MRP:</span> <span class="text-green-500">₹ {{$summary['discount']}}</span>
                    </p>
                    <p>
                        <span class="font-semibold">Sub Total:</span> ₹ {{ $summary['subtotal'] }}
                    </p>
                    <p>
                        <span class="font-semibold">Delivery Charges:</span> {{$summary['shipping']}}
                    </p>
                    <p>
                        <span class="font-semibold">Total:</span> ₹ {{ $summary['total'] }}
                    </p>
                </div>

                <div class="w-full py-2 px-6 bg-[#f7f7f7] flex ">
                    <x-splade-form method="POST" action="{{ route('store.cart.payment') }}">
                        <x-splade-submit label="Proceed to Payment" class="bg-[#008973] text-white py-3 px-6"/>
                    </x-splade-form>
                </div>
            </div>
        </div>
    </div>
</div>
