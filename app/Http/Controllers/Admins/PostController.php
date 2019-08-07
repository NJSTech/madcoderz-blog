<?php

namespace App\Http\Controllers\Admins;

use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Http\Requests\PostCreateRequest;
use App\Http\Requests\PostUpdateRequest;
use Auth;
use App\Models\Category;
use App\Models\Tag;
use Purifier;

class PostController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::latest()->with('author', 'category')->select()->orderBy('id', 'desc')->paginate(15);
        return view('admin.posts', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        $tags = Tag::all();
        return view('admin.post-create', compact('categories', 'tags'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PostCreateRequest $request)
    {
        $request->merge([
            'body' => Purifier::clean($request->get('body')),
            'author_id' => Auth::guard('admin')->user()->id,
        ]);
        $post = Post::create($request->all());
        $post->addMedia($request->image)->toMediaCollection('post');
        $post->tags()->sync((array) $request->input('tags'));
        return redirect()->back()->with('status', 'Successfully Created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('admin.posts');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        $categories = Category::all();
        $tags = Tag::all();
        return view('admin.post-update', compact('post', 'categories', 'tags'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Post $post, PostUpdateRequest $request)
    {
        $request->merge([
            'body' => Purifier::clean($request->get('body'))
        ]);
        $post->update($request->all());
        if ($request->hasFile('image')) {
            $post->media()->delete();
            $post->addMediaFromRequest('image')->toMediaCollection('post');
        }
        $post->tags()->sync((array) $request->input('tags'));
        return redirect()->back()->with('status', 'Successfully Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        $post->delete();
        return response()->json([
            'message' => 'Successfully Deleted',
            'status' => 'success'
        ]);
    }
}
