<?php

namespace App\Observers;

use App\Models\Task;

class TaskObserver
{
    public function creating(Task $task)
    {
        if ($task->user_id == null) {
            $task->user_id = auth()->id();
        }
    }
}
