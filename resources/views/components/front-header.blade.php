<header class="sticky top-0 z-50">
    <div class="swiffy-slider bg-[#018472] text-white h-[50px] font-semibold flex justify-center slider-nav-autoplay ">
        <ul class="slider-container lg:text-[15px] sm:text-[13px] text-[12px]">
            <li class=" flex justify-center">
                <span class="m-auto">Join us on our journey to discover the taste of himalayas. </span>
            </li>
            <li class="flex justify-center">
                <span class="m-auto">More Products and Offers Coming Soon.</span>
            </li>
        </ul>
    </div>

    <div class="flex  justify-between bg-white px-2 py-3 relative">
        <div class="lg:w-[10%] md:lg:w-[30%] sm:w-[30%] w-[30%] flex flex-col">
            <a href="{{route('home')}}">
                <img class=" lg:h-[60px] md:h-[60px] sm:h-[50px] h-[40px] my-auto" src="{{ light_logo() }}" alt="">
            </a>
        </div>
        <div class="lg:w-[70%] lg:flex md:hidden justify-end pr-2  sm:hidden hidden">
            <ul class="flex gap-[30px] my-auto text-[20px] font-semibold text-[#596369]">
                <li><a href="{{route('home')}}" class="hover:text-[#018472]">Home</a></li>
                <li><a href="{{route('story')}}" class="hover:text-[#018472]">Our Story</a></li>
                <li><a href="{{route('store.home')}}" class="hover:text-[#018472]">Our Store</a></li>
                <li><a href="{{route('our-family')}}" class="hover:text-[#018472]">Our Family</a></li>
                <li><a href="{{route('learnWithThiya')}}" class="hover:text-[#018472]">Learn With Thiya</a></li>
                <li><a href="{{route('giftings')}}" class="hover:text-[#018472]">Giftings</a></li>
            </ul>
        </div>


        <div
            class=" absolute w-full top-16 left-0 lg:hidden justify-end px-4 rounded-md flex flex-col h-0 overflow-hidden "
            id="mobileMenu">
            <ul class="flex  flex-col bg-black  gap-[30px] my-auto px-6 py-4 text-[20px] font-semibold text-white rounded-md">
                <li><a href="{{route('home')}}" class="hover:text-[#018472]">Home</a></li>
                <li><a href="{{route('story')}}" class="hover:text-[#018472]">Our Story</a></li>
                <li><a href="{{route('store.home')}}" class="hover:text-[#018472]">Our Store</a></li>
                <li><a href="{{route('our-family')}}" class="hover:text-[#018472]">Our Family</a></li>
                <li><a href="{{route('learnWithThiya')}}" class="hover:text-[#018472]">Learn With Thiya</a></li>
                <li><a href="{{route('giftings')}}" class="hover:text-[#018472]">Giftings</a></li>
            </ul>
        </div>

        <div class="lg:w-[20%] md:w-[70%] sm:w-[60%] w-[70%] flex pl-2 lg:justify-center justify-end">
            <ul class="flex gap-[20px] my-auto text-[15px] font-semibold text-[#596369]">
                @guest
                    <li class="m-auto"><a href="{{route('login')}}"><i class="fa-regular fa-user"></i></a></li>
                @endguest
                <li class="m-auto"><a href="{{route('home')}}"><i class="fa fa-search"></i></a></li>
                @auth
                    <li class="m-auto">
                        <Link href="{{route('cart')}}" slideover>
                        <i class="fa fa-shopping-cart {{ auth()->cart->cartItems->count() ? 'text-[#008973]' : '' }}"></i></Link>
                    </li>
                    <li class="m-auto"><a href="{{route('wishlist')}}" modal><i class="fa-regular fa-heart"></i></a>
                    </li>
                @endauth
                <li class="m-auto lg:block hidden"><a href="{{route('home')}}">
                        <button
                            class="bg-[#008973] text-white h-[40px] w-[40px] rounded-full text-[15px] shadow-lg shadow-gray-500/50 ml-2">
                            <i class="fa-solid fa-water"></i></button>
                    </a></li>
                <li class="m-auto lg:hidden md:block block">
                    <button id="menuToggle" onclick=" mobileMenu.classList.toggle('h-0');"
                            class="bg-[#008973] text-white h-[40px] w-[40px] rounded-full text-[15px] shadow-lg shadow-gray-500/50 ml-2">
                        <i class="fa-solid fa-bars"></i></button>
                </li>
            </ul>

        </div>
    </div>


</header>


