@props(['messages'])

@if ($messages)
    <ul {{ $attributes->merge(['class' => 'text-sm text-red-600 space-y-1']) }}>
        @foreach ((array) $messages as $message)
            <li class="text-red-600 font-bold bg-red-100 border-l-4 p-3 border-red-600">{{ $message }}</li>
        @endforeach
    </ul>
@endif
