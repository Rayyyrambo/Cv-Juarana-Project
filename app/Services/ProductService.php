<?php

namespace App\Services;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
class ProductService
{
    /**
     * Create a new class instance.
     */
   public function createtProduct(array $data, ?UploadedFile $imageFile = null):  Product{
   
    if($imageFile){
            $imageName = time() . '_' . str_replace(' ', '_', $imageFile->getClientOriginalName());
            $imageFile->storeAs('products', $imageName, 'public');
            $data['image'] = $imageName;
            
        }

     $data['user_id']=auth()->id();
     $data['user']=auth()->user()->name; 
     return Product::create($data);
   }

   public function updateProduct(Product $product, array $data, ?UploadedFile $imageFile = null):Product{
        if($imageFile){
            if($product->image){
                Storage::disk('public')->delete('products/' .$product->image);
            }
            $imageName = time() . '_' . str_replace(' ', '_', $imageFile->getClientOriginalName());
            $imageFile->storeAs('products', $imageName, 'public');
            $data['image'] =($imageFile);
        }
         $product->update($data);
        
        return $product;
   }

   public function getFilterProducts(array $filters, int $perPage = 10){
    $search = $filters['search'] ?? null;
    $categoryFilter = $filters['category_name'] ?? null;

    return Product::with('category') // Eager loading relasi category
        ->when($search, function ($query, $search) {
            return $query->where('name_product', 'like', '%' . $search . '%');
        })
        ->when($categoryFilter, function ($query, $categoryFilter) {
            return $query->where('category_name', $categoryFilter);
        })
        ->latest('created_at')
        ->paginate(10) // Otomatis pagination 10 data per halaman
        ->withQueryString();
   }

   public function getAllCategories(){
    return Category::all();
   }

   public function getTotalProductsCount():int{
    return Product::count();
   }
}
