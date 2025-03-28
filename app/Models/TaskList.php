<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class TaskList extends Model
{
    protected $fillable = ["title", "user_id", "boarder_id"];

    /** @use HasFactory<\Database\Factories\TaskListFactory> */
    use HasFactory;

    public function board(): BelongsTo {
        return $this->belongsTo(Board::class);
    }

    public function tasks(): HasMany {
        return $this->hasMany(Task::class);
    }

    public function user(): BelongsTo {
        return $this->belongsTo(User::class);
    }
}
