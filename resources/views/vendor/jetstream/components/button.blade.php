<button {{ $attributes->merge(['type' => 'submit', 'class' => 'items-center px-4 py-2 bg-gray-100 border-2 border-indigo-200 rounded-md font-semibold text-xs uppercase tracking-widest hover:bg-indigo-200 hover:border-indigo-500 active:bg-indigo-500 active:border-indigo-900 active:text-indigo-900 disabled:opacity-25 transition']) }}>
    {{ $slot }}
</button>
