<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;

class ProjectModal extends Component
{
    use WithFileUploads;

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
        
        auth()->user()->projects()->create([
            'title' => $this->title,
            'description' => $this->description,
            'general_notes' => $this->general_notes,
            'files' => $this->uploadFiles(), 
            'images' => $this->uploadImages(),
            'team_id' => auth()->user()->currentTeam->id 
        ]);
    }

    protected function uploadImages(){

        $images = [];
        if($this->images){
            $path = "/" . "{$this->title}" . "/images/";
            foreach ($this->images as $image) {
                $name= time() . '.' . $image->getClientOriginalName();
                array_push($images, "$path" . '/' ."$name");
                $image->storeAs($path, $name, 'uploads'); 
            }
        }
        return $images;
    }
    protected function uploadFiles(){

        $files = [];

        if($this->files){
            $path = "/" . "{$this->title}" . "/files/";
            foreach ($this->files as $file) {
                $name= time() . '.' . $file->getClientOriginalName();
                array_push($files, "$path" . '/' ."$name");
                $file->storeAs($path, $name, 'uploads'); 
            }
        }
        return $files;
    }
    public function render()
    {
        return view('livewire.project-modal');
    }
}
