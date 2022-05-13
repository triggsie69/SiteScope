@php
$breadcrumbs = [
    'admin' => 'Administration',
    'dashboard' => 'Dashboard',
    'gumpy' => 'Gumpy'
];
@endphp

<nav class="pb-0.5 bg-gray-200">
    <div class="flex justify-between px-1 mx-auto sm:px-2 lg:px-4">
        <div class="flex>">
            <div class="flex items-center shrink-0">
                <!-- Breadcrumbs -->
                <ul class="ml-3 breadcrumb">
                    <li>
                        <a href="{{ route('home') }}"><i class="fa fa-home"  style="color: rgb(107 114 128);"></i></a>
                    </li>
                    @for ($i = 1; $i <= count(Request::segments()); $i++)
                        @if (Route::has(Request::segment($i)))
                            @if ($i < count(Request::segments()))
                                <li>
                                    <a href="{{ route(Request::segment($i)) }}">{{ $breadcrumbs[Request::segment($i)] }}</a>
                                </li>
                            @elseif (count(Request::segments()) > 1)
                                <li>
                                    <a href="{{ route(Request::segment($i-1)) }}">
                                        {{ $breadcrumbs[Request::segment($i)] }}<i class="ml-2 align-middle fa-solid fa-xmark"></i>
                                    </a>
                                </li>
                            @else
                            <li>
                                <a href="{{ route('home') }}">
                                    {{ $breadcrumbs[Request::segment($i)] }}<i class="ml-2 align-middle fa-solid fa-xmark"></i>
                                </a>
                            </li>
                            @endif
                        @endif
                    @endfor
                </ul>
            </div>
        </div>
        
        <!-- Settings Dropdown -->
        <div class="relative ml-3">
            <x-jet-dropdown align="right" width="48">
                <x-slot name="trigger">
                    @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
                        <button class="flex text-sm transition border-2 border-transparent rounded-full focus:outline-none focus:border-gray-300">
                            <img class="object-cover w-8 h-8 rounded-full" src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}" />
                        </button>
                    @else
                        <span class="inline-flex rounded-md">
                            <button type="button" class="inline-flex items-center px-3 py-2 text-sm font-medium leading-4 text-gray-500 transition bg-white border border-transparent rounded-md hover:text-gray-700 focus:outline-none">
                                {{ Auth::user()->name }}

                                <svg class="ml-2 -mr-0.5 h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                </svg>
                            </button>
                        </span>
                    @endif
                </x-slot>

                <x-slot name="content">
                    <!-- Organisation Management -->
                    <div class="block px-4 py-2 text-xs text-gray-400">
                        {{ __('Organisation, Site') }}
                    </div>

                    <livewire:dropdown-organisation />
                    
                    <div class="border-t border-gray-100"></div>

                    <!-- Account Management -->
                    <div class="block px-4 py-2 text-xs text-gray-400">
                        {{ __('Manage Account') }}
                    </div>

                    <x-jet-dropdown-link href="{{ route('profile.show') }}">
                        {{ __('Profile') }}
                    </x-jet-dropdown-link>

                    @if (Laravel\Jetstream\Jetstream::hasApiFeatures())
                        <x-jet-dropdown-link href="{{ route('api-tokens.index') }}">
                            {{ __('API Tokens') }}
                        </x-jet-dropdown-link>
                    @endif

                    <div class="border-t border-gray-100"></div>

                    <!-- Authentication -->
                    <form method="POST" action="{{ route('logout') }}" x-data>
                        @csrf

                        <x-jet-dropdown-link href="{{ route('logout') }}"
                                @click.prevent="$root.submit();">
                            {{ __('Log Out') }}
                        </x-jet-dropdown-link>
                    </form>
                </x-slot>
            </x-jet-dropdown>
        </div>
    </div>
</nav>