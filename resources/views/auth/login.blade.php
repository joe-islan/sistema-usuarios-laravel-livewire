<x-guest-layout>
    <header class="w-full bg-[#CED7F8] shadow-sm">
        <div class="container mx-auto px-4 sm:px-8 py-4">
            <h1 class="text-xl text-gray-700 font-medium">Portal</h1>
        </div>
    </header>

    <div
        class="container mx-auto flex flex-col xl:flex-row justify-between items-center h-[calc(100vh-72px)] relative z-10">
        <div class="w-full lg:w-1/2 flex justify-center items-center order-2 lg:order-1 mt-8 lg:mt-0 hidden xl:block">
            <img src="{{ asset('images/login_img.svg') }}" alt="Dashboard illustration" width="750px"
                class="relative xl:-top-[32px] xl:-left-12 w-3/4 xl:w-auto hidden xl:block opacity-0" />

                <div class="absolute top-0 left-0 hidden xl:block">
                    <img src="{{ asset('images/login_img.svg') }}" alt="" width="750px" />
                </div>
        </div>

        <div
            class="w-full xl:w-1/2 flex justify-center items-center xl:border-l xl:border-[#afb3ff] pb-8 xl:pb-64 order-1 xl:order-2 relative top-[100px] xl:top-[0]">
            <div class="w-full max-w-md px-4 xl:px-0">
                <h2 class="text-4xl font-bold text-gray-800 mb-8 xl:mb-12">Login</h2>
                <form method="POST" action="{{ route('login') }}" class="w-full">
                    @csrf

                    <div class="mb-4">
                        <label class="block text-gray-600 mb-2">Email:</label>
                        <input type="email" name="email" value="{{ old('email') }}" required autofocus
                            autocomplete="username"
                            class="w-full px-4 py-3 rounded-full bg-transparent border-2 border-custom-purple focus:outline-none focus:ring-1 focus:ring-gray-300" />
                    </div>

                    <div class="mb-4">
                        <label class="block text-gray-600 mb-2">Senha:</label>
                        <input type="password" name="password" required autocomplete="current-password"
                            class="w-full px-4 py-3 rounded-full bg-transparent border-2 border-custom-purple focus:outline-none focus:ring-1 focus:ring-gray-300" />
                    </div>

                    <div class="block mt-4">
                        <label for="remember_me" class="flex items-center">
                            <input id="remember_me" type="checkbox" name="remember" class="mr-2">
                            <span class="text-sm text-gray-600">Lembrar-me</span>
                        </label>
                    </div>

                    <div class="flex items-center justify-between mt-6 flex-col">
                        <button type="submit"
                            class="w-full bg-custom-purple hover:bg-opacity-90 text-white font-normal py-3 px-4 transition duration-200 mt-6 rounded-full border-2 border-[#656ed3]">
                            Login
                        </button>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="text-sm text-gray-600 hover:text-gray-900 mt-3">
                                Ainda não têm conta? Se registre!
                            </a>
                        @endif
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="absolute bottom-0 right-10 hidden xl:block">
        <img src="{{ asset('images/icon2.svg') }}" alt="" width="700px" />
    </div>
    <div class="absolute top-0 right-[35%] -z-10 hidden xl:block">
        <img src="{{ asset('images/icon3.svg') }}" alt="" width="200px" />
    </div>
</x-guest-layout>
