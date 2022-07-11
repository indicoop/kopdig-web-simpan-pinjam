<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Installment extends Model
{
    use HasFactory;

    protected $fillable = [
        'loan_id',
        'pay_date',
        'installment_amount',
        'installment_to',
        'total_installment',
        'remaining_installments',
    ];

    // RELATIONSHIPS

    // hasMany - one to many relationship with loan
    public function loan(): BelongsTo
    {
        return $this->belongsTo(Loan::class, 'loan_id');
    }
}
