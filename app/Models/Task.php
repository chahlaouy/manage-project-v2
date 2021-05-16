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
    
    public function user(){
        return $this->belongsTo(User::class);
    }
    public function project(){

        return $this->belongsTo(Project::class);
    }

    public function activity(){

        return $this->morphMany(Activity::class, 'subject');
    }

    public function complete(){
        $this->update([
            'in_progress' => false,
            'incompleted' => false,
            'completed' => true
        ]);
        $this->recordActivity('completed_task');
    }
    public function incomplete(){
        $this->update([
            'completed' => false,
            'in_progress' => false,
            'incompleted' => true

        ]);

        $this->recordActivity('incompleted_task');
    }
    public function inProgress(){
        $this->update([
            'completed' => false,
            'incompleted' => false,
            'in_progress' => true

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
