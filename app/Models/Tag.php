<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    protected $fillable = ['tag_name'];

    /**
     * The tags that belong to the posts.
     */
    public function posts()
    {
        return $this->belongsToMany('App\Model\Post', 'post_tag');
    }
}
