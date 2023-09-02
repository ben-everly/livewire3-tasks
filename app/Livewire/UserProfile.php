<?php

namespace App\Livewire;

use Livewire\Component;

class UserProfile extends Component
{
    public string $name;
    public string $email;
    public bool $dark_mode;

    protected $rules = [
        'name' => 'required|min:3',
        'email' => 'required|email',
        'dark_mode' => 'required|boolean',
    ];

    public function mount()
    {
        $this->name = auth()->user()->name;
        $this->email = auth()->user()->email;
        $this->dark_mode = auth()->user()->dark_mode;
    }

    public function save()
    {
        $this->validate();
        auth()->user()->update([
            'name' => $this->name,
            'email' => $this->email,
            'dark_mode' => $this->dark_mode,
        ]);
        redirect()->route('profile');
    }

    public function render()
    {
        return view('livewire.user-profile');
    }
}
