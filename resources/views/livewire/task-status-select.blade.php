<div class="flex items-center">
    <div class="align-middle inline-block h-4 w-4 rounded-full bg-blue-500" @style(['background-color: ' . $statuses->find($status_id)->color])>
    </div>
    <select wire:model.live="status_id"
        class="block w-100 px-3 py-2 text-base focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm rounded-md" />
    @foreach ($statuses as $status)
        <option data-content="" value="{{ $status->id }}">
            {{ $status->name }}
        </option>
    @endforeach
    </select>
</div>
