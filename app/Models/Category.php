<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletingTrait;

class Category extends Model
{
    use SoftDeletingTrait;

    protected $dates = ['deleted_at'];

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['category_name'];

    // get all post by category
    public function posts()
    {
        return $this->hasMany(App\Models\Post::class);
    }
}
