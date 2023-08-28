<main class="flex justify-center mt-1 py-2 text-sm">
    <div class="bg-gray-100 p-1 rounded-lg">
        <div class="p-1">
            <table class="border border-slate-800">
                <tr class="bg-gray-300">
                    @foreach (array_keys($coll->first()->getAttributes()) as $colTitle)
                        <th x-data="sortSelect('{{ $colTitle }}', @entangle('asc'), @entangle('desc'))"
                        class="group align-bottom border border-slate-800 cursor-pointer transition active:bg-indigo-500 active:ring-1 active:ring-indigo-900 active:ring-inset hover:text-deep-orange-500 hover:bg-indigo-200 hover:ring-1 hover:ring-indigo-500 hover:ring-inset">
                            <div @mouseover="animateArrows(true)" @mouseleave="animateArrows(false)" class="flex items-center relative">
                                <div x-ref="arrows" class="flex-none invisible">
                                    <svg viewBox="0 0 14 14" role="img" focusable="false" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" class="ml-0.5 w-4">
                                        <path x-ref="ascArrow" class="transition" d="m 11.363635,5.363637 c 0,0.1477267 -0.05398,0.2755673 -0.16193,0.383522 -0.107953,0.1079547 -0.235793,0.161932 -0.38352,0.161932 l -7.63637,0 c -0.1477267,0 -0.2755667,-0.053977 -0.38352,-0.161932 -0.1079533,-0.1079547 -0.16193,-0.2357953 -0.16193,-0.383522 0,-0.147728 0.053977,-0.2755693 0.16193,-0.383524 L 6.616475,1.161932 C 6.724435,1.0539773 6.8522783,1 7.000005,1 c 0.1477267,0 0.2755667,0.053977 0.38352,0.161932 l 3.81818,3.818181 c 0.107953,0.1079547 0.16193,0.235796 0.16193,0.383524 z"></path>
                                        <path x-ref="descArrow" class="transition" d="m 11.363635,8.636363 c 0,0.147728 -0.05398,0.275569 -0.16193,0.383523 l -3.81818,3.818182 C 7.2755717,12.946023 7.1477317,13 7.000005,13 6.8522783,13 6.724435,12.946023 6.616475,12.838068 L 2.798295,9.019886 C 2.6903417,8.911932 2.636365,8.784091 2.636365,8.636363 c 0,-0.1477267 0.053977,-0.2755673 0.16193,-0.383522 0.1079533,-0.1079547 0.2357933,-0.161932 0.38352,-0.161932 l 7.63637,0 c 0.147727,0 0.275567,0.053977 0.38352,0.161932 0.107953,0.1079547 0.16193,0.2357953 0.16193,0.383522 z"></path>
                                    </svg>
                                </div>
                                <div class="capitalize flex-1 text-center ml-2 mr-1">
                                    {{ $colTitle }}
                                </div>
                                <x-jet-dropdown width="48">
                                    <x-slot name="trigger">
                                        <div @mouseover="showArrows(false)" @mouseleave="showArrows(true)" class="flex items-center pl-1">
                                            <buttonS>
                                                <x-Svg.Hamburger class="w-4 stroke-gray-700 hover:stroke-deep-orange-500" />
                                            </button>
                                        </div>
                                    </x-slot>
                                    <x-slot name="content">
                                        <!-- Organisation Management -->
                                        <div class="block px-4 py-2 text-xs text-gray-400">
                                            {{ __('Filter') }}
                                        </div>

                                        <input type="text" placeholder="Filter..." class="text-sm">

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
                                    </x-slot>
                                </x-jet-dropdown>
                            </div>
                        </th>
                    @endforeach
                </tr>

                @foreach ($coll as $model)
                    <tr class="cursor-pointer even:bg-gray-200 odd:bg-gray-300 hover:bg-indigo-200">
                        @foreach ($model->getAttributes() as $key => $value)
                            <td class="border-l border-r border-slate-800 pl-1 pr-4">
                                {{ $value }}
                            </td>
                        @endforeach
                    </tr>
                @endforeach
            </table>
        </div>
    </div>
    <script>
        document.addEventListener('alpine:init', () => {
            Alpine.data('sortSelect', (cmenuId, ascFlag, descFlag) => ({
                contexMenuId: cmenuId,
                asc: ascFlag,
                desc: descFlag,
                show: true,

                init() {
                    this.animateArrows(false);
                    this.$refs.arrows.classList.remove('invisible');
                },

                showArrows(show) {
                    if (show) {
                        this.$refs.arrows.classList.remove('invisible');
                     } else {
                        this.$refs.arrows.classList.add('invisible');
                     }
                },
                animateArrows(showNext) {
                    if (showNext && this.asc) {
                        this.$refs.ascArrow.classList.add('invisible');
                        this.$refs.descArrow.classList.add('fill-deep-orange-500');
                        this.$refs.descArrow.classList.remove('invisible');
                    } else if (showNext && !this.asc) {
                        this.$refs.ascArrow.classList.add('fill-deep-orange-500');
                        this.$refs.ascArrow.classList.remove('invisible');
                        this.$refs.descArrow.classList.add('invisible');
                    } else if (!showNext && this.asc) {
                        this.$refs.ascArrow.classList.add('fill-gray-700');
                        this.$refs.ascArrow.classList.remove('invisible');
                        if (!this.desc) this.$refs.descArrow.classList.add('invisible');
                    } else if (!showNext && !this.asc) {
                        this.$refs.ascArrow.classList.add('invisible');
                        if (this.desc) {
                            this.$refs.descArrow.classList.add('fill-gray-700');
                            this.$refs.descArrow.classList.remove('invisible');
                        } else {
                            this.$refs.descArrow.classList.add('invisible');
                        }
                    }
                }
            }))
        });
    </script>
</main>
