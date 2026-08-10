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
        View::share('categories', Category::with('products')->get());
        View::share('products', Product::all());
        View::share('golongan', Category::with('products')->get());
        View::share('totalProduct', Product::count());
        View::share('product', Product::first());
        View::share('totalProject', Project::count());
        View::share('totalMessage', Message::count());
        View::share('totalEmail', Message::distinct('email')->count('email'));
        View::share('totalUser', Message::count('user'));

        // View::composer('*', function ($view) {
        //     $view->with('golongan', Category::all());
            
           
        // });

    }
}
