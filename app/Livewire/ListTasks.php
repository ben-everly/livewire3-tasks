<?php

namespace App\Livewire;

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

    public function render()
    {
        return view('livewire.list-tasks');
    }
}
