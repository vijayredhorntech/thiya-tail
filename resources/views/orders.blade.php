@extends('layouts.main')

@section('content')

   <div class="w-full px-8 py-1">
       <div class="w-full py-4 bg-[#f7f7f7] flex px-6 border-[1px] border-gray-300 rounded-xl ">
           <span class="font-normal text-[30px]">Order Id: THIYA2301254 | Order Status: <button class="bg-[#008973] text-white p-1 px-2 w-max h-max ml-2 rounded-sm text-sm">Pending</button></span>
           <div class="w-full rounded-xl bg-white border-[1px] border-gray-300 mt-4 hidden">
               <div class="w-full p-6">
                   <div class="flex flex-col mb-2">
                       <label for="amount" class="text-gray-400 text-sm ">Address Line One</label>
                       <input class="bg-white border-[1px] border-gray-400 rounded-md placeholder:text-gray-400 mt-2" type="text" placeholder="Address Line One">
                   </div>
                   <div class="flex lg:flex-row md:flex-row flex-col gap-4 mb-2">
                       <div class="lg:w-[50%] md:w-[50%] w-[100%] flex flex-col mb-2">
                           <label for="amount" class="text-gray-400 text-sm ">Address Line Two</label>
                           <input class="bg-white border-[1px] border-gray-400 rounded-md placeholder:text-gray-400 mt-2" type="text" placeholder="Address Line Two">
                       </div>

                       <div class="lg:w-[50%] md:w-[50%] w-[100%] flex flex-col mb-2">
                           <label for="amount" class="text-gray-400 text-sm ">Phone</label>
                           <input class="bg-white border-[1px] border-gray-400 rounded-md placeholder:text-gray-400 mt-2" type="number" placeholder="Phone">
                       </div>

                   </div>
                   <div class="flex lg:flex-row md:flex-row flex-col gap-4 mb-2">
                       <div class="lg:w-[33%] md:w-[33%] w-[100%] flex flex-col mb-2">
                           <label for="amount" class="text-gray-400 text-sm ">City</label>
                           <input class="bg-white border-[1px] border-gray-400 rounded-md placeholder:text-gray-400 mt-2" type="text" placeholder="City">
                       </div>

                       <div class="lg:w-[33%] md:w-[33%] w-[100%] flex flex-col mb-2">
                           <label for="amount" class="text-gray-400 text-sm ">State</label>
                           <input class="bg-white border-[1px] border-gray-400 rounded-md placeholder:text-gray-400 mt-2" type="text" placeholder="State">
                       </div>
                       <div class="lg:w-[33%] md:w-[33%] w-[100%] flex flex-col mb-2">
                           <label for="amount" class="text-gray-400 text-sm ">Zip Code</label>
                           <input class="bg-white border-[1px] border-gray-400 rounded-md placeholder:text-gray-400 mt-2" type="number" placeholder="Zip Code">
                       </div>

                   </div>
                   <div class=" flex justify-center mt-4">
                       <button class="bg-[#008973] text-white py-3 px-6 w-max">Save</button>
                   </div>
               </div>

           </div>
       </div>
   </div>

   <div class="w-full px-8 py-1">
       <div class="w-full py-4 bg-[#d4edda] flex flex-col px-6 rounded-sm ">
           <span class="font-normal text-[20px] text-green-800">Payment Success!</span>
           <p class="text-[12px] text-gray-500 mt-2">
               Your payment has been successfully received. Your order will be delivered soon.
           </p>

       </div>
   </div>

   <div class="w-full">
        <div class="w-full px-8 mt-10 flex lg:flex-row md:flex-row flex-col gap-4 ">
            <div class="lg:w-[70%] md:w-[70%] w-[100%]">
                <div class="w-full h-max] border-[1px] border-gray-300 rounded-xl my-auto overflow-hidden">
                    <div class="w-full py-2 text-[16px] flex flex-col gap-4">
                        <div class="w-full p-6 text-[16px] flex flex-col gap-4">
                            <p>
                                <span class="font-semibold text-[20px]">Delivery Address</span>
                            </p>
                            <p>
                                wz-65, Palam Village, NEW DELHI, Himachal Pradesh, 110045
                                09560246813
                            </p>

                        </div>
                    </div>

                </div>
            </div>

            <div class="lg:w-[30%] md:w-[30%] w-[100%]">
                <div class="w-full h-max] border-[1px] border-gray-300 rounded-xl my-auto overflow-hidden">
                    <div class="w-full p-6 text-[16px] flex flex-col gap-4">
                        <p>
                            <span class="font-semibold text-[20px]">Order Details</span>
                        </p>
                        <p>
                            <span class="font-semibold">Ordered On:</span>09 Aug 2023, 17:45 PM
                        </p>
                        <p>
                            <span class="font-semibold">Amount:</span> ₹ 2900
                        </p>
                        <p>
                            <span class="font-semibold">Payment Status: </span> Success
                        </p>
                        <p>
                            <span class="font-semibold">Payment Method:</span> upi
                        </p>
                    </div>

                </div>
            </div>
        </div>
    </div>

   <div class="w-full mb-4">
       <div class="w-full px-8 mt-10  gap-4">
           <div class="w-full">
               <div class="w-full h-max] border-[1px] border-gray-300 rounded-xl my-auto overflow-hidden p-6">
                       <div class="w-full mb-4">
                           <div class="w-max grid grid-cols-1 gap-4 p-2 border-[2px] border-gray-200 rounded-md mb-2">
                               <div class="w-full flex gap-4">
                                   <div class="flex lg:flex-row flex-col w-full">
                                       <div class="w-[150px] ">
                                           <img src="https://thehimalayanfarm.in/storage/313/23.jpg" alt="">
                                       </div>
                                       <div class="flex my-auto flex-col">
                                           <a href="">
                                               <h3 class=" lg:text-[20px] md:text-[18px] sm:text-[15px] text-[12px] font-['Jost', sans-serif] text-[#112433]">
                                                   <strong>
                                                       FARM FRESH HIMALAYAN ROYAL DELICIOUS APPLES
                                                   </strong>
                                               </h3>
                                           </a>
                                           <p class="text-gray-500 text-[15px]" > <span class="font-semibold">Price:</span>₹ 3359</p>
                                           <p class="text-gray-500 text-[15px]" > <span class="font-semibold">Subtotal:</span>₹ 3359</p>
                                       </div>
                                   </div>
                               </div>
                           </div>
                           <div class="w-max grid grid-cols-1 gap-4 p-2 border-[2px] border-gray-200 rounded-md mb-2">
                               <div class="w-full flex gap-4">
                                   <div class="flex lg:flex-row flex-col w-full">
                                       <div class="w-[150px] ">
                                           <img src="https://thehimalayanfarm.in/storage/313/23.jpg" alt="">
                                       </div>
                                       <div class="flex my-auto flex-col">
                                           <a href="">
                                               <h3 class=" lg:text-[20px] md:text-[18px] sm:text-[15px] text-[12px] font-['Jost', sans-serif] text-[#112433]">
                                                   <strong>
                                                       FARM FRESH HIMALAYAN ROYAL DELICIOUS APPLES
                                                   </strong>
                                               </h3>
                                           </a>
                                           <p class="text-gray-500 text-[15px]" > <span class="font-semibold">Price:</span>₹ 3359</p>
                                           <p class="text-gray-500 text-[15px]" > <span class="font-semibold">Subtotal:</span>₹ 3359</p>
                                       </div>
                                   </div>
                               </div>
                           </div>

                       </div>
               </div>
           </div>

       </div>
   </div>

@endsection
