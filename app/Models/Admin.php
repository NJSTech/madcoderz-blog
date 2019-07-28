<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Notifications\AdminResetPasswordNotification;
use Spatie\MediaLibrary\HasMedia\HasMedia;
use Spatie\MediaLibrary\HasMedia\HasMediaTrait;

class Admin extends Authenticatable implements MustVerifyEmail, HasMedia
{
    use Notifiable, HasMediaTrait;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'email', 'password', 'email_verified_at', 'job_title', 'status'];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    // admin posts
    public function posts()
    {
        return $this->hasMany(App\Models\Post::class);
    }
    // Get the profile value for admin
    public function profile()
    {
        return $this->morphOne(Profile::class, 'profileable');
    }
    /**
     * Send the password reset notification.
     *
     * @param  string  $token
     * @return void
     */
    public function sendPasswordResetNotification($token)
    {
        $this->notify(new AdminResetPasswordNotification($token));
    }
    public function registerMediaCollections()
    {
        $this->addMediaCollection('profile');
        $this->addMediaConversion('thumb')
            ->width(300)
            ->height(300);
    }
}
