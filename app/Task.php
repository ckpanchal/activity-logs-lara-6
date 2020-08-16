<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $fillable = [
    	'task_name', 'task_detail', 'is_completed' 
    ];

    protected static $logAttributes = ['task_name', 'task_detail', 'is_completed'];
}