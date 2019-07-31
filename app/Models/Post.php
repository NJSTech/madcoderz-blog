<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\MediaLibrary\HasMedia\HasMedia;
use Spatie\MediaLibrary\HasMedia\HasMediaTrait;

class Post extends Model implements HasMedia
{
    use SoftDeletes, HasMediaTrait;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['title', 'slug', 'body', 'category_id', 'author_id', 'status'];

    protected $dates = ['deleted_at'];

    protected static function boot()
    {
        parent::boot();
        static::creating(function ($post) {
            $post->slug = str_slug($post->title);
        });
    }
    /**
     * Get all of the owning postable models.
     */
    // public function postable()
    // {
    //     return $this->morphTo();
    // }

    /**
     * The post that belong to the tags.
     */
    public function tags()
    {
        return $this->belongsToMany('App\Models\Tag', 'post_tag');
    }
    // the post belong to category
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    /**
     * Get all of the post's comments.
     */
    public function comments()
    {
        return $this->hasMany(Comment::class)->orderBy('id', 'desc');
    }
    // set post path
    public function path()
    {
        return '/posts/' . $this->slug;
    }
    // set post created by
    public function author()
    {
        return $this->belongsTo(Admin::class, 'author_id');
    }
    // register media collection
    public function registerMediaCollections()
    {
        $this->addMediaCollection('post');
        $this->addMediaConversion('thumb')
            ->width(300)
            ->height(300);
        $this->addMediaConversion('banner')
            ->width(1200)
            ->height(650);
    }
}
