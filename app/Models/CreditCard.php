<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CreditCard extends Model
{
    public $fillable = [
        'user_id',
        'name',
        'limit',
        'balance',
        'closing_day',
        'due_date',
        'account_id'
    ];

    public $casts = [
        'closing_day' => 'date',
        'due_date' => 'date'
    ];
}
