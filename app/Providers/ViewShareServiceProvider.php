<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\Category;
use App\Models\Tag;
use App\Models\Post;
use View;
use App\Models\Subscriber;

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
        $categories = Category::all();
        View::share('categories', $categories);
        $tags = Tag::all();
        View::share('tags', $tags);
        $populars = Post::popular()->get();
        View::share('populars', $populars);
        $newposts = Post::new()->get();
        View::share('newposts', $newposts);
        $newsubscribers = Subscriber::new()->get();
        View::share('newsubscribers', $newsubscribers);
    }
}
