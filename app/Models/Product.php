<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Seller;
use App\Models\User;
use App\Models\SubCategory;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [
        'product_name',
        'product_description',
        'product_price',
        'product_image',
        'subcategory_id',
        'store_id'
    ];
    public function store(){
        return $this->belongsTo(Seller::class);
    }
    public function subcategory(){
        return $this->belongsTo(SubCategory::class);
    }
    public function user()
    {
        return $this->belongsToMany(User::class);
    }
}
