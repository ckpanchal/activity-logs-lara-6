<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;

class Task extends Model
{
    use LogsActivity;

    protected $fillable = [
    	'task_name', 'task_detail', 'is_completed' 
    ];

    protected static $logAttributes = ['task_name', 'task_detail', 'is_completed'];
}