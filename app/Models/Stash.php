<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Stash extends Model
{
    use HasFactory;

    public $table = 'stashs';

    protected $fillable = [
        'user_id',
        'cooperative_id',
        'beginning_balance'
    ];

    // RELATIONSHIPS

    // belongsTo - one to one relationship with User

    public function user(): BelongsTo
    {

        return $this->belongsTo(User::class, 'user_id');

    }

    public function cooperative(): BelongsTo
    {

        return $this->belongsTo(Cooperative::class, 'cooperative_id');

    }
}
