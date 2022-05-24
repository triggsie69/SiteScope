@props([
    'home' => false,
    'icon' => 'Svg.Logo',
    'iconAtts' => 'h-12',
])

<div class="flex justify-start p-1 bg-gray-100 rounded-t-lg">
    <x-Svg.Logo class="block w-auto h-4 ml-2" />
    <div class="ml-2 text-xs">{{ $slot }}</div>
</div>

<div class="flex justify-center pt-4 pb-2">
    @if ($home)<a href="{{ route('home') }}">@endif
        <x-dynamic-component :component="$icon" class="block w-auto {{ $iconAtts }}"/>
    @if ($home)</a>@endif
</div>
<div class="flex justify-between p-2">
    <div class="flex mx-2 grow"><hr class="w-full my-auto border-gray-800 border-1"></div>
    <div class="flex text-4xl align-middle shrink-0">STORES</div>
    <div class="flex mx-2 grow text"><hr class="w-full my-auto border-gray-800 border-1"></div>
</div>