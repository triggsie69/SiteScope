<div class="text-center bg-gray-200">
    <div class="flex justify-start p-1 bg-gray-100 rounded-t-lg">
        <div class="ml-2 text-xs">Organisation and site selection</div>
    </div>
    <div>
        <div class="mt-8">
            <select wire:model="organisation_id" name="organisation" class="w-3/5 font-sans border-2 border-indigo-200 focus:border-indigo-200">
                <option value="0">-- Choose an organisation --</option>
                @foreach ($organisations as $organisation)
                    <option value="{{ $organisation->id }}">{{ $organisation->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="mt-8">
            <select wire:model="site_id" name="site" class="w-3/5 font-sans border-2 border-indigo-200 focus:border-indigo-200">
                <option value="0">-- Choose a site --</option>
                @foreach ($sites as $site)
                    <option value="{{ $site->id }}">{{ $site->name }}</option>
                @endforeach
            </select>
        </div>
    </div>
    <div class="flex items-center justify-end px-4 pb-4 mt-8">
        <x-jet-button wire:click="update" class="w-24">
            {{ __('save') }}
        </x-jet-button>
        <x-jet-button wire:click="$emit('closeModal')" class="w-24 ml-4">
            {{ __('cancel') }}
        </x-jet-button>
    </div>
</div>
