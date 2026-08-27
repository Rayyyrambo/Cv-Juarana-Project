<?php

namespace App\Http\Controllers\Admin;
use App\Http\Requests\Product\StoreProductRequest;
use App\Http\Requests\Product\UpdateProductRequest;
use App\Http\Requests\Product\GetProductRequest;
use App\Services\ProductService;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;

class ProductController extends Controller
{   
     public function __construct(
        protected ProductService $productService
    ){}
    /**
     * Display a listing of the resource.
     */
    public function index(GetProductRequest $request)
    {
        $search = $request->input('search');
        $golongan = $this->productService->getAllCategories();
        $categoryFilter = $request->input('category_name');
        $totalProduct = $this->productService->getTotalProductsCount();
        $products = $this->productService->getFilterProducts($request->validated());
        return view('pages.admin.products.index', compact('products', 'totalProduct', 'search', 'golongan', 'categoryFilter'));
    }

    //Show the form for creating a new resource.
    public function create()
    {
        $categories = Category::all();
        return view ('pages.admin.products.create', compact('categories'));
    }
    
   //Store a newly created resource in storage.
    public function store(StoreProductRequest $request)
    {
        try {
            $products = $this->productService->createProduct($request->validated(),$request->file('image'));
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

    //Show the form for editing the specified resource.
    public function edit(string $id)
    {
        $products = Product::findOrFail($id);
        $categories = Category::all();
        return view('pages.admin.products.edit', compact('products', 'categories'));
    }

    //update
    public function update(UpdateProductRequest $request, Product $product)
    {       
        $this->productService->updateProduct($product, $request->validated(), $request->file('image'));
        return to_route('admin.products.index')->with('success', 'Produk berhasil di perbarui');      
    }

    //delete
    public function destroy(string $id)
    {
        try {
            $products = Product::findOrFail($id);

            $this->productService->deleteProduct($product);
            return to_route('admin.products.index')->with('success', 'Produk berhasil di hapus');
        } catch (\Throwable $th) {
            return back()->with('error', $th->getMessage());
        }
    }
}
