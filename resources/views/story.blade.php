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

{{--    main heading--}}
<div class=" w-full relative">
    <div class="w-full py-4 flex flex-col text-center">
        <img class="lg:w-[250px] md:w-[250px] sm:w-[200px] w-[180px] m-auto "
             src="https://thehimalayanfarm.in/assets/frontend/img/shape/1.png" alt="">
        <h2 class="font-bold lg:text-[35px] md:text-[35px] text-[30px] font-sans m-auto">
            Our Story
        </h2>
        <h4 class="lg:text-[25px] md:text-[25px] text-[20px] font-sans m-auto">

        </h4>

        <div class=" absolute top-[80%] left-0  w-full flex justify-center">
            <img src="https://thehimalayanfarm.in/assets/frontend/img/shape/2.png" alt="">
        </div>
    </div>
</div>

{{--    left right text and images section--}}
<div class=" mb-6 mt-10   w-full bg-white">
    <div class="xl:w-[65%] lg:w-[80%] w-[90%] flex lg:flex-row md:flex-row sm:flex-col-reverse flex-col-reverse m-auto  px-2 text-black">
        <div class=" lg:w-[50%] md:w-[60%] w-[100%]">
            <div class="w-full flex flex-col px-4">
                     <span class="lg:text-[43px] md:text-[43px] sm:text-[40px] text-[35px] font-bold  font-['Jost', sans-serif]">
                       The Inspiration
                    </span>
                <p class=" text-justify lg:text-[20px] md:text-[20px] sm:text-[17px] text-[15px] font-normal leading-8 tracking-wide font-['Jost', sans-serif] mt-2">
                    Nestled in the heart of the Himalayas, our story begins in Shimla. One day, on a visit home, we brought back some Himalayan products like farm-fresh apples, rajma, rice, desi ghee, jams and dry fruits with us. We shared these with our family, friends and relatives, and they all agreed that these products were unlike anything they had ever tasted before - fresher, more authentic and wholesome than anything they could find at nearby stores. This motivated us to start our own brand, dedicated to introducing consumers to the true taste of the Himalayas. In 2022, we embarked on a journey to bring the beauty and purity of the Himalayas directly to your doorstep.
                    <br>
                    Thiya-The Himalayan Farm was founded with a deep love and respect for nature, and a passion to provide the purest and elite quality products while supporting and strengthening Himalayan farmers and women.
                </p>
            </div>
        </div>
        <div class=" lg:w-[50%] md:w-[40%] w-[100%] px-4 flex">
            <img class="w-[100%] rounded-lg m-auto hover:scale-90 transition ease-in-out duration-700"
                 src="https://thehimalayanfarm.in/assets/frontend/img/about/inspiration.jpg" alt="">
        </div>
    </div>
</div>


<div class=" mb-6 mt-10 py-6  w-full bg-[url('https://thehimalayanfarm.in/assets/frontend/img/bg/bg4.jpg')] bg-center bg-cover">
    <div class="xl:w-[65%] lg:w-[80%] w-[90%] flex lg:flex-row-reverse md:flex-row-reverse sm:flex-col-reverse flex-col-reverse m-auto  px-2 text-white">
        <div class=" lg:w-[50%] md:w-[60%] w-[100%]">
            <div class="w-full flex flex-col px-4">
                     <span class="lg:text-[43px] md:text-[43px] sm:text-[40px] text-[35px] font-bold  font-['Jost', sans-serif]">
                       The Motivation
                    </span>
                <p class=" text-justify lg:text-[20px] md:text-[20px] sm:text-[17px] text-[15px] font-normal; leading-8 tracking-wide font-['Jost', sans-serif] mt-2">
                    Everyday we delved deeper, we discovered two major problems in the Rural ecosystem of Himalayas:<br>
                    <br>
                    The plight of small and middle-holding farmers in the region.<br>
                    The monopoly of mandi system made the fresh produce only available in nearby areas, where middlemen would buy premium quality in bulk and hoard them in cold storage for 2-6 months, for off-season sales. This resulted in unfair rates for farmers, and prolonged storage led to a loss of taste, freshness and nutrition. Consumers from other states hardly ever got to taste freshly plucked premium quality apples.<br>
                    <br>
                    Women self-help groups facing hardships<br>
                    Women SHGs struggle to sell their products due to non availability of marketplaces which results in the lowering confidence of the group which ultimately results in dissolution of the collective. Apart from that lack of financial resources, limited access to education and training, socio-cultural barriers, resistance from male family members or societal expectations that women should not be involved in income-generating activities and inadequate infrastructure are just some other key challenges which they face on a daily basis.
                </p>
                <ul class="list-disc text-justify lg:text-[17px] md:text-[17px] sm:text-[14px] text-[12px] font-normal; leading-8 tracking-wide font-['Jost', sans-serif] mt-2 ">
                </ul>
            </div>
        </div>
        <div class=" lg:w-[50%] md:w-[40%] w-[100%] px-4 flex">
            <img class="w-[100%] rounded-lg m-auto hover:scale-90 transition ease-in-out duration-700"
                 src="https://thehimalayanfarm.in/assets/frontend/img/about/motivation.jpg" alt="">
        </div>
    </div>
