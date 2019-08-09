<?php

namespace App\Http\Controllers\Admins;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Subscriber;
use Toastr;

class SubscribeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    public function index()
    {
        $subscribers = Subscriber::orderBy('id', 'desc')->paginate(20);
        return view('admin.subscribers', compact('subscribers'));
    }
    public function destroy(Subscriber $subcribe)
    {
        $subcribe->delete();
        return response()->json([
            'message' => 'Successfully Deleted',
            'status' => 'success'
        ]);
    }
}
