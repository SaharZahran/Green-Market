<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'price',
        'image-one',
        'image-two',
        'image-three',
        'image-four',
        'store-id',
        'subcategory-id'
     ];

    public function store(){
        return $this->belongsTo(Store::class);
    }

    public function users()
    {
        return $this->belongsToMany(User::class);
    }

}