</div>

<div class=" mb-6 mt-10   w-full bg-white">
    <div class="xl:w-[65%] lg:w-[80%] w-[90%] flex lg:flex-row md:flex-row sm:flex-col-reverse flex-col-reverse m-auto  px-2 text-black">
        <div class=" lg:w-[50%] md:w-[60%] w-[100%]">
            <div class="w-full flex flex-col px-4">
                     <span class="lg:text-[43px] md:text-[43px] sm:text-[40px] text-[35px] font-bold  font-['Jost', sans-serif]">
                       The Takeoff
                    </span>
                <p class=" text-justify lg:text-[20px] md:text-[20px] sm:text-[17px] text-[15px] font-normal; leading-8 tracking-wide font-['Jost', sans-serif] mt-2">
                    We knew we had to do something to change this. That's why we created Thiya-The Himalayan Farm. At Thiya, we believe in the power of our ancient Himalayan environment, and strive to connect consumers with that same vital energy. While the product range is inspired by authentic mountain foods and local economy, we also support sustainable rural development through the promotion of locally sourced, freshly produced products. From our family to yours, everyone can enjoy the pure and natural bounty of our Himalayas. All the himalayan products are unprocessed and minimally processed. Join us on a journey to discover the taste of the Himalayas while supporting local communities. Order now and taste the gift of god from the heavenly Himalayas and experience the difference for yourself.
                </p>
                <ul class="list-disc text-justify lg:text-[17px] md:text-[17px] sm:text-[14px] text-[12px] font-normal; leading-8 tracking-wide font-['Jost', sans-serif] mt-2 ">
                </ul>
            </div>
        </div>
        <div class=" lg:w-[50%] md:w-[40%] w-[100%] px-4 flex">
            <img class="w-[100%] rounded-lg m-auto hover:scale-90 transition ease-in-out duration-700"
                 src="https://thehimalayanfarm.in/assets/frontend/img/about/takeoff.jpg" alt="">
        </div>
    </div>
</div>

{{--      image and video banner--}}
<div class="w-full lg:h-[90vh] md:h-[80vh] sm:h-[60vh] h-[50vh] mb-4">
    <div class="w-full h-full relative">
        {{--                 <video class="w-[100%] h-[100%]" autoplay src="https://thehimalayanfarm.in/assets/frontend/img/slider/video.mp4"></video>--}}
        <img class="w-full h-full object-cover" src="https://thehimalayanfarm.in/assets/frontend/img/slider/slider2-1.webp" alt="">
        <div class="absolute top-0 left-0 w-full h-full bg-black/50 flex justify-center ">
            <div class="lg:w-[80%] md:w-[80%] w-[95%] h-max my-auto flex flex-col text-white font-['Jost', sans-serif] bg-black/50 p-4">
                <span class=" lg:text-[40px] md:text-[40px] text-[30px] mx-auto">
                      From our family to yours, everyone can enjoy the pure and natural bounty of the Himalayas.
                  </span>
                <p class=" lg:text-[24px] md:text-[24px] text-[15px] text-center mx-auto font-semibold mt-2">
                </p>
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
            Our Beliefs
        </h2>
        <h4 class="lg:text-[25px] md:text-[25px] text-[20px] font-sans m-auto">
            Our brand integrity revolves around our four major beliefs
        </h4>

        <div class=" absolute top-[80%] left-0  w-full flex justify-center">
            <img src="https://thehimalayanfarm.in/assets/frontend/img/shape/2.png" alt="">
        </div>
    </div>
