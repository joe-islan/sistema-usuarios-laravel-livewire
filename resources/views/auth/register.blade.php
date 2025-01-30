<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Registro - Portal</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap");

        body {
            background-color: #ebefff;
            font-family: "Poppins", sans-serif;
        }

        .custom-bg {
            background-color: #afb3ff;
        }

        .form-input {
            border: 2px solid #656ed3;
            border-radius: 50px;
            padding: 10px;
            width: 100%;
            margin-top: 8px;
            background-color: #f7fafc;
        }

        .register-btn {
            background-color: #6366f1;
            color: white;
            padding: 12px;
            border-radius: 50px;
            width: 100%;
            margin-top: 24px;
        }

        .split-background {
            position: relative;
            overflow: hidden;
        }

        .split-background::after {
            content: "";
            position: absolute;
            top: 0;
            right: 0;
            width: 40%;
            height: 100%;
            background-color: #afb3ff;
            z-index: -1;
        }

        .imagem img {
            width: 900px;
        }
    </style>
</head>

<body class="min-h-screen split-background">
    <div class="container mx-auto px-4 h-screen flex items-center">
        <div class="w-full max-w-md mx-auto lg:mx-0">
            <div class="bg-transparent" style="position: relative; top: -100px">
                <h1 class="text-4xl lg:text-[52px] font-bold text-[#333333] mb-8">Registro</h1>
                <form method="POST" action="{{ route('register') }}">
                    @csrf

                    <div class="mb-5">
                        <label class="block text-[#666666] text-sm mb-2">Nome:</label>
                        <input type="text" name="name" value="{{ old('name') }}" required autofocus
                            autocomplete="name"
                            class="w-full h-12 px-4 border border-[#E5E7EB] bg-transparent focus:outline-none focus:ring-2 focus:ring-[#6366F1] focus:border-transparent"
                            style="border-radius: 50px; border: 2px solid #656ed3" />
                    </div>

                    <div class="mb-5">
                        <label class="block text-[#666666] text-sm mb-2">Email:</label>
                        <input type="email" name="email" value="{{ old('email') }}" required
                            autocomplete="username"
                            class="w-full h-12 px-4 border border-[#E5E7EB] bg-transparent focus:outline-none focus:ring-2 focus:ring-[#6366F1] focus:border-transparent"
                            style="border-radius: 50px; border: 2px solid #656ed3" />
                    </div>

                    <div class="mb-5">
                        <label class="block text-[#666666] text-sm mb-2">Senha:</label>
                        <input type="password" name="password" required autocomplete="new-password"
                            class="w-full h-12 px-4 border border-[#E5E7EB] bg-transparent focus:outline-none focus:ring-2 focus:ring-[#6366F1] focus:border-transparent"
                            style="border-radius: 50px; border: 2px solid #656ed3" />
                    </div>

                    <div class="mb-6">
                        <label class="block text-[#666666] text-sm mb-2">Confirmar senha:</label>
                        <input type="password" name="password_confirmation" required autocomplete="new-password"
                            class="w-full h-12 px-4 border border-[#E5E7EB] bg-transparent focus:outline-none focus:ring-2 focus:ring-[#6366F1] focus:border-transparent"
                            style="border-radius: 50px; border: 2px solid #656ed3" />
                    </div>

                    <div class="flex items-center justify-between mt-6 flex-col">
                        <button type="submit" class="register-btn">Registrar</button>

                        @if (Route::has('login'))
                            <a href="{{ route('login') }}" class="text-sm text-gray-600 hover:text-gray-900 mt-3">
                                Já têm conta? Faça Login!
                            </a>
                        @endif
                    </div>
                </form>
            </div>
        </div>

        <div class="hidden lg:block absolute right-0 top-1/2 transform -translate-y-1/2 mr-20">
            <div class="imagem">
                <img src="{{ asset('images/pc.svg') }}" alt="" class="w-full max-w-[900px]" />
            </div>
        </div>

        <div class="absolute bottom-0 left-0 hidden lg:block">
            <img src="{{ asset('images/icon.svg') }}" alt="" width="300px" />
        </div>
    </div>
</body>

</html>

