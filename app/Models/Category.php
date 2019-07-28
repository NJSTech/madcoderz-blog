<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\MediaLibrary\HasMedia\HasMedia;
use Spatie\MediaLibrary\HasMedia\HasMediaTrait;

class Category extends Model implements HasMedia
{
    use SoftDeletes, HasMediaTrait;

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
    public function category_path()
    {
        return '/categories/' . $this->category_slug;
    }
    public function registerMediaCollections()
    {
        $this->addMediaCollection('category');
        $this->addMediaConversion('thumb')
            ->width(300)
            ->height(300);
        $this->addMediaConversion('banner')
            ->width(1200)
            ->height(650);
    }
}
