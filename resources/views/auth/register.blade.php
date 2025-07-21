<x-layout.app>
    <x-card>
        <!-- Header -->
        <x-title title="Criar Conta" subtitle="Cadastre-se para começar" />

        <!-- Session Message -->
        <x-alert type="error" :message="session()->get('message')" />

        <!-- Form -->
        <x-form :route="route('register')" post>

            <!-- Name Field -->
            <x-input
                label="Nome"
                name="name"
                type="text"
                placeholder="Digite seu nome"
                value="{{ old('name') }}"
            />

            <!-- Email Field -->
            <x-input
                label="Email"
                name="email"
                type="email"
                placeholder="Digite seu email"
                value="{{ old('email') }}"
            />

            <!-- Email Confirmation Field -->
            <x-input
                label="Confirmar email"
                name="email_confirmation"
                type="email"
                placeholder="Confirme seu email"
            />


            <!-- Password Field -->
            <x-input
                label="Senha"
                name="password"
                type="password"
                placeholder="Digite sua senha"
            />

            <!-- Register Button -->
            <x-button class='w-full' mt>
                Criar Conta
            </x-button>
        </x-form>

        <!-- Login Link -->
        <div class="text-center mt-6">
            <p class="text-base-content/70">
                Já tem uma conta?
                <x-a href="{{ route('login') }}">
                    Faça login
                </x-a>
            </p>
        </div>
    </x-card>
</x-layout.app>