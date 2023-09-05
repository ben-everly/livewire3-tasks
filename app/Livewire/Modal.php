<?php

namespace App\Livewire;

use Livewire\Component;

class Modal extends Component
{
    public $component;
    public $params;

    public $show = false;

    protected $listeners = [
        'openModal' => 'openModal',
        'closeModal' => 'closeModal',
    ];

    public function openModal($component, $params = [])
    {
        $this->component = $component;
        $this->params = $params;
        $this->show = true;
    }

    public function closeModal()
    {
        $this->show = false;
    }

    public function render()
    {
        return view('livewire.modal');
    }
}
