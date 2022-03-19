<?php

namespace App\Http\Services;

use App\Repositories\Contracts\TaskRepositoryContract;
use Illuminate\Database\Eloquent\Collection;

class TaskService
{
    private TaskRepositoryContract $taskRepository;

    public function __construct(TaskRepositoryContract $taskRepository)
    {
        $this->taskRepository = $taskRepository;
    }

    public function getAll(): Collection
    {
        return $this->taskRepository->getAll();
    }

    public function create(array $validated)
    {
        return $this->taskRepository->create($validated);
    }
}
