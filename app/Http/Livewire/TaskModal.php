<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;

class TaskModal extends Component
{
    use WithFileUploads;

    

    public $project;
    public $images = [];
    public $description;
    public $general_notes;
    public $files;
    public $title;

    protected $rules=[
        'title' => 'required',
        'images.*' => 'sometimes|required|image',
        'files.*' => 'sometimes|required|file',
        'description' => 'required',
        'general_notes' => 'sometimes|required|min:20',
    ];
    public function submitForm()
    {
        $this->validate();
        
        $task = $this->project->tasks()->create([
            'title' => $this->title,
            'description' => $this->description,
            'general_notes' => $this->general_notes,
            'user_id' => auth()->id(),
            'files' => $this->uploadFiles(), 
            'images' => $this->uploadImages(),
        ]);
        
    }

    protected function uploadImages(){

        $images = [];
        if($this->images){
            $path = "/" . "images/" . "{$this->project->title}" . "/" ."{$this->title}";
            foreach ($this->images as $image) {
                $name= time() . '.' . $image->getClientOriginalName();
                array_push($images, $name);
                $image->storeAs($path, $name, 'uploads'); 
            }
        }
        return $images;
    }
    protected function uploadFiles(){

        $files = [];

        if($this->files){
            $path = "/" . "files/" . "{$this->project->title}" . "/" . "{$this->title}";
            foreach ($this->files as $file) {
                $name= time() . '.' . $file->getClientOriginalName();
                array_push($files, $name);
                $file->storeAs($path, $name, 'uploads'); 
            }
        }
        return $files;
    }
    public function render()
    {
        return view('livewire.task-modal');
    }
}
