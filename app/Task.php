<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $fillable = ["title", "todo_list_id", "completed_at"];

    public function todoList() {
        return $this->belongsTo(Task::class);
    }

    public function getCompletedAttribute() {
        return !is_null($this->completed_at);
    }
}
