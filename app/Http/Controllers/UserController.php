<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Http\Requests\UserResetPasswordRequest;
use Hash;
use App\Models\User;
use App\Models\Profile;
use App\Http\Requests\UserUpdateRequest;
use Toastr;
use App\Http\Requests\ProfileUpdateRequest;

class UserController extends Controller
{
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
        $avatars = auth()->user()->getMedia('profile');
        return view('home', compact('avatars'));
    }
    // show reset password form
    public function showResetForm()
    {
        return view('reset-password');
    }
    // submit reset password
    public function resetPassword(UserResetPasswordRequest $request)
    {
        if (!(Hash::check($request->get('current_password'), Auth::user()->password))) {
            // The passwords matches
            return redirect()->back()->with("error", "Your current password does not matches with the password you provided. Please try again.");
        }
        //Change Password
        $user = Auth::user();
        $user->password = Hash::make($request->password);
        $user->update();
        return redirect()->back()->with("status", "Password Changed Successfully !");
    }
    public function show(User $user)
    {
        return view('profile', compact('user'));
    }
    // user update information
    public function update(User $user, UserUpdateRequest $request)
    {
        $user->update($request->all());
        if ($request->hasFile('image')) {
            $user->media()->delete();
            $user->addMediaFromRequest('image')->toMediaCollection('profile');
        }
        Toastr::success('Successfully Updated', 'success');
        return redirect()->back();
    }
    // profile update information
    public function profileUpdate(ProfileUpdateRequest $request)
    {
        $user = Auth::user();
        if ($user->profile) {
            $profile = Profile::find($request->profile_id);
            $profile->update($request->all());
        } else {
            $profile = new Profile();
            $profile->about = $request->about;
            $profile->facebook = $request->facebook;
            $profile->twitter = $request->twitter;
            $user->profile()->save($profile);
        }
        Toastr::success('Successfully Updated', 'success');
        return redirect()->back();
    }
}
