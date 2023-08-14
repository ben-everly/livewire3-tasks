<?php

namespace App\Livewire;

use App\Models\Task;
use Livewire\Component;

class ListTasks extends Component
{
    public function render()
    {
        return view('livewire.list-tasks', [
            'tasks' => Task::all(),
        ]);
    }
}
