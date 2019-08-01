<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\SubscribeCreateRequest;
use App\Models\Subscriber;
use Toastr;

class SubscribeController extends Controller
{
    public function store(SubscribeCreateRequest $request)
    {
        Subscriber::create($request->all());
        Toastr::success('Successfully Added', 'success');
        return redirect()->back();
    }
}
