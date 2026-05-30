<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Fillable;
use App\Models\Category;

class Product extends Model
{
    protected $fillable = [
        'category_id', 'name', 'price', 'stock', 'image',
        'description', 'is_available', 'user_id', 'name_product', 'user'
    ];

    public function category(){
        return $this->belongsTo(Category::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }
}
