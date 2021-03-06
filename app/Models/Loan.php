<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Loan extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'cooperative_id',
        'installment_code',
        'position',
        'nik',
        'type_of_work',
        'big_loan',
        'installment_principal',
        'monthly_income',
        'interest_per_year',
        'interest_per_month',
        'time_period',
        'installment',
    ];

    // RELATIONSHIPS

    // belongsTo - one to one relationship with User
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    // belongsTo - one to one relationship with LoanType
    public function cooperative(): BelongsTo
    {
        return $this->belongsTo(Cooperative::class, 'cooperative_id');
    }
}
