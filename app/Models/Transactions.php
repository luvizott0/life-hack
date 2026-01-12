<?php

namespace App\Models;

use App\Enums\TransactionTypes;
use Illuminate\Database\Eloquent\Model;

class Transactions extends Model
{
    public $fillable = [
        'user_id',
        'amount',
        'type',
        'date'
    ];

    public $casts = [
        'type' => TransactionTypes::class
    ];
}
