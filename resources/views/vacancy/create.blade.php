<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Criar Vagas') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto px-6 lg:px-8">
            <div class="bg-teal-500 overflow-hidden shadow-sm rounded-lg">
                <div class="p-6 text-gray-900">

                    <h1 class="text-2xl text-center font-bold my-10 text-white">Publicar vagas</h1>

                    <div class="md:flex justify-center p-5">
                        <livewire:create-vacancies />
                    </div>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
