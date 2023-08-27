<div class="flex items-center">
    <div class="inline-block h-4 w-4 rounded-full z-10"
        @style(['background-color: ' . $statuses->find($status_id)->color])>
    </div>
    <select
        class="pl-6 -ml-6"
        wire:model.live="status_id" />
    @foreach ($statuses as $status)
        <option data-content=""
            value="{{ $status->id }}">
            {{ $status->name }}
        </option>
    @endforeach
    </select>
</div>
