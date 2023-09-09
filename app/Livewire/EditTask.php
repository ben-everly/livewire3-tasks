<?php

namespace App\Livewire;

use App\Livewire\Concerns\InteractsWithModal;
use App\Models\Task;
use App\Models\Team;
use Livewire\Component;

class EditTask extends Component
{
    use InteractsWithModal;

    public ?int $task_id;
    public int $team_id;
    public string $description = '';
    public int $status_id;

    protected $rules = [
        'description' => 'required',
        'status_id' => 'required|exists:statuses,id',
    ];

    public function mount(array $params)
    {
        $this->task_id = $params['id'] ?? null;
        $this->team_id = $params['team_id'] ?? auth()->user()->teams->first()->id;
        $this->status_id = $this->team->statuses->first()->id;
        $this->fill($params);
    }

    public function getTeamProperty()
    {
        return Team::with('statuses')->find($this->team_id);
    }

    public function save()
    {
        $this->validate();
        Task::updateOrCreate([
            'id' => $this->task_id,
        ], [
            'team_id' => $this->team_id,
            'description' => $this->description,
            'status_id' => $this->status_id,
        ]);
        $this->closeModal();
    }

    public function render()
    {
        return view('livewire.edit-task', [
            'teams' => auth()->user()->teams,
            'statuses' => $this->team->statuses,
        ]);
    }
}
