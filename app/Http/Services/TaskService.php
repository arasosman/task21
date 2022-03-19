<?php

namespace App\Http\Services;

use App\Repositories\Contracts\TaskRepositoryContract;

class TaskService
{
    private TaskRepositoryContract $taskRepository;

    public function __construct(TaskRepositoryContract $taskRepository)
    {
        $this->taskRepository = $taskRepository;
    }
}
