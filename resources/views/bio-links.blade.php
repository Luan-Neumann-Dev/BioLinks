<x-layout.app>
    <x-card>
        <div class="max-w-xl mx-auto p-6 text-center space-y-6">
            <!-- Foto do Usuário -->
            <div class="flex justify-center">
                <x-img src="/storage/{{ $user->photo }}" alt="Foto de perfil" class="rounded-full w-32 h-32 object-cover" />
            </div>

            <!-- Nome e Descrição -->
            <div>
                <h2 class="text-2xl font-bold">{{ $user->name }}</h2>
                <p class="text-base-content/70">{{ $user->description }}</p>
            </div>

            <!-- Links como botões -->
            <div class="space-y-3">
                @forelse ($user->links as $link)
                    <a href="{{ $link->link }}" target="_blank" class="btn btn-primary w-full">
                        {{ $link->name }}
                    </a>
                @empty
                    <p class="text-base-content/70">Nenhum link disponível.</p>
                @endforelse
            </div>
        </div>
    </x-card>
</x-layout.app>
