<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Organic extends Model
{
    use HasFactory;
    protected $fillable = [
        'product_name',
        'product_seller',
        'product_price',
        'product_quantity',
        'product_image_one',
        'product_image_two',
        'product_image_three',
        'product_image_four',
        'product_desc',
        'product_type'
    ];
}
