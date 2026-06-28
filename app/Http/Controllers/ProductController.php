<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
class ProductController extends Controller
{
    public function index(Request $request){

        $categories = Category::all();
        $selecdCategory = $request->query('category');
        $product = Product::first();

        if($selecdCategory){
            $products = Product::whereHas('category', function($query) use ($selecdCategory){
                $query->where('name', $selecdCategory);
            })->latest()->get();
        }else{
            $products = Product::latest()->get();
        }
        return view('pages.publik.product', compact('products', 'categories', 'product'));
    }
}
