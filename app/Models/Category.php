<?php

namespace App\Models;

use App\Enums\Categories;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    /** @use HasFactory<\Database\Factories\CategoryFactory> */
    use HasFactory;

    public $fillable = [
        'name',
        'type'
    ];

    public $casts = [
        'type' => Categories::class
    ];
}
