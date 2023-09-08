<div class="flex items-center">
    <div class="z-10 inline-block h-2.5 w-2.5 rounded-full"
        @style(['background-color: ' . $statuses->find($status_id)->color])>
    </div>
    <select class="-ml-5 pl-5"
        wire:model.live="status_id">
        @foreach ($statuses as $status)
            <option data-content=""
                value="{{ $status->id }}">
                {{ $status->name }}
            </option>
        @endforeach
    </select>
</div>
