<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Task extends Model
{
    protected $fillable = ["title", "user_id", "list_id"];

    /** @use HasFactory<\Database\Factories\TaskFactory> */
    use HasFactory;

    public function list(): BelongsTo {
        return $this->belongsTo(TaskList::class);
    }
    
    public function user(): BelongsTo {
        return $this->belongsTo(User::class);
    }
}
