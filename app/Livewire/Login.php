<?php

namespace App\Livewire;

use Livewire\Component;

class Login extends Component
{
    public string $email;
    public string $password;

    public function login()
    {
        $this->validate([
            'email' => ['required', 'email'],
            'password' => ['required', 'min:8']
        ]);

        if (auth()->attempt(['email' => $this->email, 'password' => $this->password])) {
            return redirect()->route('team.tasks', ['team_id' => 1]);
        }

        $this->addError('email', 'These credentials do not match our records.');
    }

    public function render()
    {
        return view('livewire.login')->layout('components.layouts.guest');
    }
}
