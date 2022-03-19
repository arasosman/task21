<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;

    const TODO = 'TODO';
    const DOING = 'DOING';
    const DONE = 'DONE';

    protected $fillable = ['title', 'description', 'status', 'user_id'];
}
