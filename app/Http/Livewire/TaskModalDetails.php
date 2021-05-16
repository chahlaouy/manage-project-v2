<?php

namespace App\Http\Livewire;

use Livewire\Component;

class TaskModalDetails extends Component
{
    public $task;
    public $taskClone;
    public $title;
    
    public function mount($task){
        // dd($task->id);
        $this->title = $task->title;
        $this->task = $task->toArray();
        $this->taskClone = $task;
    }

    public function hydrate(){
        dd('foo');
    }
    public function render()
    {
        return view('livewire.task-modal-details');
    }
}
