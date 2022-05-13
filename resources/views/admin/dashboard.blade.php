<x-app-layout>
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
                    <x-nav.admin class="w-32 pt-4 pb-1 pl-4 pr-4 text-sm text-center bg-gray-100 border-2 border-gray-300 rounded-lg drop-shadow-2xl hover:bg-indigo-200 hover:border-indigo-500"/>
                    <x-nav.organisations class="w-32 pt-4 pb-1 pl-4 pr-4 text-sm text-center bg-gray-100 border-2 border-gray-300 rounded-lg drop-shadow-2xl hover:bg-indigo-200 hover:border-indigo-500"/>
                    <x-nav.sites class="w-32 pt-4 pb-1 pl-4 pr-4 text-sm text-center bg-gray-100 border-2 border-gray-300 rounded-lg drop-shadow-2xl hover:bg-indigo-200 hover:border-indigo-500"/>
                    <x-nav.stores class="w-32 pt-4 pb-1 pl-4 pr-4 text-sm text-center bg-gray-100 border-2 border-gray-300 rounded-lg drop-shadow-2xl hover:bg-indigo-200 hover:border-indigo-500"/>
                    <x-nav.users class="w-32 pt-4 pb-1 pl-4 pr-4 text-sm text-center bg-gray-100 border-2 border-gray-300 rounded-lg drop-shadow-2xl hover:bg-indigo-200 hover:border-indigo-500"/>
                    <x-nav.groups class="w-32 pt-4 pb-1 pl-4 pr-4 text-sm text-center bg-gray-100 border-2 border-gray-300 rounded-lg drop-shadow-2xl hover:bg-indigo-200 hover:border-indigo-500"/>
                    <x-nav.manufacturers class="w-32 pt-4 pb-1 pl-4 pr-4 text-sm text-center bg-gray-100 border-2 border-gray-300 rounded-lg drop-shadow-2xl hover:bg-indigo-200 hover:border-indigo-500"/>
                    <x-nav.vendors class="w-32 pt-4 pb-1 pl-4 pr-4 text-sm text-center bg-gray-100 border-2 border-gray-300 rounded-lg drop-shadow-2xl hover:bg-indigo-200 hover:border-indigo-500"/>
                    <x-nav.stock class="w-32 pt-4 pb-1 pl-4 pr-4 text-sm text-center bg-gray-100 border-2 border-gray-300 rounded-lg drop-shadow-2xl hover:bg-indigo-200 hover:border-indigo-500"/>
                    <x-nav.checkout class="w-32 pt-4 pb-1 pl-4 pr-4 text-sm text-center bg-gray-100 border-2 border-gray-300 rounded-lg drop-shadow-2xl hover:bg-indigo-200 hover:border-indigo-500"/>
                </div>
            </div>
    </div>
</x-app-layout>