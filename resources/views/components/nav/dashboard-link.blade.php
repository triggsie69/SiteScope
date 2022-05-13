<a {{ $attributes }} class="w-32 pt-4 pb-1 text-sm tracking-tight text-center uppercase transition bg-gray-100 border-2 border-indigo-200 rounded-lg group drop-shadow-2xl hover:bg-indigo-200 hover:border-indigo-500 active:bg-indigo-500 active:border-indigo-900 active:text-indigo-900 disabled:opacity-25">
    <x-dynamic-component :component="$icon" class="px-4 fill-gray-700 group-active:fill-indigo-900" />
    {{ $slot }}
</a>