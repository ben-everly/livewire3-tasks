<?php

namespace App\Livewire;

use App\Livewire\Concerns\InteractsWithModal;
use Livewire\Component;

class CreateTask extends Component
{
    use InteractsWithModal;

    public function render()
    {
        return view('livewire.create-task');
    }
}
