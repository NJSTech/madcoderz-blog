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
use Toastr;
use App\Models\Post;
use App\Models\User;
use App\Models\Subscriber;
use App\Notifications\AdminEmailVerify;
use Illuminate\Support\Carbon;

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
        $posts = Post::all();
        $users = User::all();
        $subscribers = Subscriber::all();
        return view('admin.dashboard', compact('posts', 'users', 'subscribers'));
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
    public function profileUpdate(ProfileUpdateRequest $request)
    {
        $admin = Auth::guard('admin')->user();
        if ($admin->profile) {
            $profile = Profile::find($request->profile_id);
            $profile->update($request->all());
        } else {
            $profile = new Profile();
            $profile->about = $request->about;
            $profile->facebook = $request->facebook;
            $profile->twitter = $request->twitter;
            $admin->profile()->save($profile);
        }
        Toastr::success('Successfully Updated', 'success');
        return redirect()->back();
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
    // admin create page
    public function create()
    {
        return view('admin.admin-create');
    }
}
