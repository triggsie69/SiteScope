<button onclick="Livewire.emit('openModal', 'organisation-select')" class="w-full px-4 py-2 text-sm leading-5 text-left text-gray-700 transition hover:bg-indigo-200 focus:outline-none focus:bg-indigo-200">
    @if (!is_null(Auth::user()->organisation_id))
        {{ Auth::user()->activeOrganisation->name }}
        <br>
        <x-Svg.ArrowDropRight class="fill-gray-400 ml-3 mr-1 w-2.5 h-2.5 inline" />
        @if (!is_null(Auth::user()->site_id))
            {{ Auth::user()->activeSite->name }}
        @else
            -- select --
        @endif
    @else
        -- select --
    @endif
</button>