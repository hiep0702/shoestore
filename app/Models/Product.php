<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'category_id',
        'brand_id',
        'desc',
        'content',
        'price',
        'image',
        'status',
    ];

    protected $hidden = [
        'updated_at',
        'deleted_at',
    ];
}
