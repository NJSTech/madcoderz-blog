<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use App\Models\Category;
use App\Observers\CategoryObserver;
use App\Observers\PostObserver;
use App\Models\Post;
use App\Observers\UserObserver;
use App\Models\User;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);
        Category::observe(CategoryObserver::class);
        Post::observe(PostObserver::class);
        User::observe(UserObserver::class);
    }
}
