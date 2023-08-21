<?php

namespace App\Livewire;

use App\Models\Status;
use App\Models\Task;
use Illuminate\Database\Eloquent\Collection;
use Livewire\Component;

class ListTasks extends Component
{
    /** @var Collection<int, Task> */
    public Collection $tasks;

    public function mount()
    {
        $this->tasks = Task::orderBy('id')->get();
    }

    public function rules(): array
    {
        return [
            'tasks.*.status_id' => ['required', 'in:'.$this->statuses->pluck('id')->implode(',')],
        ];
    }

    public function updatedTasks(): void
    {
        $this->validate();
        $this->tasks->each->save();
        $this->tasks->each->refresh();
    }

    public function getStatusesProperty(): Collection
    {
        return Status::all();
    }

    public function render()
    {
        return view('livewire.list-tasks', [
            'statuses' => $this->statuses,
        ]);
    }
}
