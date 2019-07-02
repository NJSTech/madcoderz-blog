<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Post extends Model
{
    use SoftDeletes;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['title', 'slug', 'body', 'category_id', 'userable_id', 'userable_type', 'status'];

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
    public function postable()
    {
        return $this->morphTo();
    }

    /**
     * The post that belong to the tags.
     */
    public function tags()
    {
        return $this->belongsToMany('App\Models\Tag', 'post_tag')->withPivot('post_tag');
    }
    // the post belong to category
    public function category()
    {
        return $this->belongsTo('App\Model\Category');
    }
    /**
     * Get all of the post's comments.
     */
    public function comments()
    {
        return $this->hasMany('App\Models\Comment');
    }
}
