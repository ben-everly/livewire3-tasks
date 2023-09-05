<?php

namespace App\Livewire\Concerns;

trait InteractsWithModal
{
    public function openModal(string $component, array $params = []) : void
    {
        $this->dispatch('openModal', $component, $params);
    }

    public function closeModal() : void
    {
        $this->dispatch('closeModal');
    }
}
