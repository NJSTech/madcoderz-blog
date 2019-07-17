<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    protected $fillable = ['tag_name'];

    public $timestamps = false;
    /**
     * The tags that belong to the posts.
     */
    public function posts()
    {
        return $this->belongsToMany('App\Models\Post', 'post_tag');
    }
}
