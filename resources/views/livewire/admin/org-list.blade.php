<main class="flex justify-center mt-1 py-2">
    <div class="bg-gray-100 p-1 rounded-lg">
        <div class="p-1">
            <table class="border border-slate-800">
                <tr class="bg-gray-700 text-gray-100">
                    @foreach ($headers as $header)
                        <th class="group align-bottom border border-slate-800 capitalize cursor-pointer font-semibold pl-1 pr-4 py-1 text-sm transition hover:bg-indigo-500">
                            <x-Svg.ColumnSort asc="{{ false }}" desc="{{ true }}" class="float-left mr-2 mt-0.5 w-4"/>
                            {{ $header }}
                        </th>
                    @endforeach
                </tr>

                @foreach ($orgs as $org)
                    <tr class="cursor-pointer even:bg-gray-200 odd:bg-gray-300 hover:bg-indigo-200">
                        @foreach ($org->getAttributes() as $key => $value)
                            <td class="border-l border-r border-slate-800 pl-1 pr-4">{{ $value }}</td>
                        @endforeach
                    </tr>
                @endforeach
            </table>
        </div>
    </div>
</main>
