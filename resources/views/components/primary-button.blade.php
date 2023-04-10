<button
    {{ $attributes->merge(['type' => 'submit', 'class' => 'inline-flex items-center  mt-4 px-4 py-2 bg-teal-500 border border-transparent rounded-md font-semibold text-xs text-white text-center uppercase tracking-widest hover:bg-teal-600 focus:bg-teal-600 active:bg-teal-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150']) }}>
    {{ $slot }}
</button>
