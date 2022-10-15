<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shipping extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'customer_id',
        'address',
        'phone',
        'email',
    ];

    protected $hidden = [
        'updated_at',
        'deleted_at',
    ];
}
