<?php

namespace App\Http\Controllers\Admins;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin;
use App\Http\Requests\AdminUpdateRequest;
use App\Models\Profile;
use App\Http\Requests\ProfileUpdateRequest;
use Hash;
use Auth;
use App\Http\Requests\AdminResetPasswordRequest;

class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('admin.dashboard');
    }
    public function store(Request $request)
    {
        $user = auth()->user();
        $user->addMedia($request->avatar)->toMediaCollection('profile');
        return redirect()->back();
    }
    public function edit(Admin $admin)
    {
        return view('admin.admin-profile', compact('admin'));
    }
    public function update(Admin $admin, AdminUpdateRequest $request)
    {
        $admin->update($request->all());
        if ($request->hasFile('image')) {
            $admin->media()->delete();
            $admin->addMedia($request->image)->toMediaCollection('profile');
        }
        return redirect()->back()->with('status', 'Successfully Updated');
    }
    public function profileUpdate(Profile $profile, ProfileUpdateRequest $request)
    {
        $profile->update($request->all());
        return redirect()->back()->with('status', 'Successfully Updated');
    }
    public function changePassword()
    {
        return view('admin.change-password');
    }
    public function resetPassword(AdminResetPasswordRequest $request)
    {
        if (!(Hash::check($request->get('current_password'), Auth::guard('admin')->user()->password))) {
            // The passwords matches
            return redirect()->back()->with("error", "Your current password does not matches with the password you provided. Please try again.");
        }
        //Change Password
        $admin = Auth::guard('admin')->user();
        $admin->password = Hash::make($request->password);
        $admin->update();

        return redirect()->back()->with("status", "Password Changed Successfully !");
    }
}
