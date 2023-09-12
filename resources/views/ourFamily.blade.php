@extends('layouts.main')

@section('content')

    {{--      image and video banner--}}
    <div class="w-full lg:h-[90vh] md:h-[80vh] sm:h-[60vh] h-[50vh] mb-4">
        <div class="w-full h-full relative">
            {{--                 <video class="w-[100%] h-[100%]" autoplay src="https://thehimalayanfarm.in/assets/frontend/img/slider/video.mp4"></video>--}}
            <img class="w-full h-full object-cover" src="https://thehimalayanfarm.in/assets/frontend/img/slider/slider2-1.webp" alt="">
            <div class="absolute top-0 left-0 w-full h-full bg-black/50 flex justify-center ">
                <div class="lg:w-[80%] md:w-[80%] w-[95%] h-max my-auto flex flex-col text-white font-['Jost', sans-serif] bg-black/50 p-4">
                    <span class=" lg:text-[40px] md:text-[40px] text-[30px] mx-auto">Our Mission</span>
                    <p class=" lg:text-[24px] md:text-[24px] text-[15px] text-center mx-auto font-semibold mt-2">
                        Our mission is to connect consumers with the pure and natural bounty of the Himalayas, while supporting sustainable rural development through the promotion of locally sourced and freshly produced products infused with ayurvedic, scientific and traditional knowledge directly from the farms family to yours.
                    </p>
                </div>
            </div>
        </div>
    </div>

    {{--    left right text and images section--}}
    <div class=" mb-6 mt-10   w-full bg-white">
        <div class="xl:w-[65%] lg:w-[80%] w-[90%] flex lg:flex-row md:flex-row sm:flex-col-reverse flex-col-reverse m-auto  px-2 text-black">
            <div class=" lg:w-[50%] md:w-[60%] w-[100%]">
                <div class="w-full flex flex-col px-4">
                     <span class="lg:text-[43px] md:text-[43px] sm:text-[40px] text-[35px] font-bold  font-['Jost', sans-serif]">
                       Our Superwomen
                    </span>
                    <p class=" text-justify lg:text-[20px] md:text-[20px] sm:text-[17px] text-[15px] font-normal leading-8 tracking-wide font-['Jost', sans-serif] mt-2">
                        Our self-help groups, on the other hand, are composed of strong and determined women who are dedicated to improving their economic and social well-being. They come together to pool their savings, access credit and support each other in order to improve their livelihoods.
                    </p>

                    <ul class="list-disc text-justify lg:text-[17px] md:text-[17px] sm:text-[14px] text-[12px] font-normal; leading-8 tracking-wide font-['Jost', sans-serif] mt-2 ">
                    </ul>

                </div>
            </div>
            <div class=" lg:w-[50%] md:w-[40%] w-[100%] px-4 flex">
                <img class="w-[100%] rounded-lg m-auto hover:scale-90 transition ease-in-out duration-700"
                     src="https://thehimalayanfarm.in/assets/frontend/img/family/superwomen.jpg" alt="">
            </div>
        </div>
    </div>


    <div class=" mb-6 mt-10 py-6  w-full  bg-white">
        <div class="xl:w-[65%] lg:w-[80%] w-[90%] flex lg:flex-row-reverse md:flex-row-reverse sm:flex-col-reverse flex-col-reverse m-auto  px-2 text-black">
            <div class=" lg:w-[50%] md:w-[60%] w-[100%]">
                <div class="w-full flex flex-col px-4">
                     <span class="lg:text-[43px] md:text-[43px] sm:text-[40px] text-[35px] font-bold  font-['Jost', sans-serif]">
                       Our Hardworking Farmers
                    </span>
                    <p class=" text-justify lg:text-[20px] md:text-[20px] sm:text-[17px] text-[15px] font-normal; leading-8 tracking-wide font-['Jost', sans-serif] mt-2">
                        Our farmers are the custodians of the land, they work hard to cultivate the farm fresh fruits and vegetables, herbs, spices and other products that are unique to the region. They are committed to sustainable farming practices and preserving the natural beauty of the region. They are also our partners in promoting sustainable rural development and preserving the natural beauty of the region.
                    </p>
                    <ul class="list-disc text-justify lg:text-[17px] md:text-[17px] sm:text-[14px] text-[12px] font-normal; leading-8 tracking-wide font-['Jost', sans-serif] mt-2 ">
                    </ul>
                </div>
            </div>
            <div class=" lg:w-[50%] md:w-[40%] w-[100%] px-4 flex">
                <img class="w-[100%] rounded-lg m-auto hover:scale-90 transition ease-in-out duration-700"
                     src="https://thehimalayanfarm.in/assets/frontend/img/family/farmer.jpg" alt="">
            </div>
        </div>
    </div>


    {{--      image and video banner--}}
    <div class="w-full lg:h-[90vh] md:h-[80vh] sm:h-[60vh] h-[50vh] mb-4">
        <div class="w-full h-full relative">
            {{--                 <video class="w-[100%] h-[100%]" autoplay src="https://thehimalayanfarm.in/assets/frontend/img/slider/video.mp4"></video>--}}
            <img class="w-full h-full object-cover" src="https://thehimalayanfarm.in/assets/frontend/img/family/family.jpg" alt="">

        </div>
    </div>


    {{--    main heading--}}
    <div class=" w-full relative">
        <div class="w-full py-4 flex flex-col text-center">
            <img class="lg:w-[250px] md:w-[250px] sm:w-[200px] w-[180px] m-auto "
                 src="https://thehimalayanfarm.in/assets/frontend/img/shape/1.png" alt="">
            <h2 class="font-bold lg:text-[35px] md:text-[35px] text-[30px] font-sans m-auto">
             Our Team
            </h2>
            <h4 class="lg:text-[25px] md:text-[25px] text-[20px] font-sans m-auto">
            </h4>

            <div class=" absolute top-[80%] left-0  w-full flex justify-center">
                <img src="https://thehimalayanfarm.in/assets/frontend/img/shape/2.png" alt="">
            </div>
        </div>
    </div>
    <div class="w-full my-4">
        <div class="w-full grid lg:grid-cols-3 md:grid-cols-3 sm:grid-cols-1 grid-cols-1 gap-4 px-4">
            <div class="w-full flex flex-col">
                <img class="w-[350px] rounded-[50%] mx-auto" src="https://thehimalayanfarm.in/storage/team_members/WOoJqACz2CC34jOrCI17UT1DvgPrR1HWZvz4rn1m.jpg" alt="">
                 <h4 class="text-[24px] mx-auto">
                     DEEPAK SAKHUJA
                 </h4>
                <h6 class="text-[16px] mx-auto">(CO-FOUNDER)</h6>
            </div>
            <div class="w-full flex flex-col">
                <img class="w-[350px] rounded-[50%] mx-auto" src="https://thehimalayanfarm.in/storage/team_members/sDJd52u4T2LLaXjv2AmmnQIf6ZfQqvNS5AQ42voG.jpg" alt="">
                 <h4 class="text-[24px] mx-auto">
                     HEMANT GHAI
                 </h4>
                <h6 class="text-[16px] mx-auto">(CO-FOUNDER)</h6>
            </div>
            <div class="w-full flex flex-col">
                <img class="w-[350px] rounded-[50%] mx-auto" src="https://thehimalayanfarm.in/storage/team_members/pmurmAaUFLnnNkDdTE90OOIEJ9VlPrDrrA1jawQS.jpg" alt="">
                 <h4 class="text-[24px] mx-auto">
                     TWINKLE KAITH
                 </h4>
                <h6 class="text-[16px] mx-auto">(HEAD, FINANCE)</h6>
            </div>
            <div class="w-full flex flex-col">
                <img class="w-[350px] rounded-[50%] mx-auto" src="https://thehimalayanfarm.in/storage/team_members/lYUs5WSbzFGmnNnbNSSc2w6QUDpvyfL3bTTsmuuq.jpg" alt="">
                 <h4 class="text-[24px] mx-auto">
                     VINEET CHAUHAN
                 </h4>
                <h6 class="text-[16px] mx-auto">(HEAD, TECHNICAL)</h6>
            </div>
            <div class="w-full flex flex-col">
                <img class="w-[350px] rounded-[50%] mx-auto" src="https://thehimalayanfarm.in/storage/team_members/xmrprFTaxUlHCos1HGf7br0hxSHicZ2tXtYdAaK3.jpg" alt="">
                 <h4 class="text-[24px] mx-auto">
                     ADITI THAKUR
                 </h4>
                <h6 class="text-[16px] mx-auto">(HEAD, CONTENT)</h6>
            </div>
            <div class="w-full flex flex-col">
                <img class="w-[350px] rounded-[50%] mx-auto" src="https://thehimalayanfarm.in/storage/team_members/JeCKOBQQ1zyYT2WxeZv8kRynDBNCKiDRIuYf2gnr.jpg" alt="">
                 <h4 class="text-[24px] mx-auto">
                     ABHISHEK BHATI
                 </h4>
                <h6 class="text-[16px] mx-auto">(HEAD, LEGAL)</h6>
            </div>
            <div class="w-full flex flex-col">
                <img class="w-[350px] rounded-[50%] mx-auto" src="https://thehimalayanfarm.in/storage/team_members/TcBKJ6J52qnUfb1OmtoZY7KyotTzELfQHuQXtQ7x.jpg" alt="">
                 <h4 class="text-[24px] mx-auto">
                     PRITHVI THAKUR
                 </h4>
                <h6 class="text-[16px] mx-auto">(HEAD, PRODUCTION)</h6>
            </div>
            <div class="w-full flex flex-col">
                <img class="w-[350px] rounded-[50%] mx-auto" src="https://thehimalayanfarm.in/storage/team_members/JUYibjMyMKHCext10gcSw1QqE4NRq7WwTvsNvNdk.jpg" alt="">
                 <h4 class="text-[24px] mx-auto">
                     ARCHIT SOOD
                 </h4>
                <h6 class="text-[16px] mx-auto">(HEAD, OPERATIONS)</h6>
            </div>
            <div class="w-full flex flex-col">
                <img class="w-[350px] rounded-[50%] mx-auto" src="https://thehimalayanfarm.in/storage/team_members/b88cj0wk94DKNwbBE5yQUkscrHT4ovzCpjOlkaCz.jpg" alt="">
                 <h4 class="text-[24px] mx-auto">
                     DANISH SHARMA
                 </h4>
                <h6 class="text-[16px] mx-auto">(HEAD, SALES)</h6>
            </div>
            <div class="w-full flex flex-col">
                <img class="w-[350px] rounded-[50%] mx-auto" src="https://thehimalayanfarm.in/storage/team_members/PIB4u5Xv3uwRBNVUsw5f2HPNH0j2MOum20cR3B6E.jpg" alt="">
                 <h4 class="text-[24px] mx-auto">
                     AKASH JETHWA
                 </h4>
                <h6 class="text-[16px] mx-auto">(HEAD, MARKETING)</h6>
            </div>
            <div class="w-full flex flex-col">
                <img class="w-[350px] rounded-[50%] mx-auto" src="https://thehimalayanfarm.in/storage/team_members/Yd42y0WmGFAcm3BlsIvnVNrpiznebfj9CYqWozqH.jpg" alt="">
                 <h4 class="text-[24px] mx-auto">
                     AMITI THAKUR
                 </h4>
                <h6 class="text-[16px] mx-auto">(HEAD, COMMUNITY RELATIONS)</h6>
            </div>
            <div class="w-full flex flex-col">
                <img class="w-[350px] rounded-[50%] mx-auto" src="https://thehimalayanfarm.in/storage/team_members/jprBkuDhYBGBeUYAgX8yzgBgvZYcsnyU4jNijfYy.jpg" alt="">
                 <h4 class="text-[24px] mx-auto">
                     SHAH HARIS
                 </h4>
                <h6 class="text-[16px] mx-auto">(HEAD, SPECIAL PROJECTS)</h6>
            </div>
        </div>
    </div>

    {{--    main heading--}}
    <div class=" w-full relative">
        <div class="w-full py-4 flex flex-col text-center">
            <img class="lg:w-[250px] md:w-[250px] sm:w-[200px] w-[180px] m-auto "
                 src="https://thehimalayanfarm.in/assets/frontend/img/shape/1.png" alt="">
            <h2 class="font-bold lg:text-[35px] md:text-[35px] text-[30px] font-sans m-auto">
                Our Farmers
            </h2>
            <h4 class="lg:text-[25px] md:text-[25px] text-[20px] font-sans m-auto">
            </h4>

            <div class=" absolute top-[80%] left-0  w-full flex justify-center">
                <img src="https://thehimalayanfarm.in/assets/frontend/img/shape/2.png" alt="">
            </div>
        </div>
    </div>
    <div class="w-full my-4">
        <div class="w-full grid lg:grid-cols-3 md:grid-cols-3 sm:grid-cols-1 grid-cols-1 gap-4 px-4">
            <div class="w-full flex flex-col">
                <img class="w-[350px] rounded-[50%] mx-auto" src="https://thehimalayanfarm.in/storage/team_members/xbpOUvBaYV6a8XaajJ6igUWJYefOc7ROHSu8SoHo.jpg" alt="">
                <h4 class="text-[24px] mx-auto">
                    PRINCE
                </h4>
                <h6 class="text-[16px] mx-auto">(ORCHARDIST)</h6>
            </div>
            <div class="w-full flex flex-col">
                <img class="w-[350px] rounded-[50%] mx-auto" src="https://thehimalayanfarm.in/storage/team_members/CNqEkG1rejw58hmNboHvph1kHFq6KMo8fsAC9fxF.jpg" alt="">
                <h4 class="text-[24px] mx-auto">
                    PARUL SHARMA
                </h4>
                <h6 class="text-[16px] mx-auto">(ORCHARDIST)</h6>
            </div>
            <div class="w-full flex flex-col">
                <img class="w-[350px] rounded-[50%] mx-auto" src="https://thehimalayanfarm.in/storage/team_members/pzrlJnO83kRKycHf1NuDXyRx1QV7U8F3dIVBIH0H.jpg" alt="">
                <h4 class="text-[24px] mx-auto">
                    ANURAG KHURANA
                </h4>
                <h6 class="text-[16px] mx-auto">(ORCHARDIST)</h6>
            </div>
            <div class="w-full flex flex-col">
                <img class="w-[350px] rounded-[50%] mx-auto" src="https://thehimalayanfarm.in/storage/team_members/Vl15gbp8jmi9blmm1q7DewijPPyp3lIypoE2ZtCp.jpg" alt="">
                <h4 class="text-[24px] mx-auto">
                    AISHWARYA KAITH
                </h4>
                <h6 class="text-[16px] mx-auto">(ORCHARDIST)</h6>
            </div>
            <div class="w-full flex flex-col">
                <img class="w-[350px] rounded-[50%] mx-auto" src="https://thehimalayanfarm.in/storage/team_members/SXCKmKAtWPtEK51AKZScDSnCOJOG1fyfXUNfpqnc.jpg" alt="">
                <h4 class="text-[24px] mx-auto">
                    HARISH THAKUR
                </h4>
                <h6 class="text-[16px] mx-auto">(ORCHARDIST)</h6>
            </div>
            <div class="w-full flex flex-col">
                <img class="w-[350px] rounded-[50%] mx-auto" src="https://thehimalayanfarm.in/storage/team_members/D7buWC8QOUktTWv9cyUDbl5ktmLO9GC6TZb904yU.jpg" alt="">
                <h4 class="text-[24px] mx-auto">
                    RAJENDER THAKUR
                </h4>
                <h6 class="text-[16px] mx-auto">(ORCHARDIST)</h6>
            </div>
        </div>
    </div>

    {{--    main heading--}}
    <div class=" w-full relative">
        <div class="w-full py-4 flex flex-col text-center">
            <img class="lg:w-[250px] md:w-[250px] sm:w-[200px] w-[180px] m-auto "
                 src="https://thehimalayanfarm.in/assets/frontend/img/shape/1.png" alt="">
            <h2 class="font-bold lg:text-[35px] md:text-[35px] text-[30px] font-sans m-auto">
                Our Advisors
            </h2>
            <h4 class="lg:text-[25px] md:text-[25px] text-[20px] font-sans m-auto">
            </h4>

            <div class=" absolute top-[80%] left-0  w-full flex justify-center">
                <img src="https://thehimalayanfarm.in/assets/frontend/img/shape/2.png" alt="">
            </div>
        </div>
    </div>
    <div class="w-full my-4">
        <div class="w-full grid lg:grid-cols-3 md:grid-cols-3 sm:grid-cols-1 grid-cols-1 gap-4 px-4">
            <div class="w-full flex flex-col">
                <img class="w-[350px] rounded-[50%] mx-auto" src="https://thehimalayanfarm.in/storage/team_members/wvsQCZIgKBOwnAotU0lDSRuO7Y1rGU1TD9ATCjxT.jpg" alt="">
                <h4 class="text-[24px] mx-auto">
                    CA. KHEM CHAND SHARMA
                </h4>
                <h6 class="text-[16px] mx-auto">(CHARTERED ACCOUNTANT. PANKAJ KHEM AND ASSOCIATES)</h6>
            </div>
            <div class="w-full flex flex-col">
                <img class="w-[350px] rounded-[50%] mx-auto" src="https://thehimalayanfarm.in/storage/team_members/v3P7LpZqf9a0UQix0g9KkGZcvla1yKK7muY5Ld2G.jpg" alt="">
                <h4 class="text-[24px] mx-auto">
                    Mrs. Shefali Khurana
                </h4>
                <h6 class="text-[16px] mx-auto">(Franchise Manager, Indian Institute of Vedic Maths & Abacus)</h6>
            </div>
            <div class="w-full flex flex-col">
                <img class="w-[350px] rounded-[50%] mx-auto" src="https://thehimalayanfarm.in/storage/team_members/T4PDXhwnxcMTAFKySdfT9oIireKXy4ojFNwIWBQl.jpg" alt="">
                <h4 class="text-[24px] mx-auto">
                    Mr. Santosh
                </h4>
                <h6 class="text-[16px] mx-auto">(Start-Up Mentor)</h6>
            </div>
            <div class="w-full flex flex-col">
                <img class="w-[350px] rounded-[50%] mx-auto" src="https://thehimalayanfarm.in/storage/team_members/edOtHqpggnyR5J5tCQHgHcMhi5CgQQiHB5qFXAeR.jpg" alt="">
                <h4 class="text-[24px] mx-auto">
                    Mr. Gaurav Kwatra
                </h4>
                <h6 class="text-[16px] mx-auto">(Start-Up Mentor)</h6>
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
