<?php

namespace App\Models;

use App\Enums\TransactionStatuses;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Transactions extends Model
{
    public $fillable = [
        'user_id',
        'description',
        'amount',
        'date',
        'status',
        'category_id',
        'account_id',
        'credit_card_id',
        'installment_id',
    ];

    public $casts = [
        'date' => 'datetime',
        'status' => TransactionStatuses::class
    ];

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

    public function account(): BelongsTo
    {
        return $this->belongsTo(Account::class);
    }

    public function creditCard(): BelongsTo
    {
        return $this->belongsTo(CreditCard::class);
    }

    public function installment(): BelongsTo
    {
        return $this->belongsTo(Installment::class);
    }
}
