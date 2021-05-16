<?php

namespace App\Http\Livewire;

use App\Models\Task;
use Livewire\Component;
use Livewire\WithFileUploads;

class Tasks extends Component
{
    use WithFileUploads;
    
    public $project;

    public $inCompletedTasks;
    public $inProgressTasks;
    public $completedTasks;

    public $task;

    public $description = '';
    public $general_notes = '';
    public $title = '';
    public $images = [];
    public $files = [];


    public $showTaskModalDetails = false;
    
    protected $listeners = ['TaskAdded' => 'taskAdded'];

    protected $rules=[
        'title' => 'required',
        'images.*' => 'sometimes|required|image',
        'files.*' => 'sometimes|required|file',
        'description' => 'required',
        'general_notes' => 'sometimes|required|min:20',
    ];
    public function updateTask()
    {
        $this->validate();
        
        $this->project->tasks()->where('id', $this->task->id)->firstOrFail()->update([
            'title' => $this->title,
            'description' => $this->description,
            'general_notes' => $this->general_notes,
            'user_id' => auth()->id(),
            'files' => $this->uploadFiles(), 
            'images' => $this->uploadImages(),
        ]);
        
    }

    protected function uploadImages(){

        $images = $this->task->images;
        if($this->images){
            $path = "/" . "{$this->project->title}" . "/images/" ."{$this->title}";
            foreach ($this->images as $image) {
                $name= time() . '.' . $image->getClientOriginalName();
                array_push($images, "$path" . '/' ."$name");
                $image->storeAs($path, $name, 'uploads'); 
            }
        }
        return $images;
    }
    protected function uploadFiles(){

        $files = $this->task->images;

        if($this->files){
            $path = "/" . "{$this->project->title}" . "/files/" ."{$this->title}";
            foreach ($this->files as $file) {
                $name= time() . '.' . $file->getClientOriginalName();
                array_push($files, "$path" . '/' ."$name");
                $file->storeAs($path, $name, 'uploads'); 
            }
        }
        return $files;
    }

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