</div>


<div class=" mb-6 mt-10   w-full bg-white">
    <div class="xl:w-[65%] lg:w-[80%] w-[90%] flex lg:flex-row md:flex-row sm:flex-col-reverse flex-col-reverse m-auto  px-2 text-black">
        <div class=" lg:w-[50%] md:w-[60%] w-[100%]">
            <div class="w-full flex flex-col px-4">
                     <span class="lg:text-[43px] md:text-[43px] sm:text-[40px] text-[35px] font-bold  font-['Jost', sans-serif]">
                      Consumer Awareness
                    </span>
                <p class=" text-justify lg:text-[20px] md:text-[20px] sm:text-[17px] text-[15px] font-normal; leading-8 tracking-wide font-['Jost', sans-serif] mt-2">
                </p>

                    <ul class="list-disc text-justify lg:text-[17px] md:text-[17px] sm:text-[14px] text-[12px] font-normal; leading-8 tracking-wide font-['Jost', sans-serif] mt-2 ">
                        <li> Building transparency in consumer-farmer
                            connections through detailed product information
                        </li>
                        <li>
                            Providing customers with information about
                            the
                            growers, harvesting time, processing methods, packaging time, pricing and
                            quality of
                            the products

                        </li>
                        <li>
                            Creating a deeper understanding of the
                            Himalayas and ecology through engaging audio-visual and printed content

                        </li>
                        <li>
                            Making informative and entertaining
                            content
                            available on our social media platforms and through unique products such as
                            postcards, notebooks/journals, coffee mugs and calendars.

                        </li>
                    </ul>
            </div>
        </div>
        <div class=" lg:w-[50%] md:w-[40%] w-[100%] px-4 flex">
            <img class="w-[100%] rounded-lg m-auto hover:scale-90 transition ease-in-out duration-700"
                 src="https://thehimalayanfarm.in/assets/frontend/img/about/consumerAwareness.jpg" alt="">
        </div>
    </div>
</div>
<div class=" mb-6 mt-10   w-full bg-white">
    <div class="xl:w-[65%] lg:w-[80%] w-[90%] flex lg:flex-row-reverse md:flex-row-reverse sm:flex-col-reverse flex-col-reverse m-auto  px-2 text-black">
        <div class=" lg:w-[50%] md:w-[60%] w-[100%]">
            <div class="w-full flex flex-col px-4">
                     <span class="lg:text-[43px] md:text-[43px] sm:text-[40px] text-[35px] font-bold  font-['Jost', sans-serif]">
                      Supporting Himalayan Women
                    </span>
                <p class=" text-justify lg:text-[20px] md:text-[20px] sm:text-[17px] text-[15px] font-normal; leading-8 tracking-wide font-['Jost', sans-serif] mt-2">
                </p>

                <ul class="list-disc text-justify lg:text-[17px] md:text-[17px] sm:text-[14px] text-[12px] font-normal; leading-8 tracking-wide font-['Jost', sans-serif] mt-2 ">
                    <li> Elevating the status of Himalayan women by promoting gender equality and women's rights
                    </li>
                    <li>
                        Investing in the future of Himalayan women through skill development programs and job opportunities

                    </li>
                    <li>
                        Empowering Himalayan women to take leadership roles and make important decisions
                    </li>
                    <li>
                        Prioritizing the health and well-being of Himalayan women through targeted support and resources.
                    </li>
                </ul>
            </div>
        </div>
        <div class=" lg:w-[50%] md:w-[40%] w-[100%] px-4 flex">
            <img class="w-[100%] rounded-lg m-auto hover:scale-90 transition ease-in-out duration-700"
                 src="https://thehimalayanfarm.in/storage/71/conversions/DSC_0327-optimized.webp" alt="">
        </div>
    </div>
