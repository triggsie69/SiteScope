<main class="flex items-center justify-center flex-grow">
    <div class="text-center bg-gray-200 rounded-lg">
        <x-card-header icon="Svg.Admin" iconAtts="h-24 fill-gray-700">
            {{ __('Administration Menu') }}
        </x-card-header>
        <div class="grid grid-cols-3 gap-1 pt-1 pb-4 pl-1 pr-1 sm:grid-cols-4 sm:gap-4 sm:pl-4 sm:pr-4">
            <x-Nav.DashboardLink href="{{ route('admin.organisations') }}" icon="Svg.Organisation">
                {{ __('organisations') }}
            </x-Nav.DashboardLink>
            <x-Nav.DashboardLink href="#" icon="Svg.Site">
                {{ __('sites') }}
            </x-Nav.DashboardLink>
            <x-Nav.DashboardLink href="#" icon="Svg.Store">
                {{ __('stores') }}
            </x-Nav.DashboardLink>
            <x-Nav.DashboardLink href="#" icon="Svg.User">
                {{ __('users') }}
            </x-Nav.DashboardLink>
            <x-Nav.DashboardLink href="#" icon="Svg.Group">
                {{ __('groups') }}
            </x-Nav.DashboardLink>
            <x-Nav.DashboardLink href="#" icon="Svg.Manufacturer">
                {{ __('manufacturers') }}
            </x-Nav.DashboardLink>
            <x-Nav.DashboardLink href="#" icon="Svg.Vendor">
                {{ __('vendors') }}
            </x-Nav.DashboardLink>
            <x-Nav.DashboardLink href="#" icon="Svg.Stock">
                {{ __('stock') }}
            </x-Nav.DashboardLink>
            <x-Nav.DashboardLink href="#" icon="Svg.Checkout">
                {{ __('checkout') }}
            </x-Nav.DashboardLink>
        </div>
    </div>
</main>
