<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Brian2694\Toastr\Facades\Toastr;

class FavouriteController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:web');
    }
    public function store(Post $post)
    {
        $user = Auth::user();
        $isFavourite = $user->favourite_posts()->where('post_id', $post->id)->count();
        if ($isFavourite == 0) {
            $user->favourite_posts()->attach($post);
            Toastr::success('Post successfully added form your favourite list:', 'success');
            return redirect()->back();
        } else {
            $user->favourite_posts()->detach($post);
            Toastr::success('Post successfully removed form your favourite list:', 'success');
            return redirect()->back();
        }
    }
}
