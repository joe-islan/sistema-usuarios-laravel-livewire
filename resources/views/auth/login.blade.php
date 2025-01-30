<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Portal - Login</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        "custom-purple": "#656ed3",
                        "custom-blue": "#ebefff",
                    },
                },
            },
        };
    </script>
</head>

<body class="min-h-screen bg-custom-blue relative overflow-hidden">
    <!-- Header -->
    <header class="w-full bg-[#CED7F8] shadow-sm">
        <div class="container mx-auto px-4 sm:px-8 py-4">
            <h1 class="text-xl text-gray-700 font-medium">Portal</h1>
        </div>
    </header>

    <!-- Main content -->
    <div class="container mx-auto flex flex-col lg:flex-row justify-between items-center h-[calc(100vh-72px)] relative z-10">
        <!-- Left side with illustration -->
        <div class="w-full lg:w-1/2 flex justify-center items-center order-2 lg:order-1 mt-8 lg:mt-0">
            <img src="{{ asset('images/login_img.svg') }}" alt="Dashboard illustration" width="750px"
                class="relative lg:-top-4 lg:-left-12 w-3/4 lg:w-auto" style="z-index: -2" />
        </div>

        <!-- Right side with login form -->
        <div class="w-full lg:w-1/2 flex justify-center items-center border-l border-[#afb3ff] pb-8 lg:pb-64 order-1 lg:order-2">
            <div class="w-full max-w-md px-4 lg:px-0">
                <h2 class="text-4xl font-bold text-gray-800 mb-8 lg:mb-12">Login</h2>
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
                            class="w-full bg-custom-purple hover:bg-opacity-90 text-white font-normal py-3 px-4 rounded-lg transition duration-200 mt-6"
                            style="border-radius: 50px; border: 2px solid #656ed3">
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

    <!-- Decorative elements -->
    <div class="absolute bottom-0 right-10 hidden lg:block">
        <img src="{{ asset('images/icon2.svg') }}" alt="" width="700px" />
    </div>
    <div class="absolute top-0 right-[40%] -z-10 hidden lg:block">
        <img src="{{ asset('images/icon3.svg') }}" alt="" width="200px" />
    </div>
</body>

</html>

{{-- <!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Portal - Login</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        "custom-purple": "#656ed3",
                        "custom-blue": "#ebefff",
                    },
                },
            },
        };
    </script>
</head>

<body class="min-h-screen bg-custom-blue relative overflow-hidden">
    <!-- Header -->
    <header class="w-full bg-[#CED7F8] shadow-sm">
        <div class="container mx-auto px-8 py-4">
            <h1 class="text-xl text-gray-700 font-medium">Portal</h1>
        </div>
    </header>

    <!-- Main content -->
    <div class="container mx-auto flex justify-between items-center h-[calc(100vh-72px)] relative z-10">
        <!-- Left side with illustration -->
        <div class="w-1/2 flex justify-center items-center">
            <img src="{{ asset('images/login_img.svg') }}" alt="Dashboard illustration" width="750px"
                class="relative -top-4 -left-12" style="z-index: -2" />
        </div>

        <!-- Right side with login form -->
        <div class="w-1/2 flex justify-center items-center border-l border-[#afb3ff] pb-64">
            <div class="w-full max-w-md">
                <h2 class="text-4xl font-bold text-gray-800 mb-12">Login</h2>
                <form method="POST" action="{{ route('login') }}" class="w-full">
                    @csrf

                    <div class="mb-3">
                        <label class="block text-gray-600 mb-3">Email:</label>
                        <input type="email" name="email" value="{{ old('email') }}" required autofocus
                            autocomplete="username"
                            class="w-full px-4 py-3 rounded-full bg-transparent border-2 border-custom-purple focus:outline-none focus:ring-1 focus:ring-gray-300" />
                    </div>

                    <div class="mb-3">
                        <label class="block text-gray-600 mb-3">Senha:</label>
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
                            class="w-full bg-custom-purple hover:bg-opacity-90 text-white font-normal py-3 px-4 rounded-lg transition duration-200 mt-6"
                            style="border-radius: 50px; border: 2px solid #656ed3">
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

    <!-- Decorative elements -->
    <div class="absolute bottom-0 right-10">
        <img src="{{ asset('images/icon2.svg') }}" alt="" width="700px" />
    </div>
    <div class="absolute top-0 right-[40%] -z-10">
        <img src="{{ asset('images/icon3.svg') }}" alt="" width="200px" />
    </div>
</body>

</html> --}}




{{-- <x-guest-layout>
    <x-authentication-card>
        <x-slot name="logo">
            <x-authentication-card-logo />
        </x-slot>

        <x-validation-errors class="mb-4" />

        @session('status')
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ $value }}
            </div>
        @endsession

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div>
                <x-label for="email" value="{{ __('Email') }}" />
                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            </div>

            <div class="mt-4">
                <x-label for="password" value="{{ __('Password') }}" />
                <x-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
            </div>

            <div class="block mt-4">
                <label for="remember_me" class="flex items-center">
                    <x-checkbox id="remember_me" name="remember" />
                    <span class="ms-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif

                <x-button class="ms-4">
                    {{ __('Log in') }}
                </x-button>
            </div>
        </form>
    </x-authentication-card>
</x-guest-layout> --}}
