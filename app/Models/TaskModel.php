<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TaskModel extends Model
{
    protected $table = "tasks";
    // public $timestamps = false;
    protected $fillable = [
        'task_name',
        'done'
    ];
}
