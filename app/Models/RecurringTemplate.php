<?php

namespace App\Models;

use App\Enums\FrequencyTypes;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class RecurringTemplate extends Model
{
    public $fillable = [
        'user_id',
        'description',
        'amount',
        'category_id',
        'frequency',
        'day_of_month'
    ];

    public $casts = [
        'frequency' => FrequencyTypes::class
    ];

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
