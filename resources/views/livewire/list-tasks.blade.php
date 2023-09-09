<div class="min-w-full align-middle">
    <table class="min-w-full">
        <thead>
            <tr>
                <th class="p-2"
                    scope="col">
                    Id
                    </td>
                <th class="p-2"
                    scope="col">
                    Description
                </th>
                <th class="p-2"
                    scope="col">
                    Status
                </th>
                <th class="flex flex-row-reverse p-2"
                    scope="col">
                    <button class="rounded-full bg-indigo-600 p-1 text-slate-50 hover:bg-indigo-700"
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
                    <td class="whitespace-nowrap p-2 font-medium">
                        {{ $task->team->abbreviation }}-{{ $task->number }}
                    </td>
                    <td class="p-2 font-medium">
                        {{ $task->description }}
                    </td>
                    <td class="whitespace-nowrap p-2 font-medium">
                        <livewire:task-status-select wire:key="task-status-{{ $task->id }}"
                            :task="$task" />
                    </td>
                    <td class="relative whitespace-nowrap p-2 text-right font-medium">
                        <a class="text-indigo-600 hover:text-indigo-900"
                            wire:click="editTask({{ $task }})">
                            Edit
                            <span class="sr-only">{{ $task->description }}</span>
                        </a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
