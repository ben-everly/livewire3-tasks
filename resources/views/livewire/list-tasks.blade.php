<div class="min-w-full align-middle">
    <table class="min-w-full">
        <thead>
            <tr>
                <th class="p-1"
                    scope="col">
                    Id
                    </td>
                <th class="p-1"
                    scope="col">
                    Description
                </th>
                <th class="p-1"
                    scope="col">
                    Status
                </th>
                <th class="flex flex-row-reverse p-1"
                    scope="col">
                    <button
                        class="bg-slate-100 p-1 text-slate-600 hover:bg-slate-200 dark:bg-slate-800 dark:text-slate-300 dark:hover:bg-slate-700"
                        type="button"
                        wire:click="createTask">
                        <x-icons.plus-circle />
                    </button>
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach ($tasks as $index => $task)
                <tr wire:key="task-row-{{ $task->id }}">
                    <td class="whitespace-nowrap p-1 font-medium">
                        {{ $task->team->abbreviation }}-{{ $task->number }}
                    </td>
                    <td class="p-1 font-medium">
                        {{ $task->description }}
                    </td>
                    <td class="whitespace-nowrap p-1 font-medium">
                        <livewire:task-status-select wire:key="task-status-{{ $task->id }}"
                            :task="$task" />
                    </td>
                    <td class="relative whitespace-nowrap p-1 text-right font-medium">
                        <button
                            class="bg-slate-100 p-1 text-slate-700 hover:bg-slate-200 dark:bg-slate-800 dark:text-slate-300 dark:hover:bg-slate-700"
                            wire:click="editTask({{ $task }})">
                            <x-icons.pencil class="h-4 w-4" />
                            <span class="sr-only">{{ $task->description }}</span>
                        </button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
