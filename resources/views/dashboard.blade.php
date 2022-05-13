<x-app-layout>
    @php
        $admin = 'admin';
    @endphp
    <div >
            <div class="text-center bg-gray-200 rounded-lg">
                <div class="flex justify-start p-1 bg-gray-100 rounded-t-lg">
                    <x-logo class="block w-auto h-4 ml-2" />
                    <div class="ml-2 text-xs">Main Menu</div>
                </div>
                <div class="flex justify-center pt-8 pb-2"><x-logo class="block w-auto h-12"/></div>
                <div class="flex justify-between p-2">
                    <div class="flex mx-2 grow"><hr class="w-full my-auto border-gray-800 border-1"></div>
                    <div class="flex text-4xl align-middle shrink-0">STORES</div>
                    <div class="flex mx-2 grow text"><hr class="w-full my-auto border-gray-800 border-1"></div>
                </div>
                <div class="grid grid-cols-3 gap-1 pt-1 pb-4 pl-1 pr-1 sm:grid-cols-4 sm:gap-4 sm:pl-4 sm:pr-4">
                    <x-Nav.DashboardLink href="{{ route('admin') }}" icon="Svg.Admin">
                        {{ __('administration') }}
                    </x-nav.admin>
                    <x-Nav.DashboardLink href="#" icon="Svg.Organisation">
                        {{ __('organisations') }}
                    </x-nav.admin>
                    <x-Nav.DashboardLink href="#" icon="Svg.Site">
                        {{ __('sites') }}
                    </x-nav.admin>
                    <x-Nav.DashboardLink href="#" icon="Svg.Store">
                        {{ __('stores') }}
                    </x-nav.admin>
                    <x-Nav.DashboardLink href="#" icon="Svg.User">
                        {{ __('users') }}
                    </x-nav.admin>
                    <x-Nav.DashboardLink href="#" icon="Svg.Group">
                        {{ __('groups') }}
                    </x-nav.admin>
                    <x-Nav.DashboardLink href="#" icon="Svg.Manufacturer">
                        {{ __('manufacturers') }}
                    </x-nav.admin>
                    <x-Nav.DashboardLink href="#" icon="Svg.Vendor">
                        {{ __('vendors') }}
                    </x-nav.admin>
                    <x-Nav.DashboardLink href="#" icon="Svg.Stock">
                        {{ __('stock') }}
                    </x-nav.admin>
                    <x-Nav.DashboardLink href="#" icon="Svg.Checkout">
                        {{ __('checkout') }}
                    </x-nav.admin>
                </div>
            </div>
    </div>
</x-app-layout>