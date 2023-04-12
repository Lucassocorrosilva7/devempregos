<x-guest-layout>
    <div class="mb-4 text-sm text-gray-600">
        {{ __('Esqueceu sua senha? Não há problema. Basta nos informar seu endereço de e-mail e enviaremos um link de redefinição de senha que permitirá que você escolha um novo.') }}
    </div>

    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('password.email') }}">
        @csrf

        <div>
            <x-input-label for="email" :value="__('E-mail')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required
                autofocus />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <x-primary-button class="w-full justify-center">
            {{ __('Enviar Instruções') }}
        </x-primary-button>

        <div class="flex items-center justify-between mt-4 mb-2">
            <x-link :href="route('login')">
                Conecte-se
            </x-link>

            <x-link :href="route('register')">
                Criar Conta
            </x-link>
        </div>

    </form>
</x-guest-layout>
