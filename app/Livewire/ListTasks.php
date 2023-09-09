<?php

namespace App\Livewire;

use App\Livewire\Concerns\InteractsWithModal;
use App\Models\Task;
use Illuminate\Database\Eloquent\Collection;
use Livewire\Component;

class ListTasks extends Component
{
    use InteractsWithModal;

    protected $listeners = [
        Task::class . '.created' => '$refresh',
        Task::class . '.updated' => '$refresh',
    ];

    public int $team_id;
    /** @var Collection<int, Task> */
    public Collection $tasks;

    public function mount()
    {
        $this->tasks = Task::where('team_id', $this->team_id)
            ->orderBy('id')
            ->get();
    }

    public function createTask()
    {
        $this->openModal('edit-task', [
            'team_id' => $this->team_id,
        ]);
    }

    public function editTask(Task $task)
    {
        $this->openModal('edit-task', $task->toArray());
    }

    public function render()
    {
        return view('livewire.list-tasks');
    }
}
