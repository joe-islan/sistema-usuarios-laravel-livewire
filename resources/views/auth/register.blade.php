<x-guest-layout>
<div class="min-h-screen split-background">
    <div class="container mx-auto px-4 h-screen flex items-center">
        <div class="w-full max-w-md mx-auto xl:mx-0">
            <div class="bg-transparent">
                <h1 class="text-4xl lg:text-[52px] font-bold text-[#333333] mb-8">Registro</h1>
                <form method="POST" action="{{ route('register') }}">
                    @csrf

                    <div class="mb-5">
                        <label class="block text-[#666666] text-sm mb-2">Nome:</label>
                        <input type="text" name="name" value="{{ old('name') }}" required autofocus
                            autocomplete="name"
                            class="w-full h-12 px-4 border bg-transparent focus:outline-none focus:ring-2 focus:ring-[#6366F1] focus:border-transparent rounded-full border-2 border-[#656ed3]" />
                    </div>

                    <div class="mb-5">
                        <label class="block text-[#666666] text-sm mb-2">Email:</label>
                        <input type="email" name="email" value="{{ old('email') }}" required
                            autocomplete="username"
                            class="w-full h-12 px-4 border bg-transparent focus:outline-none focus:ring-2 focus:ring-[#6366F1] focus:border-transparent rounded-full border-2 border-[#656ed3]" />
                    </div>

                    <div class="mb-5">
                        <label class="block text-[#666666] text-sm mb-2">Senha:</label>
                        <input type="password" name="password" required autocomplete="new-password"
                            class="w-full h-12 px-4 border bg-transparent focus:outline-none focus:ring-2 focus:ring-[#6366F1] focus:border-transparent rounded-full border-2 border-[#656ed3]" />
                    </div>

                    <div class="mb-6">
                        <label class="block text-[#666666] text-sm mb-2">Confirmar senha:</label>
                        <input type="password" name="password_confirmation" required autocomplete="new-password"
                            class="w-full h-12 px-4 border bg-transparent focus:outline-none focus:ring-2 focus:ring-[#6366F1] focus:border-transparent rounded-full border-2 border-[#656ed3]" />
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

        <div class="hidden xl:block absolute right-0 top-1/2 transform -translate-y-1/2 mr-20">
            <div class="imagem">
                <img src="{{ asset('images/pc.svg') }}" alt="" class="w-full max-w-[900px]" />
            </div>
        </div>

        <div class="absolute bottom-0 left-0 hidden xl:block">
            <img src="{{ asset('images/icon.svg') }}" alt="" width="200px" />
        </div>
    </div>
</div>
</x-guest-layout>
