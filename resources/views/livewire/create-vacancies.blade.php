<form action="" class="md:w-1/2 space-y-5">
    <div>
        <x-input-label for="title" :value="__('Título Vaga')" />

        <x-text-input id="email" class="block
         w-full py-2 pl-4" type="title" name="title" :value="old('title')"
            required placeholder="Título Vaga" />
        <x-input-error :messages="$errors->get('email')" class="mt-2" />
    </div>

    <div>
        <x-input-label for="wage" :value="__('Salário Mensal')" />
        <select id="wage" name="wage"
            class="rounded-md shadow-sm  border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200focus: ring-opacity-50 w-full">
            <option value="">-- Selecione --</option>
            @foreach ($wages as $wage)
                <option value="{{ $wage->id }}">{{ $wage->wage }}</option>
            @endforeach
        </select>
    </div>
    <div>
        <x-input-label for="wage" :value="__('Categoria')" />
        <select id="category" name="category"
            class="rounded-md shadow-sm  border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200focus: ring-opacity-50 w-full">
            <option value="">---Selecione----</option>
            @foreach ($categories as $category)
                <option value="{{ $category->id }}">{{ $category->category }}</option>
            @endforeach
        </select>
    </div>

    <div>
        <x-input-label for="company" :value="__('Empresa')" />

        <x-text-input id="company" class="block
         w-full py-2 pl-4" type="text" name="company"
            :value="old('company')" required placeholder="Empresa: ex. Netflix, Uber , Google" />
        <x-input-error :messages="$errors->get('email')" class="mt-2" />
    </div>

    <div>
        <x-input-label for="last_day" :value="__('Último dia para aplicar')" />

        <x-text-input id="last_day" class="block
         w-full py-2 pl-4" type="date" name="last_day"
            :value="old('last_day')" required />
        <x-input-error :messages="$errors->get('email')" class="mt-2" />
    </div>

    <div>
        <x-input-label for="last_day" :value="__('Descrição da Vaga')" />
        <textarea name="description" placeholder="Descrição da Vaga"
            class="rounded-md shadow-sm  border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full h-72"></textarea>
    </div>

    <div>
        <x-input-label for="image" :value="__('Imagem')" />

        <x-text-input id="image" class="block
         w-full" type="file" name="image" />
        <x-input-error :messages="$errors->get('email')" class="mt-2" />
    </div>

    <x-primary-button class="w-full justify-center bg-gray-800">
        {{ __('Criar Vaga') }}
    </x-primary-button>
</form>
