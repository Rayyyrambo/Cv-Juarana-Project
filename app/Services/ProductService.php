<?php

namespace App\Services;
use App\Models\Product;
class ProductService
{
    /**
     * Create a new class instance.
     */
   public function createtProduct(array $data, ?UploadedFile $imageFile = null):  Product{
    return Product::create([
        'category_id'=>$data['category_id'],
        // 'user'=>'required|string|max:255',
        'name_product'=>$data['name_product'],
        'description'=>$data['description'],
        'stock'=>$data['stock'],
        'price'=>$data['price'],
        'image'=>$data['image'],

        



    ]);
    if($imageFile){
            $imageName = time() . '_' . str_replace(' ', '_', $file->getClientOriginalName());
            $imageFile->storeAs('products', $imageName, 'public');
            $data['image'] = $imageName;
            
        }

     $data['user_id']=auth()->id();
     $data['user']=auth()->user()->name; 
     return Product::create($data);
   }
}
