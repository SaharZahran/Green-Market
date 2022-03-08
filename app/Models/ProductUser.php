<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductUser extends Model
{
    use HasFactory;
    protected $table = "role_user";
    protected $fillable = [
        "user_id",
        "product_id",
        'quantity',
        'total_price',
    ];
}
