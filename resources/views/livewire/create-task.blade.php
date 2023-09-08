<div class="p-2">
    <div class="flex flex-row-reverse justify-between">
        <button class="p-1"
            wire:click="closeModal">
            <x-icons.x class="h-5 w-5 text-slate-700 dark:text-slate-400" />
        </button>
        <h3 class="p-1">Add Task</h3>
    </div>
    <div class="flex flex-col">
        <label class="p-1"
            for="description">
            <div>Description</div>
            <textarea class="mt-2 h-20 w-full"
                id="description"
                type="text"
                wire:model="description">
            </textarea>
        </label>
        <label class="p-1"
            for="team_id">
            Team
            <select id="team_id"
                wire:model="team_id">
                @foreach ($teams as $team)
                    <option value="{{ $team->id }}">{{ $team->abbreviation }}</option>
                @endforeach
            </select>
        </label>
        <label class="p-1"
            for="status_id">
            Status
            <select id="status_id"
                wire:model="status_id">
                @foreach ($statuses as $status)
                    <option value="{{ $status->id }}">{{ $status->name }}</option>
                @endforeach
            </select>
        </label>
    </div>
    @if ($errors->any())
        <div class="m-2 rounded-md bg-red-200 p-2">
            @foreach ($errors->all() as $error)
                <div class="text-red-900">{{ $error }}</div>
            @endforeach
        </div>
    @endif
    <div class="flex flex-row-reverse">
        <button class="bg-indigo-600 text-slate-50 hover:bg-indigo-700"
            wire:click="save">
            Save
        </button>
    </div>
</div>
