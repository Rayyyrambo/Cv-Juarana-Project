<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\Category;
use App\Models\Product;
use App\Models\Project;
use App\Models\Message;
use Illuminate\Support\Facades\View;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        View::share('categories', Category::all());
        View::share('products', Product::all());
        View::share('golongan', Category::all());
        View::share('totalProduct', Product::count());
        View::share('product', Product::first());
        View::share('totalProject', Project::count());
        View::share('totalMessage', Message::count());

        // View::composer('*', function ($view) {
        //     $view->with('golongan', Category::all());
            
           
        // });

    }
}
