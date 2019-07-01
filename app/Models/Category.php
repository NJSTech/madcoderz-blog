<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
    use SoftDeletes;

    protected $dates = ['deleted_at'];

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['category_name'];

    protected static function boot()
    {
        parent::boot();
        static::creating(function ($category) {
            $category->category_slug = str_slug($category->category_name);
        });
    }
    // get all post by category
    public function posts()
    {
        return $this->hasMany(Post::class);
    }
}
