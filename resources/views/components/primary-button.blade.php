<button {{ $attributes->merge(['type' => 'submit', 'class' => 'bg-rosa inline-flex items-center px-4 py-2 bg-gray-800 rounded-md font-semibold text-xxs text-white uppercase tracking-widest hover:bg-rosaH focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150']) }}>
    {{ $slot }}
</button>
