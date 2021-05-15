<?php

namespace App\Http\Livewire;

use Livewire\Component;

class TaskModalDetails extends Component
{
    public $task;
    
    public function render()
    {
        return view('livewire.task-modal-details');
    }
}
