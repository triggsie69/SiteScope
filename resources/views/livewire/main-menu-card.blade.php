<div class="text-center bg-gray-200 rounded-lg">
    <x-card-header>
        {{ __('Main Menu') }}
    </x-card-header>
    <div class="grid grid-cols-3 gap-1 pt-1 pb-4 pl-1 pr-1 sm:grid-cols-4 sm:gap-4 sm:pl-4 sm:pr-4">
        @can('administration')
            <x-Nav.DashboardLink href="{{ route('admin.dashboard') }}" icon="Svg.Admin">
                {{ __('administration') }}
            </x-nav.admin>
        @endcan
        <x-Nav.DashboardLink href="#" icon="Svg.Store">
            {{ __('stores') }}
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