</div>
<div class=" mb-6 mt-10   w-full bg-white">
    <div class="xl:w-[65%] lg:w-[80%] w-[90%] flex lg:flex-row md:flex-row sm:flex-col-reverse flex-col-reverse m-auto  px-2 text-black">
        <div class=" lg:w-[50%] md:w-[60%] w-[100%]">
            <div class="w-full flex flex-col px-4">
                     <span class="lg:text-[43px] md:text-[43px] sm:text-[40px] text-[35px] font-bold  font-['Jost', sans-serif]">
                       Farmer Strengthening
                    </span>
                <p class=" text-justify lg:text-[20px] md:text-[20px] sm:text-[17px] text-[15px] font-normal; leading-8 tracking-wide font-['Jost', sans-serif] mt-2">
                </p>

                <ul class="list-disc text-justify lg:text-[17px] md:text-[17px] sm:text-[14px] text-[12px] font-normal; leading-8 tracking-wide font-['Jost', sans-serif] mt-2 ">
                    <li> Ensuring fair prices, market access, farm gate pickup, logistics support and networking opportunities for Himalayan farmers.
                    </li>
                    <li>
                        Providing education and training programs for sustainable farming practices.

                    </li>
                    <li>
                        Providing immediate realization of profits through upfront payments
                    </li>
                    <li>
                        Strengthening the Himalayan farming community by providing support and resources.
                    </li>
                </ul>
            </div>
        </div>
        <div class=" lg:w-[50%] md:w-[40%] w-[100%] px-4 flex">
            <img class="w-[100%] rounded-lg m-auto hover:scale-90 transition ease-in-out duration-700"
                 src="https://thehimalayanfarm.in/assets/frontend/img/about/farmerStrength.jpg" alt="">
        </div>
    </div>
</div>
<div class=" mb-6 mt-10   w-full bg-white">
    <div class="xl:w-[65%] lg:w-[80%] w-[90%] flex lg:flex-row-reverse md:flex-row-reverse sm:flex-col-reverse flex-col-reverse m-auto  px-2 text-black">
        <div class=" lg:w-[50%] md:w-[60%] w-[100%]">
            <div class="w-full flex flex-col px-4">
                     <span class="lg:text-[43px] md:text-[43px] sm:text-[40px] text-[35px] font-bold  font-['Jost', sans-serif]">
                      Sustainability Matters
                    </span>
                <p class=" text-justify lg:text-[20px] md:text-[20px] sm:text-[17px] text-[15px] font-normal; leading-8 tracking-wide font-['Jost', sans-serif] mt-2">
                </p>

                <ul class="list-disc text-justify lg:text-[17px] md:text-[17px] sm:text-[14px] text-[12px] font-normal; leading-8 tracking-wide font-['Jost', sans-serif] mt-2 ">
                    <li> Creating a culture of inclusivity and diversity in the Himalayan region
                    </li>
                    <li>
                        Reduction in post harvest losses by diverting extra produce to make small batches of himalayan products.
                    </li>
                    <li>
                        Reducing carbon footprint by minimizing the use of plastic material and investing in renewable technologies for production, storage and transportation
                    </li>
                    <li>
                        Supporting conservation and preservation of biodiversity
                    </li>
                </ul>
            </div>
        </div>
        <div class=" lg:w-[50%] md:w-[40%] w-[100%] px-4 flex">
            <img class="w-[100%] rounded-lg m-auto hover:scale-90 transition ease-in-out duration-700"
                 src="https://thehimalayanfarm.in/assets/frontend/img/about/sustain.jpg" alt="">
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