{{-- <!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Registro - Portal</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap");

        body {
            background-color: #ebefff;
            font-family: "Poppins", sans-serif;
            min-height: 100vh;
        }

        .custom-bg {
            background-color: #afb3ff;
        }

        .form-input {
            border: 2px solid #656ed3;
            border-radius: 50px;
            padding: 10px;
            width: 100%;
            margin-top: 8px;
            background-color: #f7fafc;
        }

        .register-btn {
            background-color: #6366f1;
            color: white;
            padding: 12px;
            border-radius: 50px;
            width: 100%;
            margin-top: 24px;
        }

        .split-background {
            position: relative;
            overflow-x: hidden;
            min-height: 100vh;
        }

        /* Desktop split background */
        @media (min-width: 768px) {
            .split-background::after {
                content: "";
                position: absolute;
                top: 0;
                right: 0;
                width: 40%;
                height: 100%;
                background-color: #afb3ff;
                z-index: -1;
            }
        }

        /* Container adjustments */
        @media (max-width: 767px) {
            .main-container {
                min-height: 100vh;
                padding: 2rem 1rem;
            }

            .form-container {
                position: static !important;
                margin-top: 2rem;
            }

            .title-text {
                font-size: 2.5rem !important;
                line-height: 1.2;
                margin-bottom: 1.5rem;
            }
        }

        /* Mobile specific styles */
        @media (max-width: 640px) {
            .title-text {
                font-size: 2rem !important;
            }

            .bottom-icon {
                width: 150px !important;
            }
        }

        /* Tablet adjustments */
        @media (min-width: 768px) and (max-width: 1024px) {
            .imagem img {
                width: 600px;
            }

            .mr-20 {
                margin-right: 2rem;
            }
        }

        /* Desktop and larger */
        @media (min-width: 1024px) {
            .imagem img {
                width: 900px;
            }
        }
    </style>
</head>

<body>
    <div class="split-background">
        <div class="main-container container mx-auto px-4 min-h-screen flex items-center relative">
            <div class="w-full max-w-md z-10">
                <div class="form-container bg-transparent" style="position: relative; top: -100px">
                    <h1 class="title-text text-[52px] font-bold text-[#333333] mb-8">Registro</h1>
                    <form method="POST" action="{{ route('register') }}" class="space-y-5">
                        @csrf

                        <div>
                            <label class="block text-[#666666] text-sm mb-2">Nome:</label>
                            <input type="text" name="name" value="{{ old('name') }}" required autofocus
                                autocomplete="name"
                                class="w-full h-12 px-4 border border-[#E5E7EB] bg-transparent focus:outline-none focus:ring-2 focus:ring-[#6366F1] focus:border-transparent"
                                style="border-radius: 50px; border: 2px solid #656ed3" />
                        </div>

                        <div>
                            <label class="block text-[#666666] text-sm mb-2">Email:</label>
                            <input type="email" name="email" value="{{ old('email') }}" required
                                autocomplete="username"
                                class="w-full h-12 px-4 border border-[#E5E7EB] bg-transparent focus:outline-none focus:ring-2 focus:ring-[#6366F1] focus:border-transparent"
                                style="border-radius: 50px; border: 2px solid #656ed3" />
                        </div>

                        <div>
                            <label class="block text-[#666666] text-sm mb-2">Senha:</label>
                            <input type="password" name="password" required autocomplete="new-password"
                                class="w-full h-12 px-4 border border-[#E5E7EB] bg-transparent focus:outline-none focus:ring-2 focus:ring-[#6366F1] focus:border-transparent"
                                style="border-radius: 50px; border: 2px solid #656ed3" />
                        </div>

                        <div>
                            <label class="block text-[#666666] text-sm mb-2">Confirmar senha:</label>
                            <input type="password" name="password_confirmation" required autocomplete="new-password"
                                class="w-full h-12 px-4 border border-[#E5E7EB] bg-transparent focus:outline-none focus:ring-2 focus:ring-[#6366F1] focus:border-transparent"
                                style="border-radius: 50px; border: 2px solid #656ed3" />
                        </div>

                        <div class="flex items-center justify-between mt-6 flex-col">
                            <button type="submit" class="register-btn">Registrar</button>

                            @if (Route::has('login'))
                                <a href="{{ route('login') }}" class="text-sm text-gray-600 hover:text-gray-900 mt-3">
                                    Já têm conta? Faça Login!
                                </a>
                            @endif
                        </div>
                    </form>
                </div>
            </div>

            <!-- Desktop/Tablet Image -->
            <div class="hidden md:block absolute right-0 top-1/2 transform -translate-y-1/2 mr-20">
                <div class="imagem">
                    <img src="{{ asset('images/pc.svg') }}" alt="" />
                </div>
            </div>

        </div>
    </div>

            <!-- Bottom Icon -->
            <div class="absolute bottom-0 left-0">
                <img src="{{ asset('images/icon.svg') }}" alt="" class="bottom-icon" width="300px" />
            </div>
</body>

</html> --}}

