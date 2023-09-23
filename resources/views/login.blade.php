@seoTitle(__('main.login'))
<x-frontend-layout>
    <div class="w-full flex mt-2">
        <div class="w-max px-2 mx-auto bg-[#f3f3f3] shadow-lg shadow-gray-400">
            <div class="w-full text-center  flex flex-col p-4   transition ease-in-out duration-1000">
                <span class="mx-auto text-[#112433] text-[28px]  font-normal">Sign In</span>
                <a href=""><img class="mx-auto w-[200px] mt-4"
                                src=" https://developers.google.com/identity/images/btn_google_signin_dark_normal_web.png"
                                alt="">
                </a>
                <p class="mx-auto text-[14px] text-[#7b8e9d] flex flex-col gap-[50px] mt-3">
                    OR
                </p>
                <x-splade-form class="space-y-4">
                    <div class="lg:v md:w-96 sm:w-96 w-64 mt-8">
                        <x-splade-input id="auth" name="auth" placeholder="Email Address" :label=" __('main.email')"
                                        required autofocus class="w-full px-2 " required/>
                    </div>
                    <div class="lg:v md:w-96 sm:w-96 w-64 mt-8">
                    <x-splade-input id="password" name="password" type="password" :label="__('main.password')" required
                                    autocomplete="current-password" class="w-full px-2 " required placeholder="Password"/>
                    </div>
                    <div class="flex items-center justify-between mt-4">
                        <x-splade-checkbox name="remember">{{ __('main.remember_me') }}</x-splade-checkbox>

                        @if(Route::has('password.request'))
                            <Link href="{{ route('password.request') }}"
                                  class="underline text-sm text-gray-600 dark:text-gray-300 hover:text-gray-900 dark:hover:text-gray-400 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                {{ __('main.forgot_your_password?') }}
                            </Link>
                        @endif
                    </div>
                    <x-splade-submit :label="__('main.login')"   class="bg-[#008973] text-white font-semibold w-full py-4"/>

                    <x-splade-button     href="{{ route('register') }}" :label="__('main.login')"   class="bg-[#008973] text-white font-semibold w-full py-4"><i
                            class="fa-solid fa-user"></i> Sign Up New User</x-splade-button>
                </x-splade-form>

            </div>
        </div>
    </div>
</x-frontend-layout>
