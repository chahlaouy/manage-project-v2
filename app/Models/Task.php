<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;

    protected $guarded= [];

    protected $casts = [
        'images' => 'array',
        'files' => 'array',
    ];
    
    public function project(){

        return $this->belongsTo(Project::class);
    }

    public function activity(){

        return $this->morphMany(Activity::class, 'subject');
    }

    public function complete(){
        $this->update([
            'completed' => true 
        ]);
        $this->recordActivity('completed_task');
    }
    public function incomplete(){
        $this->update([
            'completed' => false 
        ]);

        $this->recordActivity('incompleted_task');
    }

    public function recordActivity($type){
        return $this->activity()->create([
            'description' => $type,
            'project_id' => $this->project->id,
            'user_id' => auth()->id()
        ]);
    }
}
