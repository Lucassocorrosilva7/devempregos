<x-guest-layout>
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <div>
            <x-input-label for="name" :value="__('Nome')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" autofocus
                autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <div class="mt-4">
            <x-input-label for="email" :value="__('E-mail')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')"
                autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <div class="mt-4">
            <x-input-label for="rol" :value="__('')" />
            <select id="rol" name="rol"
                class="rounded-md shadow-sm  border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200focus: ring-opacity-50 w-full">
                <option value="">---Selecione----</option>
                <option value="1">Como candidato</option>
                <option value="2">Como empresa</option>
            </select>
            <x-input-error :messages="$errors->get('rol')" class="mt-2" />
        </div>


        <div class="mt-4">
            <x-input-label for="password" :value="__('Senha')" />

            <x-text-input id="password" class="block mt-1 w-full" type="password" name="password"
                autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirmar Senha')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full" type="password"
                name="password_confirmation" autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>
        <x-primary-button class="w-full justify-center">
            {{ __('Registrar') }}
        </x-primary-button>

        <div class="flex items-center justify-center mt-4">
            <a class="text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                Tem uma conta? <span class="text-teal-500 font-bold">{{ __('Conecte-se') }}</span>
            </a>
        </div>

    </form>
</x-guest-layout>
