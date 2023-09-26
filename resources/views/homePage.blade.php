@seoTitle(__('THIYA |  HOME'))

<x-frontend-layout>
    <x-home-slider/>
    <WelcomeMessage></WelcomeMessage>

    {{--    main heading--}}
    <div class=" w-full relative">
        <div class="w-full py-4 flex flex-col text-center">
            <img class="lg:w-[250px] md:w-[250px] sm:w-[200px] w-[180px] m-auto "
                 src="https://thehimalayanfarm.in/assets/frontend/img/shape/1.png" alt="">
            <h2 class="font-bold lg:text-[35px] md:text-[35px] text-[30px] font-sans m-auto">
                Featured Products
            </h2>
            <h4 class="lg:text-[25px] md:text-[25px] text-[20px] font-sans m-auto">

            </h4>

            <div class=" absolute top-[80%] left-0  w-full flex justify-center">
                <img src="https://thehimalayanfarm.in/assets/frontend/img/shape/2.png" alt="">
            </div>
        </div>
    </div>

    {{--    featured products--}}
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

    {{--Our Beliefs--}}
    <div class=" mb-6 mt-10 py-6  w-full bg-[url('https://thehimalayanfarm.in/assets/frontend/img/bg/bg4.jpg')] bg-center bg-cover">
        <div class="w-full flex justify-center">
            <h2 class="text-white font-['Jost', sans-serif] text-[2rem]">
                <strong>Our Beliefs</strong>
            </h2>
        </div>
        <div class="w-full grid lg:grid-cols-4 md:grid-cols-4 grid-cols-2  gap-4 px-2 mt-2">
            <div class="w-full  px-2 ">
                <img class="w-[150px] rounded-[30%] m-auto"
                     src="https://thehimalayanfarm.in/assets/frontend/img/why/1.png" alt="">

                <div class="w-full flex flex-col">
                 <span class="m-auto text-[20px] font-semibold text-white font-['Jost', sans-serif] mt-6 text-center">
                    Supporting Himalayan Women
                </span>
                    <p class="m-auto text-center text-[13px] font-normal leading-8 tracking-wide text-white font-['Jost', sans-serif] mt-2">
                        We believe in empowering Himalayan women by promoting gender equality, women's rights, inclusivity
                        and diversity in the Himalayan region. We help them by providing them with skills training and
                        development programs, job opportunities and health and well-being support.
                    </p>
                </div>
            </div>
            <div class="w-full  px-2 ">
                <img class="w-[150px] rounded-[30%] m-auto"
                     src="https://thehimalayanfarm.in/assets/frontend/img/why/2.png" alt="">
             <div class="w-full flex flex-col">
                    <span class="m-auto text-[20px] font-semibold text-white font-['Jost', sans-serif] mt-6 text-center">
                  Farmer Strengthening
                </span>
                 <p class="m-auto text-center text-[13px] font-normal leading-8 tracking-wide text-white font-['Jost', sans-serif] mt-2">
                     Our goal is to give farmers fair prices, end to end pickup, logistics support & networking
                     opportunities and access to markets. We provide education and training programs. Post-harvest losses
                     are also reduced by diverting the extra produce creating small batches of Himalayan products
                 </p>
             </div>
            </div>
            <div class="w-full  px-2 ">
                <img class="w-[150px] rounded-[30%] m-auto"
                     src="https://thehimalayanfarm.in/assets/frontend/img/why/3.png" alt="">
                <div class="w-full flex flex-col">
                        <span class="m-auto text-[20px] font-semibold text-white font-['Jost', sans-serif] mt-6 text-center">
                  Sustainability Matters
                </span>
                    <p class="m-auto text-center text-[13px] font-normal leading-8 tracking-wide text-white font-['Jost', sans-serif] mt-2">
                        We are dedicated towards promoting sustainable agricultural practices. We strive to reduce our
                        environmental impact by offering eco-friendly packaging and investing in renewable technologies for
                        storage, production and transportation</p>
                </div>
            </div>
            <div class="w-full  px-2 ">
                <img class="w-[150px] rounded-[30%] m-auto"
                     src="https://thehimalayanfarm.in/assets/frontend/img/why/4.png" alt="">
                 <div class="w-full flex flex-col">
                       <span class="m-auto text-[20px] font-semibold text-white font-['Jost', sans-serif] mt-6 text-center">
                  Consumer Awareness
                </span>
                     <p class="m-auto text-center text-[13px] font-normal leading-8 tracking-wide text-white font-['Jost', sans-serif] mt-2">
                         We have a transparent consumer-farmer connection by sharing grower details, harvesting time, license details, processing method, packaging time, pricing and quality of the product. We are also creating engaging content about the Himalayas, traditions and ecology.
                     </p>
                 </div>
            </div>
        </div>
        <div class="w-full flex justify-center mt-2">
            <a href="" class="m-auto bg-white text-[#008a74] hover:bg-yellow-500 hover:text-white py-[15px] px-[45px] transition ease-in-out delay-150   font-semibold">
                Read More
            </a>
        </div>
    </div>

    {{--    main heading--}}
    <div class=" w-full relative">
        <div class="w-full py-4 flex flex-col text-center">
            <img class="lg:w-[250px] md:w-[250px] sm:w-[200px] w-[180px] m-auto "
                 src="https://thehimalayanfarm.in/assets/frontend/img/shape/1.png" alt="">
            <h2 class="font-bold lg:text-[35px] md:text-[35px] text-[30px] font-sans m-auto">
                Our Catalog
            </h2>
            <h4 class="lg:text-[25px] md:text-[25px] text-[20px] font-sans m-auto">

            </h4>

            <div class=" absolute top-[80%] left-0  w-full flex justify-center">
                <img src="https://thehimalayanfarm.in/assets/frontend/img/shape/2.png" alt="">
            </div>
        </div>
    </div>

    {{--Our Catalog--}}
    <div class="w-full  mb-10">
       <div class="lg:w-[60%] md:w-[90%] sm:w-[70%] w-[90%]  m-auto grid lg:grid-cols-4 md:grid-cols-4 grid-cols-2">
           <div class="w-full border-b-[1px] border-b-gray-200 border-r-[1px] border-r-gray-200 py-4 lg:px-4 md:px-4 sm:px-2 flex justify-center">
               <img class="lg:h-[90px] md:h-[70px] sm:h-[70px] h-[55px] max-w-[100%] " src="https://thehimalayanfarm.in/assets/frontend/img/categories/category_1.jpg" alt="">
           </div>
           <div class="w-full border-b-[1px] border-b-gray-200  lg:border-r-[1px] lg:border-r-gray-200 md:border-r-[1px] md:border-r-gray-200 border-r-0 py-4 lg:px-4 md:px-4 sm:px-2 flex justify-center">
               <img class="lg:h-[90px] md:h-[70px] sm:h-[70px] h-[55px] max-w-[100%] " src="https://thehimalayanfarm.in/assets/frontend/img/categories/category_2.jpg" alt="">
           </div>
           <div class="w-full border-b-[1px] border-b-gray-200 border-r-[1px] border-r-gray-200 py-4 lg:px-4 md:px-4 sm:px-2 flex justify-center">
               <img class="lg:h-[90px] md:h-[70px] sm:h-[70px] h-[55px] max-w-[100%] " src="https://thehimalayanfarm.in/assets/frontend/img/categories/category_3.jpg" alt="">
           </div>
           <div class="w-full border-b-[1px] border-b-gray-200  py-4 lg:px-4 md:px-4 sm:px-2 flex justify-center">
               <img class="lg:h-[90px] md:h-[70px] sm:h-[70px] h-[55px] max-w-[100%] " src="https://thehimalayanfarm.in/assets/frontend/img/categories/category_4.jpg" alt="">
           </div>
           <div class="w-full lg:border-b-0 md:border-b-0 border-b-[1px] border-b-gray-200 border-r-[1px] border-r-gray-200 py-4 lg:px-4 md:px-4 sm:px-2 flex justify-center">
               <img class="lg:h-[90px] md:h-[70px] sm:h-[70px] h-[55px] max-w-[100%] " src="https://thehimalayanfarm.in/assets/frontend/img/categories/category_5.jpg" alt="">
           </div>
           <div class="w-full lg:border-b-0 md:border-b-0 border-b-[1px] border-b-gray-200 lg:border-r-[1px] lg:border-r-gray-200 md:border-r-[1px] md:border-r-gray-200 border-r-0  py-4 lg:px-4 md:px-4 sm:px-2 flex justify-center">
               <img class="lg:h-[90px] md:h-[70px] sm:h-[70px] h-[55px] max-w-[100%] " src="https://thehimalayanfarm.in/assets/frontend/img/categories/category_6.jpg" alt="">
           </div>
           <div class="w-full border-r-[1px] border-r-gray-200 py-4 lg:px-4 md:px-4 sm:px-2 flex justify-center">
               <img class="lg:h-[90px] md:h-[70px] sm:h-[70px] h-[55px] max-w-[100%] " src="https://thehimalayanfarm.in/assets/frontend/img/categories/category_7.jpg" alt="">
           </div>
           <div class="w-full py-2 lg:px-4 md:px-4 sm:px-2 flex justify-center">
               <img class="lg:h-[90px] md:h-[70px] sm:h-[70px] h-[55px] max-w-[100%] " src="https://thehimalayanfarm.in/assets/frontend/img/categories/category_8.jpg" alt="">
           </div>
       </div>
        <div class="w-full flex justify-center mt-4">
            <a href="" class="m-auto bg-[#008a74] text-white hover:bg-yellow-500 hover:text-white py-[15px] px-[45px] transition ease-in-out delay-150   font-semibold">
                Shop All Categories
            </a>
        </div>
    </div>

    {{--Our Story--}}
    <div class=" mb-6 mt-10 py-6  w-full bg-[url('https://thehimalayanfarm.in/assets/frontend/img/bg/bg4.jpg')] bg-center bg-cover">
        <div class="xl:w-[65%] lg:w-[80%] md:w-[90%] sm:w-[70%] w-[90%] flex lg:flex-row md:flex-row sm:flex-col flex-col m-auto  px-2 mt-2 text-white">
            <div class=" lg:w-[60%] md:w-[60%] w-[100%]">
                <div class="w-full flex flex-col">
                     <span class="text-[35px] font-bold  font-['Jost', sans-serif] mt-6">
                       Our Story
                    </span>
                        <p class=" text-left text-[17px] font-semibold leading-8 tracking-wide font-['Jost', sans-serif] mt-2">
                            "Nestled in the heart of the Himalayas, our story begins in Shimla. It was here that we discovered the true taste of the mountains - the freshest, most authentic and wholesome flavors of farm-fresh apples, Rajma, rice, desi ghee, jams, and dry fruits. These products, sourced directly from small and middle holding farmers and women self-help groups of Himachal Pradesh and Jammu & Kashmir, were unlike anything we had ever tasted before. Our love for these products and the people who grew them led us to start our own brand, dedicated to introducing consumers to the true taste of the Himalayas. Join us on our journey to discover the taste of the Himalayas while supporting local communities. We guarantee you won't be disappointed."
                        </p>
                    <div class="w-full flex mt-4">
                        <a href="" class=" bg-white text-[#008a74] hover:bg-yellow-500 hover:text-white py-[15px] px-[45px] transition ease-in-out delay-150   font-semibold">
                            Read More
                        </a>
                    </div>
                </div>
            </div>
            <div class=" lg:w-[40%] md:w-[40%] w-[100%] px-2 py-6 ">
                <img class="w-[420px] rounded-lg m-auto hover:scale-90 transition ease-in-out  duration-700"
                     src="https://thehimalayanfarm.in/assets/frontend/img/about/our-story.webp" alt="">
            </div>
        </div>
    </div>

    {{--    main heading--}}
    <div class=" w-full relative">
        <div class="w-full py-4 flex flex-col text-center">
            <img class="lg:w-[250px] md:w-[250px] sm:w-[200px] w-[180px] m-auto "
                 src="https://thehimalayanfarm.in/assets/frontend/img/shape/1.png" alt="">
            <h2 class="font-bold lg:text-[35px] md:text-[35px] text-[30px] font-sans m-auto">
                Our Family
            </h2>
            <h4 class="lg:text-[25px] md:text-[25px] text-[20px] font-sans m-auto">

            </h4>

            <div class=" absolute top-[80%] left-0  w-full flex justify-center">
                <img src="https://thehimalayanfarm.in/assets/frontend/img/shape/2.png" alt="">
            </div>
        </div>
    </div>

    {{--Our family--}}
    <div class=" mb-6  py-3 w-full">
        <div class="xl:px-[20%] lg:px-[10%] md:px-[10%] sm:px-[15%] px-[5%]  m-auto grid lg:grid-cols-2 md:grid-cols-2 grid-cols-1  gap-[50px] px-2 mt-2">
            <div class=" w-full  rounded-md relative">
                <img class=" w-full lg:h-[725px] md:h-[725px] sm:h-[725px] h-[500px] rounded-md" src="https://thehimalayanfarm.in/assets/frontend/img/community/farmer.webp" alt="">

                <div class="w-full py-4 lg:h-[725px] md:h-[725px] sm:h-[725px] h-[max-content] flex flex-col rounded-md lg:absolute lg:top-0 lg:left-0 md:absolute md:top-0 md:left-0  sm:absolute sm:top-0 sm:left-0 static lg:mt-0 md:mt-0 sm:mt-0 mt-2 h-full bg-[#018472bd] px-2 lg:opacity-0 md:opacity-0 sm:opacity-0 opacity-100 lg:hover:opacity-100 md:hover:opacity-100 sm:hover:opacity-100 transition ease-in-out delay-150 " style="justify-content: space-between">
                     <span class=" w-full text-center xl:text-[36px] lg:text-[35px] md:text-[35px] sm:text-[35px] text-[24px] font-bold text-white font-['Jost', sans-serif] mt-6 border-b-[1px] border-b-gray-300">
                        Our Hardworking Farmers
                    </span>
                   <div style="display: flex; align-items: center; ">
                       <p class=" mx-auto text-center xl:text-[21px] lg:text-[20px] md:text-[18px] sm:text-[23px] text-[15px] font-normal xl:leading-2 leading-loose  text-white font-['Jost', sans-serif] mt-2">
                           Our farmers are the custodians of the land, they work hard to cultivate the freshest fruits and vegetables, herbs, spices and other products that are unique to the region. They are committed to sustainable farming practices and preserving the natural beauty of the region. They are also our partners in promoting sustainable rural development and preserving the natural beauty of the region.
                       </p>
                   </div>
                    <div class=" w-full flex mt-4">
                        <a href="" class=" mx-auto bg-white text-[#008a74] hover:bg-yellow-500 hover:text-white py-[15px] px-[45px] transition ease-in-out delay-150   font-semibold">
                            Read More
                        </a>
                    </div>
                </div>


            </div>
            <div class=" w-full  rounded-md relative">
                <img class=" w-full lg:h-[725px] md:h-[725px] sm:h-[725px] h-[500px] rounded-md" src="https://thehimalayanfarm.in/assets/frontend/img/community/our.webp" alt="">

                <div class="w-full py-4 lg:h-[725px] md:h-[725px] sm:h-[725px] h-[max-content] flex flex-col rounded-md lg:absolute lg:top-0 lg:left-0 md:absolute md:top-0 md:left-0  sm:absolute sm:top-0 sm:left-0 static lg:mt-0 md:mt-0 sm:mt-0 mt-2 h-full bg-[#018472bd] px-2 lg:opacity-0 md:opacity-0 sm:opacity-0 opacity-100 lg:hover:opacity-100 md:hover:opacity-100 sm:hover:opacity-100 transition ease-in-out delay-150 " style="justify-content: space-between">
                     <span class="w-full text-center xl:text-[36px] lg:text-[35px] md:text-[35px] sm:text-[35px] text-[24px] font-bold text-white font-['Jost', sans-serif] mt-6 border-b-[1px] border-b-gray-300">
                        Our Superwomen
                    </span>
                    <div style="display: flex; align-items: center; ">
                        <p class=" mx-auto text-center xl:text-[21px] lg:text-[20px] md:text-[18px] sm:text-[23px] text-[15px] font-normal xl:leading-2 leading-loose  text-white font-['Jost', sans-serif] mt-2">
                            Our self-help groups, on the other hand, are composed of strong and determined women who are dedicated to improving their economic and social well-being. They come together to provide our customers with the pure, handcrafted and elite quality products from the Himalayas. They take great care in crafting these products that are unique to the region. They are a vital part of our company.
                        </p>
                    </div>
                    <div class=" w-full flex mt-4">
                        <a href="" class=" mx-auto bg-white text-[#008a74] hover:bg-yellow-500 hover:text-white py-[15px] px-[45px] transition ease-in-out delay-150   font-semibold">
                            Read More
                        </a>
                    </div>
                </div>


            </div>
        </div>
    </div>

    {{--Love Notes--}}
    <div class=" mb-6 mt-10 py-6  w-full bg-[url('https://thehimalayanfarm.in/assets/frontend/img/bg/bg4.jpg')] bg-center bg-cover">
        <div class="w-full flex  flex-col">
            <h2 class=" m-auto text-white font-['Jost', sans-serif] text-[2rem]">
                <strong>Love Notes <i>🤍</i></strong>
            </h2>
            <h2 class=" m-auto text-white font-['Jost', sans-serif] text-[1.3rem]">
                <span>Hear these fresh reviews, hope you like our himalayan products too ;)</span>
            </h2>

        </div>
        <div class="w-full grid lg:grid-cols-4 md:grid-cols-4 grid-cols-2  gap-4 px-2 mt-2">
            <div class="w-full   px-2 ">
                <img class="w-full rounded-md m-auto"
                     src="https://thehimalayanfarm.in/storage/130/conversions/21-optimized.webp" alt="">

            </div>
            <div class="w-full   px-2 ">
                <img class="w-full rounded-md m-auto"
                     src="https://thehimalayanfarm.in/storage/135/conversions/26-optimized.webp" alt="">
            </div>
            <div class="w-full   px-2 ">
                <img class="w-full rounded-md m-auto"
                     src="https://thehimalayanfarm.in/storage/102/conversions/3-optimized.webp" alt="">
            </div>
            <div class="w-full   px-2 ">
                <img class="w-full rounded-md m-auto"
                     src="https://thehimalayanfarm.in/storage/133/conversions/24-optimized.webp" alt="">
            </div>
        </div>

    </div>

    {{--    main heading--}}
    <div class=" w-full relative">
        <div class="w-full py-4 flex flex-col text-center">
            <img class="lg:w-[250px] md:w-[250px] sm:w-[200px] w-[180px] m-auto "
                 src="https://thehimalayanfarm.in/assets/frontend/img/shape/1.png" alt="">
            <h2 class="font-bold lg:text-[35px] md:text-[35px] text-[30px] font-sans m-auto">
                Meet Our Instagram Family
            </h2>
            <h4 class="lg:text-[25px] md:text-[25px] text-[20px] font-sans m-auto">
                Follow, like, share, message us,we love all that.
            </h4>


            <div class=" absolute top-[80%] left-0  w-full flex justify-center">
                <img src="https://thehimalayanfarm.in/assets/frontend/img/shape/2.png" alt="">
            </div>
        </div>
    </div>

        {{--Our Instagram Family--}}
    <div class=" mb-6 mt-10 py-6  w-full bg-[url('https://thehimalayanfarm.in/assets/frontend/img/bg/bg4.jpg')] bg-center bg-cover">
        <div class="w-full flex  flex-col">
            <h2 class=" m-auto text-white font-['Jost', sans-serif] text-[2rem]">
                <strong>Love Notes <i>🤍</i></strong>
            </h2>
            <h2 class=" m-auto text-white font-['Jost', sans-serif] text-[1.3rem]">
                <span>Hear these fresh reviews, hope you like our himalayan products too ;)</span>
            </h2>

        </div>
        <div class="w-full grid lg:grid-cols-4 md:grid-cols-4 grid-cols-2  gap-4 px-2 mt-2">
            <div class="w-full   px-2 ">
                <img class="w-full rounded-md m-auto"
                     src="https://thehimalayanfarm.in/storage/130/conversions/21-optimized.webp" alt="">

            </div>
            <div class="w-full   px-2 ">
                <img class="w-full rounded-md m-auto"
                     src="https://thehimalayanfarm.in/storage/135/conversions/26-optimized.webp" alt="">
            </div>
            <div class="w-full   px-2 ">
                <img class="w-full rounded-md m-auto"
                     src="https://thehimalayanfarm.in/storage/102/conversions/3-optimized.webp" alt="">
            </div>
            <div class="w-full   px-2 ">
                <img class="w-full rounded-md m-auto"
                     src="https://thehimalayanfarm.in/storage/133/conversions/24-optimized.webp" alt="">
            </div>
        </div>

    </div>


    {{--    main heading--}}
    <div class=" w-full relative">
        <div class="w-full py-4 flex flex-col text-center">
            <img class="lg:w-[250px] md:w-[250px] sm:w-[200px] w-[180px] m-auto "
                 src="https://thehimalayanfarm.in/assets/frontend/img/shape/1.png" alt="">
            <h2 class="font-bold lg:text-[35px] md:text-[35px] text-[30px] font-sans m-auto">
                Learn With Thiya
            </h2>
            <h4 class="lg:text-[25px] md:text-[25px] text-[20px] font-sans m-auto">
            </h4>


            <div class=" absolute top-[80%] left-0  w-full flex justify-center">
                <img src="https://thehimalayanfarm.in/assets/frontend/img/shape/2.png" alt="">
            </div>
        </div>
    </div>

    {{--Learn With Thiya--}}
    <div class="w-full lg:px-10 md:px-10 sm:px-4 px-4 mt-8">
        <div class="grid lg:grid-cols-4 md:grid-cols-4 sm:grid-cols-2 grid-cols-2 lg:gap-10 md:gap-5 sm:gap-10 gap-2">
            <div class="w-full pb-4 lg:rounded-3xl md:rounded-3xl sm:rounded-3xl rounded-lg overflow-hidden border-[1px] border-gray-300">
                <div class="w-full relative overflow-hidden">
                    <a href="">
                        <img class="w-full" src="https://thehimalayanfarm.in/storage/264/21.jpg"
                             alt="">

                    </a>
                </div>
                <div class="flex flex-col  p-4 ">
                    <h4 class="font-sans text-[12px]  text-[#6f7172]">
                        <i class="fa fa-calendar text-[#018472] text-sm "></i>
                       <span class="ml-2 uppercase leading-4"> Fri,14 Apr, 2023</span>
                    </h4>
                    <h5 class=" font-normal font-sans lg:text-[16px] md:text-[16px] sm:text-[16px] text-[14px]  hover:text-[#2B96CC] mt-2">
                            <a href="">The importance of supporting conservation and preservation of biodiversity in the Himalayas</a>
                    </h5>
                </div>
                <div class="text-[#9d9d9d] text-justify lg:text-[13px] md:text-[13px] sm:text-[13px] text-[10px]  max-h-[75px] leading-8 overflow-hidden  min-h-[30px] font-normal px-4">
                    When you buy products from a store, have you ever wondered about the journey of the product before i...
                </div>


              <div class="w-full px-4">
                  <button
                      class="text-white bg-[#018472] font-semibold hover:bg-yellow-500 lg:text-[15px] md:text-[12px] text-[15px]  transition ease-in-out delay-150 py-4 px-8 mt-2">
                      <span>Read More</span>
                  </button>
              </div>


            </div>
            <div class="w-full pb-4 lg:rounded-3xl md:rounded-3xl sm:rounded-3xl rounded-lg overflow-hidden border-[1px] border-gray-300">
                <div class="w-full relative overflow-hidden">
                    <a href="">
                        <img class="w-full" src="https://thehimalayanfarm.in/storage/263/19.jpg"
                             alt="">

                    </a>
                </div>
                <div class="flex flex-col  p-4 ">
                    <h4 class="font-sans text-[12px]  text-[#6f7172]">
                        <i class="fa fa-calendar text-[#018472] text-sm "></i>
                       <span class="ml-2 uppercase leading-4"> Fri,14 Apr, 2023</span>
                    </h4>
                    <h5 class=" font-normal font-sans lg:text-[16px] md:text-[16px] sm:text-[16px] text-[14px]  hover:text-[#2B96CC] mt-2">
                            <a href="">The importance of supporting conservation and preservation of biodiversity in the Himalayas</a>
                    </h5>
                </div>
                <div class="text-[#9d9d9d] text-justify lg:text-[13px] md:text-[13px] sm:text-[13px] text-[10px]  max-h-[75px] leading-8 overflow-hidden  min-h-[30px] font-normal px-4">
                    When you buy products from a store, have you ever wondered about the journey of the product before i...
                </div>


              <div class="w-full px-4">
                  <button
                      class="text-white bg-[#018472] font-semibold hover:bg-yellow-500 lg:text-[15px] md:text-[12px] text-[15px]  transition ease-in-out delay-150 py-4 px-8 mt-2">
                      <span>Read More</span>
                  </button>
              </div>


            </div>
            <div class="w-full pb-4 lg:rounded-3xl md:rounded-3xl sm:rounded-3xl rounded-lg overflow-hidden border-[1px] border-gray-300">
                <div class="w-full relative overflow-hidden">
                    <a href="">
                        <img class="w-full" src="https://thehimalayanfarm.in/storage/264/21.jpg"
                             alt="">

                    </a>
                </div>
                <div class="flex flex-col  p-4 ">
                    <h4 class="font-sans text-[12px]  text-[#6f7172]">
                        <i class="fa fa-calendar text-[#018472] text-sm "></i>
                        <span class="ml-2 uppercase leading-4"> Fri,14 Apr, 2023</span>
                    </h4>
                    <h5 class=" font-normal font-sans lg:text-[16px] md:text-[16px] sm:text-[16px] text-[14px]  hover:text-[#2B96CC] mt-2">
                        <a href="">The importance of supporting conservation and preservation of biodiversity in the Himalayas</a>
                    </h5>
                </div>
                <div class="text-[#9d9d9d] text-justify lg:text-[13px] md:text-[13px] sm:text-[13px] text-[10px]  max-h-[75px] leading-8 overflow-hidden  min-h-[30px] font-normal px-4">
                    When you buy products from a store, have you ever wondered about the journey of the product before i...
                </div>


                <div class="w-full px-4">
                    <button
                        class="text-white bg-[#018472] font-semibold hover:bg-yellow-500 lg:text-[15px] md:text-[12px] text-[15px]  transition ease-in-out delay-150 py-4 px-8 mt-2">
                        <span>Read More</span>
                    </button>
                </div>


            </div>
            <div class="w-full pb-4 lg:rounded-3xl md:rounded-3xl sm:rounded-3xl rounded-lg overflow-hidden border-[1px] border-gray-300">
                <div class="w-full relative overflow-hidden">
                    <a href="">
                        <img class="w-full" src="https://thehimalayanfarm.in/storage/263/19.jpg"
                             alt="">

                    </a>
                </div>
                <div class="flex flex-col  p-4 ">
                    <h4 class="font-sans text-[12px]  text-[#6f7172]">
                        <i class="fa fa-calendar text-[#018472] text-sm "></i>
                        <span class="ml-2 uppercase leading-4"> Fri,14 Apr, 2023</span>
                    </h4>
                    <h5 class=" font-normal font-sans lg:text-[16px] md:text-[16px] sm:text-[16px] text-[14px]  hover:text-[#2B96CC] mt-2">
                        <a href="">The importance of supporting conservation and preservation of biodiversity in the Himalayas</a>
                    </h5>
                </div>
                <div class="text-[#9d9d9d] text-justify lg:text-[13px] md:text-[13px] sm:text-[13px] text-[10px]  max-h-[75px] leading-8 overflow-hidden  min-h-[30px] font-normal px-4">
                    When you buy products from a store, have you ever wondered about the journey of the product before i...
                </div>


                <div class="w-full px-4">
                    <button
                        class="text-white bg-[#018472] font-semibold hover:bg-yellow-500 lg:text-[15px] md:text-[12px] text-[15px]  transition ease-in-out delay-150 py-4 px-8 mt-2">
                        <span>Read More</span>
                    </button>
                </div>


            </div>

        </div>
        <div class="w-full flex px-4 mt-4 ">
            <button
                class=" m-auto text-white bg-[#018472] font-semibold hover:bg-yellow-500 lg:text-[15px] md:text-[12px] text-[15px]  transition ease-in-out delay-150 py-4 px-8 mt-2">
                <span>Read More Blogs</span>
            </button>
        </div>
    </div>

    {{--    main heading--}}
    <div class=" w-full relative">
        <div class="w-full py-4 flex flex-col text-center">
            <img class="lg:w-[250px] md:w-[250px] sm:w-[200px] w-[180px] m-auto "
                 src="https://thehimalayanfarm.in/assets/frontend/img/shape/1.png" alt="">
            <h2 class="font-bold lg:text-[35px] md:text-[35px] text-[30px] font-sans m-auto">
               We are recognized by
            </h2>
            <h4 class="lg:text-[25px] md:text-[25px] text-[20px] font-sans m-auto">
            </h4>


            <div class=" absolute top-[80%] left-0  w-full flex justify-center">
                <img src="https://thehimalayanfarm.in/assets/frontend/img/shape/2.png" alt="">
            </div>
        </div>
    </div>

    {{--We are recognized by--}}
    <div class="w-full mb-12">
         <div class="grid lg:grid-cols-6 md:grid-cols-6 grid-cols-2 gap-4">
             <div class="w-full col-span-2 flex justify-center">
                 <img class="w-auto h-[100px] " src="https://thehimalayanfarm.in/assets/frontend/img/footer/brandlogo4.jpg" alt="">
             </div>
             <div class="w-full flex justify-center">
                 <img class="w-auto h-[100px] " src="https://thehimalayanfarm.in/assets/frontend/img/footer/brandlogo2.png" alt="">
             </div>
             <div class="w-full flex justify-center">
                 <img class="w-auto h-[100px] " src="https://thehimalayanfarm.in/assets/frontend/img/footer/brandlogo3.png" alt="">
             </div>
             <div class="w-full flex justify-center">
                 <img class="w-auto h-[100px] " src="https://thehimalayanfarm.in/assets/frontend/img/footer/brandlogo1.gif" alt="">
             </div>
             <div class="w-full flex justify-center">
                 <img class="w-auto h-[100px] " src="https://thehimalayanfarm.in/assets/frontend/img/footer/msme.png" alt="">
             </div>
         </div>
    </div>

    {{--    main heading--}}
    <div class=" w-full relative">
        <div class="w-full py-4 flex flex-col text-center">
            <img class="lg:w-[250px] md:w-[250px] sm:w-[200px] w-[180px] m-auto "
                 src="https://thehimalayanfarm.in/assets/frontend/img/shape/1.png" alt="">
            <h2 class="font-bold lg:text-[35px] md:text-[35px] text-[30px] font-sans m-auto">
                Our Products
            </h2>
            <h4 class="lg:text-[25px] md:text-[25px] text-[20px] font-sans m-auto">

            </h4>

            <div class=" absolute top-[80%] left-0  w-full flex justify-center">
                <img src="https://thehimalayanfarm.in/assets/frontend/img/shape/2.png" alt="">
            </div>
        </div>
    </div>

    {{--    our products--}}
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
