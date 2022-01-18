<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductUser extends Model
{
    use HasFactory;
    protected $fillable = [
        'user-id',
        'product-id',
        'quantity',
        'total-price'
    ];
}
