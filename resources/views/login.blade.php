@extends('layouts.main')

@section('content')
    <div class="w-full flex mt-2">
        <div class="w-max px-2 mx-auto bg-[#f3f3f3] shadow-lg shadow-gray-400">
            <div class="w-full text-center  flex flex-col p-4   transition ease-in-out duration-1000">
                <span class="mx-auto text-[#112433] text-[28px]  font-normal">Sign In</span>
                <a href=""><img class="mx-auto w-[200px] mt-4" src=" https://developers.google.com/identity/images/btn_google_signin_dark_normal_web.png" alt="">
                </a>
                  <p class="mx-auto text-[14px] text-[#7b8e9d] flex flex-col gap-[50px] mt-3">
                     OR
                 </p>
                <form action="">
                    <div class="lg:v md:w-96 sm:w-96 w-64 mt-8">
                        <input class="w-full px-2 py-3 bg-white focus:outline-none focus:ring-0 text-gray-400 border-[1px] border-gray-300 shadow-md shadow-gray-200" placeholder="Email Address:" type="email">
                    </div>
                    <div class="lg:v md:w-96 sm:w-96 w-64 mt-2">
                        <input class="w-full px-2 py-3 bg-gray-200 focus:outline-none focus:ring-0 text-gray-400 border-[1px] border-gray-300 shadow-md shadow-gray-200" placeholder="Password:" type="password">
                    </div>
                    <div class="lg:v md:w-96 sm:w-96 w-64 mt-2">
                          <button class="bg-[#008973] text-white font-semibold w-full py-4"><i class="fa-solid fa-right-from-bracket"></i> Sign in</button>
                    </div>
                    <div class="lg:v md:w-96 sm:w-96 w-64 mt-3 flex text-left">
                        <a href="{{route('forgetpassword')}}"><span class="text-[#008973] font-thins text-md">Forget Password?</span>
                        </a>
                    </div>
                    <div class="lg:v md:w-96 sm:w-96 w-64 mt-4 mb-4">
                        <a href="{{route('signup')}}"><button type="button" class="bg-[#008973] text-white font-semibold w-full py-4"><i class="fa-solid fa-user"></i> Sign Up New User</button>
                        </a>
                    </div>

                </form>

            </div>
        </div>
    </div>
@endsection
