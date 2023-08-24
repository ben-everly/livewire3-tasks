<?php

namespace App\Livewire;

use App\Models\Status;
use App\Models\Task;
use Illuminate\Database\Eloquent\Collection;
use Livewire\Component;

/**
 * @property-read Collection $statuses
 */
class TaskStatusSelect extends Component
{
    public int $id;
    public int $status_id;

    public function rules(): array
    {
        return [
            'status_id' => ['required', 'in:'.$this->statuses->pluck('id')->implode(',')],
        ];
    }

    public function mount(Task $task)
    {
        $this->fill($task);
    }

    public function getStatusesProperty(): Collection
    {
        return Status::all();
    }

    public function updatedStatusId()
    {
        Task::where('id', $this->id)
            ->update(['status_id' => $this->status_id]);
    }

    public function render()
    {
        return view('livewire.task-status-select', [
            'statuses' => $this->statuses,
            'status' => $this->statuses->find($this->status_id),
        ]);
    }
}
