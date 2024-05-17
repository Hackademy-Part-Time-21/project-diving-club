<?php

namespace App\Providers;

use App\Models\Category;
use App\Models\Tag;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\view;
use Illuminate\Support\ServiceProvider;

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
        
        if (Schema::hasTable('categories')) {
            $categories = Category::all();
            view::share(['categories' => $categories]);
        }

        if (Schema::hasTable('tags')) {
            $tags = Tag::all();
            view::share(['tags' => $tags]);
        }
    }
}
