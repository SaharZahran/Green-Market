<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Category;
use App\Models\Product;

class SubCategory extends Model
{
    use HasFactory;
    protected $fillable = [
        'subcategory_name',
        'subcategory_description',
        'subcategory_image',
        'category_id'
    ];

    public function category(){
        return $this->belongsTo(Category::class);
    }
    public function product(){
        return $this->hasMany(Product::class);
    }
}
