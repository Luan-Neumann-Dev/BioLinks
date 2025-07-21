<x-layout.app>
    <x-card>
        <!-- Header -->
        <x-title title="Entrar" subtitle="Faça login na sua conta" />

        <!-- Session Message -->
        <x-alert type="error" :message="session()->get('message')" />

        <!-- Form -->
        <x-form :route="route('login')" post>

            <!-- Email Field -->
            <x-input
                label="Email"
                name="email"
                type="email"
                placeholder="Digite seu email"
                value="{{ old('email') }}"
            />

            <!-- Password Field -->
            <x-input
                label="Senha"
                name="password"
                type="password"
                placeholder="Digite sua senha"
            />

            <!-- Login Button -->
            <x-button class='w-full' mt>
                Entrar
            </x-button>
        </x-form>

        <!-- Register Link -->
        <div class="text-center mt-6">
            <p class="text-base-content/70">
                Não tem uma conta?
                <x-a href="{{ route('register') }}">
                    Cadastre-se
                </x-a>
            </p>
        </div>
    </x-card>
</x-layout.app>