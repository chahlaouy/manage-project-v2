<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Arr;

class Project extends Model
{
    use HasFactory;

    protected $guarded = [];


    protected $casts = [
        'images' => 'array',
        'files' => 'array',
    ];
    
    public $old = [];

    public function team(){

        return $this->belongsTo(Team::class);
    }
    public function owner(){

        return $this->belongsTo(User::class, 'owner_id');
    }

    public function tasks(){

        return $this->hasMany(Task::class);
    }

    public function addTask($description){

        return $this->tasks()->create(['description' => $description]);
    }

    public function path(){

        return '/projects/' . $this->id;
    }

    public function activities(){

        return $this->hasMany(Activity::class)->latest('updated_at');
    }

    public function recordActivity($type){
        $before = Arr::except($this->old, ['updated_at', 'created_at', 'images', 'files']);
        $after = Arr::except($this->attributesToArray(), ['updated_at', 'created_at', 'images', 'files']);
        return $this->activities()->create([
            'description' => $type,
            'changes' => [
                'before' => array_diff($before, $after),
                'after' => array_diff($after, $before)
            ],
            'user_id' => auth()->id()
        ]);
    }
}
