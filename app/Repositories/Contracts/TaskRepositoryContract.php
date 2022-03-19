<?php

namespace App\Repositories\Contracts;

use App\Models\Task;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

interface TaskRepositoryContract
{
    public function getAll(): Collection;

    public function create(array $validated): Model;
}
