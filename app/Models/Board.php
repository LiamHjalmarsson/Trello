<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Board extends Model
{
    protected $fillable = ["title", "user_id"];
    
    /** @use HasFactory<\Database\Factories\BoardFactory> */
    use HasFactory;

    public function lists(): HasMany {
        return $this->hasMany(Board::class);
    }

    public function user(): BelongsTo {
        return $this->belongsTo(User::class);
    }
}
