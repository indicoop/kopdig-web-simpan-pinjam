<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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
        'monthly_income',
        'interest_per_year',
        'interest_per_month',
        'time_period',
        'installment',
    ];

    // RELATIONSHIPS

    // belongsTo - one to one relationship with User
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // belongsTo - one to one relationship with LoanType
    public function loanType()
    {
        return $this->belongsTo(LoanType::class, 'loan_type_id');
    }
}
