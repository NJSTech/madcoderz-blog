<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Spatie\MediaLibrary\HasMedia\HasMedia;
use Spatie\MediaLibrary\HasMedia\HasMediaTrait;
use Spatie\MediaLibrary\Models\Media;

class User extends Authenticatable implements MustVerifyEmail, HasMedia
{
    use Notifiable, HasMediaTrait;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'email', 'password', 'email_verified_at'];

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
    // Get the profile value for user
    public function profile()
    {
        return $this->morphOne(Profile::class, 'profileable');
    }
    // user comment
    public function comment()
    {
        return $this->morphOne(Comment::class, 'commentable');
    }
    // user reply
    public function reply()
    {
        return $this->morphOne(Reply::class, 'replyable');
    }
    public function favourite_posts()
    {
        return $this->belongsToMany(Post::class)->withTimestamps();
    }
    // register media library collection
    // public function registerMediaCollections()
    // {
    //     $this->addMediaCollection('profile');
    // }
    public function registerMediaConversions(Media $media = null)
    {
        $this->addMediaConversion('thumb')
            ->width(368)
            ->height(232);
    }
}
