<x-layout.app>
        <x-card>
        <!-- Header -->
        <x-title title="Profile" subtitle="Editando seu perfil!"/>

        <!-- Session Message -->
        <x-alert />

        <x-form :route="route('profile')" put enctype="multipart/form-data">

            <div class="flex items-center gap-4 flex-col">
                <x-img src="/storage/{{ $user->photo }}" alt="Foto de perfil"/>
                
                <x-file-input name="photo" />
            </div>

            <!--Name Field -->
            <x-input
                label="Nome"
                name="name"
                type="text"
                placeholder="Digite o seu nome"
                value="{{ old('name', $user->name) }}"
            />

            <x-textarea
                label="Descrição"
                name="description"
                value="{{ old('description', $user->description) }}"
            />

            <x-input
                label="Arroba"
                name="handler"
                type="text"
                placeholder="Digite o seu arroba"
                value="{{ old('handler', $user->handler) }}"
                prefix="biolinks.com.br/"
            />

           <x-button-group>
                <x-a href="{{ route('dashboard') }}" class="mt-6">
                    Cancelar
                </x-a>
                
                <x-button class="w-40" mt>
                   Atualizar perfil
                </x-button>
            </x-button-group>
        </x-form>
    </x-card>
</x-layout.app>