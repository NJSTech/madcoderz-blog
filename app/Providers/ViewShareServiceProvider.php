<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\Category;
use App\Models\Tag;
use App\Models\Post;
use View;
use Auth;

class ViewShareServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $categories =Category::all();
        View::share('categories', $categories);
        $tags =Tag::all();
        View::share('tags',$tags);
        $posts =Post::paginate(5);
        View::share('posts',$posts);
    }
}
