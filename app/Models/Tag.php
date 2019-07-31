<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Tag extends Model
{
    use SoftDeletes;
    protected $dates = ['deleted_at'];
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['tag_name'];

    public $timestamps = false;
    /**
     * The tags that belong to the posts.
     */
    public function posts()
    {
        return $this->belongsToMany('App\Models\Post', 'post_tag');
    }
    public function tag_path()
    {
        return '/tags/' . $this->tag_name;
    }
}
