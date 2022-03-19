<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Carbon;

/**
 * App\Models\Task
 *
 * @property int $id
 * @property string $title
 * @property string $description
 * @property int $user_id
 * @property int $status
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 *
 * @property User $assignedUser
 */
class Task extends Model
{
    use HasFactory;

    const TODO = 'TODO';
    const DOING = 'DOING';
    const DONE = 'DONE';

    protected $fillable = ['title', 'description', 'status', 'user_id'];

    public function assignedUser(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function scopeSortByStatus()
    {
        $sortPriority = [
            self::DOING => 1,
            self::TODO => 2,
            self::DONE => 3,
        ];

        return Task::all()
            ->sortBy('title')
            ->sortBy(function ($task) use ($sortPriority) {
                return $sortPriority[$task->status];
            });
    }
}
