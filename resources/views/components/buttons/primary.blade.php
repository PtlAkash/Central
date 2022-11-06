<button {{ $attributes->merge(['type' => 'submit', 'class' => 'inline-flex items-center px-4 py-2 rgba(124, 80, 153, 1) border border-transparent rounded font-semibold text-xs text-white uppercase tracking-widest hover:rgba(124, 80, 153, 1) active:rgba(124, 80, 153, 1) focus:outline-none focus:border-gray-900 focus:ring focus:ring-gray-300 disabled:opacity-25 transition']) }}>
    {{ $slot }}
</button>
