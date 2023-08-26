<div class="flex items-center">
    <div class="inline-block h-4 w-4 rounded-full bg-blue-500 align-middle"
        @style(['background-color: ' . $statuses->find($status_id)->color])>
    </div>
    <select
        class="w-100 block rounded-md px-3 py-2 text-base focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm"
        wire:model.live="status_id" />
    @foreach ($statuses as $status)
        <option data-content=""
            value="{{ $status->id }}">
            {{ $status->name }}
        </option>
    @endforeach
    </select>
</div>
