<button {{ $attributes->merge([
    'type' => 'submit',
    'class' => 'w-full flex justify-center items-center px-4 py-3 bg-blue-600 hover:bg-blue-700 text-white font-semibold rounded-lg shadow transition duration-200'
]) }}>
    {{ $slot }}
</button>
