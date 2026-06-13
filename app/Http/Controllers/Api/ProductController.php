<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Product;

class ProductController extends Controller
{
    public function index(){
        $product = Product::latest()->get();
        $data = $product->map(function($item){
            return [
                'id' => $item->id,
                'name_product' => $item->name_product,
                'description'=> $item -> description,
                'stock' => $item -> stock,
                'price' => (float)$item -> price,
                'image' => env('APP_URL'). Storage::url('products/'. $item->image),
                'category' => [
                    'id' => $item->category_id,
                    'name' => $item->category->name,
                ] 
            ];
        });
        return response()->json($data);
    }
}
