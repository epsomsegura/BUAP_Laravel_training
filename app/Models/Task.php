<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'start_at',
        'end_at',
        'status'
    ];

    public function users()
    {
        return $this->belongsToMany(
            User::class,
            'user__task',
            'task_id',
            'user_id'
        );
    }
}
