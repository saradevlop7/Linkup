@props(['disabled' => false])

<input
    {{ $disabled ? 'disabled' : '' }}

    {!! $attributes->merge([
        'class' => 'w-full rounded-lg border border-gray-300 px-4 py-3 text-gray-700 placeholder-gray-400 focus:border-blue-600 focus:ring-2 focus:ring-blue-200 transition duration-200'
    ]) !!}>
