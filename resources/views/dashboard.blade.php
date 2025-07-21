<x-layout.app>
    <x-card>
        <!-- Header -->
        <x-title title="Dashboard"/>

        <!-- User Photo -->
        <div class="flex items-center gap-3 flex-col mb-6">
            <x-img src="/storage/{{ $user->photo }}" alt="Foto de perfil"/>

            <!-- Nome como link para editar o perfil -->
            <a href="{{ route('profile') }}" class="text-2xl font-bold tracking-wider hover:underline hover:text-primary transition">
                {{ $user->name }}
            </a>

            <div class="text-base-content/70 text-center">{{ $user->description }}</div>
        </div>

        <!-- Links List -->
        <div class="space-y-3">
            @foreach ($links as $link)
                <div class="flex items-center gap-3 p-3 bg-base-200 rounded-lg">

                    <!-- Down Arrow -->
                    @unless($loop->last)
                        <x-form :route="route('links.down', $link)" patch>
                            <button type="submit" class="btn btn-ghost btn-sm">
                                <x-icons.arrow-down class="size-4"/>
                            </button>
                        </x-form>
                    @else
                        <div class="btn btn-ghost btn-sm opacity-30 cursor-not-allowed">
                            <x-icons.arrow-down class="size-4"/>
                        </div>
                    @endunless

                    <!-- Up Arrow -->
                    @unless($loop->first)
                        <x-form :route="route('links.up', $link)" patch>
                            <button type="submit" class="btn btn-ghost btn-sm">
                                <x-icons.arrow-up class="size-4"/>
                            </button>
                        </x-form>
                    @else
                        <div class="btn btn-ghost btn-sm opacity-30 cursor-not-allowed">
                            <x-icons.arrow-up class="size-4"/>
                        </div>
                    @endunless

                    <a href="{{ route('links.edit', $link) }}" class="btn btn-primary flex-1 justify-start">
                        {{ $link->name }}
                    </a>

                    <!-- Delete Button -->
                    <x-form :route="route('links.destroy', $link)" delete onsubmit="return confirm('Tem certeza?')">
                        <button type="submit" class="btn btn-ghost btn-sm text-error hover:bg-error hover:text-error-content">
                            <x-icons.trash class="size-4"/>
                        </button>
                    </x-form>
                </div>
            @endforeach

            @if($links->isEmpty())
                <div class="text-center py-8 text-base-content/70">
                    <p>Nenhum link encontrado.</p>
                    <a href="{{ route('links.create') }}" class="btn btn-primary mt-4">
                        Criar primeiro link
                    </a>
                </div>
            @endif
        </div>

        <!-- Create New Link Button -->
        <div class="mt-6 text-center">
            <a href="{{ route('links.create') }}" class="btn btn-primary">
                Criar novo link
            </a>
        </div>
    </x-card>
</x-layout.app>
