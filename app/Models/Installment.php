<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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
    public function loan()
    {
        return $this->belongsTo(Loan::class, 'loan_id');
    }
}
