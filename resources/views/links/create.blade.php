<x-layout.app>
        <x-card>
        <!-- Header -->
        <x-title title="Criar um Link"/>

        <!-- Session Message -->
        <x-alert type="error" :message="session()->get('message')" />

        <x-form :route="route('links.create')" post>
            <!--Link Field -->
            <x-input
                label="Link"
                name="link"
                type="text"
                placeholder="Digite um link"
                value="{{ old('link') }}"
            />

            <!--Name Field -->
            <x-input
                label="Nome"
                name="name"
                type="text"
                placeholder="Digite o nome do link"
                value="{{ old('name') }}"
            />

           <x-button-group>
                <x-a href="{{ route('dashboard') }}" class="mt-6">
                    Cancelar
                </x-a>
                
                <x-button class="w-40" mt>
                    Criar um novo link
                </x-button>
            </x-button-group>
        </x-form>
    </x-card>
</x-layout.app>