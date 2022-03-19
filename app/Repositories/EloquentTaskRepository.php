<?php

namespace App\Repositories;

use App\Models\Task;
use App\Repositories\Contracts\TaskRepositoryContract;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

class EloquentTaskRepository implements TaskRepositoryContract
{
    public function getAll(): Collection
    {
        return Task::all();
    }

    public function create(array $validated): Model
    {
        return Task::query()->create($validated);
    }
}