{{-- <!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Registro - Portal</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap");

        body {
            background-color: #ebefff;
            font-family: "Poppins", sans-serif;
        }

        .custom-bg {
            background-color: #afb3ff;
        }

        .form-input {
            border: 2px solid #656ed3;
            border-radius: 50px;
            padding: 10px;
            width: 100%;
            margin-top: 8px;
            background-color: #f7fafc;
        }

        .register-btn {
            background-color: #6366f1;
            color: white;
            padding: 12px;
            border-radius: 50px;
            width: 100%;
            margin-top: 24px;
        }

        .split-background {
            position: relative;
            overflow: hidden;
        }

        .split-background::after {
            content: "";
            position: absolute;
            top: 0;
            right: 0;
            width: 40%;
            height: 100%;
            background-color: #afb3ff;
            z-index: -1;
        }

        .imagem img {
            width: 900px;
        }
    </style>
</head>

<body class="min-h-screen split-background">
    <div class="container mx-auto px-4 h-screen flex items-center">
        <div class="w-full max-w-md">
            <div class="bg-transparent" style="position: relative; top: -100px">
                <h1 class="text-[52px] font-bold text-[#333333] mb-8">Registro</h1>
                <form method="POST" action="{{ route('register') }}">
                    @csrf

                    <div class="mb-5">
                        <label class="block text-[#666666] text-sm mb-2">Nome:</label>
                        <input type="text" name="name" value="{{ old('name') }}" required autofocus
                            autocomplete="name"
                            class="w-full h-12 px-4 border border-[#E5E7EB] bg-transparent focus:outline-none focus:ring-2 focus:ring-[#6366F1] focus:border-transparent"
                            style="border-radius: 50px; border: 2px solid #656ed3" />
                    </div>

                    <div class="mb-5">
                        <label class="block text-[#666666] text-sm mb-2">Email:</label>
                        <input type="email" name="email" value="{{ old('email') }}" required
                            autocomplete="username"
                            class="w-full h-12 px-4 border border-[#E5E7EB] bg-transparent focus:outline-none focus:ring-2 focus:ring-[#6366F1] focus:border-transparent"
                            style="border-radius: 50px; border: 2px solid #656ed3" />
                    </div>

                    <div class="mb-5">
                        <label class="block text-[#666666] text-sm mb-2">Senha:</label>
                        <input type="password" name="password" required autocomplete="new-password"
                            class="w-full h-12 px-4 border border-[#E5E7EB] bg-transparent focus:outline-none focus:ring-2 focus:ring-[#6366F1] focus:border-transparent"
                            style="border-radius: 50px; border: 2px solid #656ed3" />
                    </div>

                    <div class="mb-6">
                        <label class="block text-[#666666] text-sm mb-2">Confirmar senha:</label>
                        <input type="password" name="password_confirmation" required autocomplete="new-password"
                            class="w-full h-12 px-4 border border-[#E5E7EB] bg-transparent focus:outline-none focus:ring-2 focus:ring-[#6366F1] focus:border-transparent"
                            style="border-radius: 50px; border: 2px solid #656ed3" />
                    </div>


                    <div class="flex items-center justify-between mt-6 flex-col">
                        <button type="submit" class="register-btn">Registrar</button>

                        @if (Route::has('login'))
                            <a href="{{ route('login') }}" class="text-sm text-gray-600 hover:text-gray-900 mt-3">
                                Já têm conta? Faça Login!
                            </a>
                        @endif
                    </div>
                </form>
            </div>
        </div>

        <div class="hidden md:block absolute right-0 top-1/2 transform -translate-y-1/2 mr-20">
            <div class="imagem">
                <img src="{{ asset('images/pc.svg') }}" alt="" />
            </div>
        </div>

        <div class="absolute bottom-0 left-0">
            <img src="{{ asset('images/icon.svg') }}" alt="" width="300px" />
        </div>
    </div>
</body>

</html> --}}
