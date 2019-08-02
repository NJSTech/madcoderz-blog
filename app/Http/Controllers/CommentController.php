<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Auth;
use App\Http\Requests\CommentCreateRequest;
use Toastr;

class CommentController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:web,admin');
    }
    public function store(CommentCreateRequest $request)
    {
        $user = Auth::user();
        $comment = new Comment();
        $comment->comment = $request->comment;
        $comment->post_id = $request->post_id;
        $user->comment()->save($comment);
        Toastr::success('Successfully Added', 'success');
        return redirect()->back();
    }
}
