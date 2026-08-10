<?php

namespace App\Http\Controllers\Admin;
use App\Http\Requests\Product\StoreProductRequest;
use App\Http\Requests\Product\UpdateProductRequest;
use App\Services\ProductService;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $search = $request->input('search');
        $golongan = Category::all();
        $categoryFilter = $request->input('category_id');
        $totalProduct = Product::count();
        

        if($search){
            $products = Product::where('name_product', 'like', '%' . $search . '%')
            ->latest('created_at')->get();
        }elseif($categoryFilter){
            $products = Product::where('category_id', $categoryFilter)
            ->latest('created_at')->get();
        }
        else{
            $products = Product::latest('created_at')->get();
        }
        return view('pages.admin.products.index', compact('products', 'totalProduct', 'search', 'golongan', 'categoryFilter'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();
        return view ('pages.admin.products.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */

    public function __construct(
        protected ProductService $productService
    ){}
    public function store(StoreProductRequest $request)
    {
        try {
            $products = $this->productService->createtProduct($request->validated(),$request->file('image'));
            return to_route('admin.products.index')->with('success', 'Produk berhasil di perbarui');
        } catch (\Throwable $th) {
            \Log::error('Gagal tambah produk: ' . $th->getMessage());
            return back()->with('error', $th->getMessage());
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $products = Product::findOrFail($id);
        $categories = Category::all();
        return view('pages.admin.products.edit', compact('products', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProductRequest $request, Product $product)
    {
        
        $this->productService->updateProduct($product, $request->validated(), $request->file('image'));
        return to_route('admin.products.index')->with('success', 'Produk berhasil di perbarui');
       
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try {
            $products = Product::findOrFail($id);
            $products->delete();
            return to_route('admin.products.index')->with('success', 'Produk berhasil di hapus');
        } catch (\Throwable $th) {
            return back()->with('error', $th->getMessage());
        }
    }
}
