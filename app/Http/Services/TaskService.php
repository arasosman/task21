<?php

namespace App\Http\Services;

use App\Models\Task;
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

    public function update(Task $task, array $validated): Task
    {
        $updated = $this->taskRepository->update($task, $validated);
        abort_unless($updated, 500, 'Task not updated');
        return $task->refresh();
    }

    public function delete(Task $task)
    {
        $deleted = $this->taskRepository->delete($task);
        abort_unless($deleted, 500, 'Task not updated');
    }
}
