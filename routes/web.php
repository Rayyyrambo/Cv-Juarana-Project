<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\Admin\DasboardController;
use App\Http\Controllers\Admin\CategoriController;
use App\Http\Controllers\Admin\ProductController as AdminProductController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;


Route::get('/service',[ServiceController::class, 'index'])->name('service');
Route::get('/product', [ProductController::class, 'index'])->name('product');
Route::get('/project',[ProjectController::class,  'index'])->name('project');
Route::get('/', [HomeController::class, 'index'])->name('home');

Route::prefix('administrator')->middleware(['auth', 'verified'])->name('admin.')->group(function(){
    Route::get('dashboard',[DasboardController::class, 'index'])->name('dashboard');
    Route::resource('categories', CategoriController::class);
    Route::resource('products', AdminProductController::class);
});
// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
