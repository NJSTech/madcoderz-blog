<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $avatars = auth()->user()->getMedia('profile')->first();
        return view('home', compact('avatars'));
    }
    public function store(Request $request)
    {
        $user = auth()->user();
        $user->addMedia($request->avatar)->toMediaCollection('profile');
        return redirect()->back();
    }
}
