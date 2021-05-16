<?php

namespace App\Http\Livewire;

use App\Models\Task;
use Livewire\Component;

class Tasks extends Component
{
    public $project;

    public $inCompletedTasks;
    public $inProgressTasks;
    public $completedTasks;

    public $task;

    public $description = '';
    public $general_notes = '';
    public $title = '';

    public $showTaskModalDetails = false;
    
    protected $listeners = ['TaskAdded' => 'taskAdded'];


    public function showTaskModalDetails($id){   
        $this->task = Task::where('id', $id)->firstOrFail();
        $this->description = $this->task->description;
        $this->general_notes = $this->task->general_notes;
        $this->title = $this->task->title;
        $this->showTaskModalDetails = true;
    }
    
    public function inCompleteTask(){
        
        $this->task->incomplete();

    }

    public function completeTask(){
        
        $this->task->complete();

    }

    public function inProgressTask(){
        
        $this->task->inProgress();

    }

    public function taskAdded(){
        
    }

    public function render()
    {
        
        $this->inCompletedTasks = $this
                                    ->project
                                        ->tasks()
                                            ->where('incompleted', true)
                                                ->latest()
                                                    ->take(3)
                                                        ->get();
        $this->completedTasks = $this
                                    ->project
                                        ->tasks()
                                            ->where('completed', true)
                                                ->latest()
                                                    ->take(3)
                                                        ->get();
        $this->inProgressTasks = $this
                                    ->project
                                        ->tasks()
                                            ->where('in_progress', true)
                                                ->latest()
                                                    ->take(3)
                                                        ->get();
        return view('livewire.tasks');
    }
}
