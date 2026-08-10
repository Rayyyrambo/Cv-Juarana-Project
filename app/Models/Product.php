<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\Category;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [
        
        'category_id', 'price', 'stock', 'image',
        'description', 'is_available', 'user_id', 'name_product', 'user'
    ];

    public function category(){
        return $this->belongsTo(Category::class);
    }

    public function creator(){
        return $this->belongsTo(User::class);
    }
}
