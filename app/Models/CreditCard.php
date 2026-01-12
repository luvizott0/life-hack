<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CreditCard extends Model
{
    public $fillable = [
        'user_id',
        'name',
        'limit',
        'closing_day',
        'due_day',
        'account_id'
    ];
}
