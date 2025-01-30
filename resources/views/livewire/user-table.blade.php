<div class="container mx-auto px-4 sm:px-6 lg:px-8 py-4">
    <div class="bg-white rounded-lg shadow-sm p-4 sm:p-6">
        <div
            class="flex flex-col sm:flex-row justify-between items-start sm:items-center mb-6 mt-6 space-y-4 sm:space-y-0">
            <h2 class="text-xl font-semibold">Usuários</h2>
            <div class="flex flex-col sm:flex-row gap-2 w-full sm:w-auto">
                <div class="relative w-full sm:w-auto">
                    <input type="text" wire:model.live="search" placeholder="Buscar usuário..."
                        class="w-full sm:w-auto pl-8 pr-4 py-2 border rounded-lg text-sm" />
                    <svg class="w-4 h-4 absolute left-2 top-3 text-gray-400" fill="none" stroke="currentColor"
                        viewBox="0 0 24 24">
                        <path d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" stroke-linecap="round"
                            stroke-linejoin="round" stroke-width="2" />
                    </svg>
                </div>
                <button wire:click="sortBy('name')"
                    class="w-full sm:w-auto px-4 py-2 bg-purple-100 text-purple-600 rounded-lg text-sm flex justify-center items-center border-2 border-[#9333ea]"
                    >
                    Ordenar por Nome
                    @if ($sortField == 'name')
                        @if ($sortDirection == 'asc')
                            <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M5 15l7-7 7 7" />
                            </svg>
                        @else
                            <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M19 9l-7 7-7-7" />
                            </svg>
                        @endif
                    @endif
                </button>
            </div>
        </div>

        <div class="border border-gray-100 rounded-lg overflow-x-auto">
            <div class="min-w-full inline-block align-middle">
                <div class="overflow-hidden">
                    <table class="min-w-full">
                        <thead>
                            <tr class="text-left text-sm text-gray-500">
                                <th class="pb-4 pl-4 pt-4">Nome</th>
                                <th class="pb-4 pl-4 pt-4 hidden sm:table-cell">Status</th>
                                <th class="pb-4 pt-4 hidden md:table-cell">E-mail</th>
                                <th class="pb-4 pt-4 hidden lg:table-cell">Cadastrado há</th>
                                <th class="pb-4 pt-4 pr-4">Ações</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($users as $user)
                                <tr class="border-t">
                                    <td class="py-4 pl-4">
                                        <div class="flex items-center gap-3">
                                            <div
                                                class="w-8 h-8 sm:w-10 sm:h-10 rounded-full bg-purple-500 flex items-center justify-center text-white text-sm sm:text-base">
                                                {{ strtoupper(substr($user->name, 0, 2)) }}
                                            </div>
                                            <div>
                                                <div class="font-medium">{{ $user->name }}</div>
                                                <div class="text-xs sm:text-sm text-gray-500">
                                                    {{ '@' . Str::slug($user->name) }}</div>

                                                <div class="sm:hidden text-xs text-gray-500 mt-1">
                                                    <span
                                                        class="
                                                        px-2 py-1 rounded-full text-sm
                                                        {{ $user->id === Auth::id() ? 'bg-green-100 text-green-600' : 'bg-red-100 text-red-600' }}
                                                        ">
                                                        • {{ $user->id === Auth::id() ? 'Active' : 'Inactive' }}
                                                    </span>
                                                </div>
                                                <div class="md:hidden text-xs text-gray-500 mt-1">
                                                    {{ $user->email }}
                                                </div>
                                                <div class="lg:hidden text-xs text-gray-500 mt-1">
                                                    {{ $user->created_at->locale('pt_BR')->diffForHumans() }}
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="hidden sm:table-cell">
                                        <span
                                            class="
                                            px-2 py-1 rounded-full text-sm
                                            {{ $user->id === Auth::id() ? 'bg-green-100 text-green-600' : 'bg-red-100 text-red-600' }}
                                            ">
                                            • {{ $user->id === Auth::id() ? 'Active' : 'Inactive' }}
                                        </span>
                                    </td>
                                    <td class="hidden md:table-cell text-gray-600">{{ $user->email }}</td>
                                    <td class="hidden lg:table-cell text-gray-600">
                                        {{ $user->created_at->locale('pt_BR')->diffForHumans() }}</td>
                                    <td class="text-gray-600 pr-4">
                                        <a href="{{ route('acessarComo', $user->id) }}"
                                            class="w-full sm:w-auto p-2 px-4 bg-purple-600 text-white rounded-lg text-sm flex items-center justify-center">

                                            <svg class="w-5 h-5 sm:hidden" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                                <path d="M10 2a8 8 0 1 0 8 8h-3a5 5 0 1 1-5-5V2z"/>
                                                <path d="M12 2h4v4h-2V4h-2V2z"/>
                                            </svg>

                                            <span class="hidden sm:inline">Acessar conta</span>
                                        </a>


                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="5" class="text-center p-4">Nenhum usuário encontrado.</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <div class="flex justify-center gap-1 mt-4">
            {{ $users->links() }}
        </div>
    </div>
</div>
