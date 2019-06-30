<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $fillable = ['title', 'slug', 'body', 'category_id', 'userable_id', 'userable_type', 'status'];

    /**
     * Get all of the owning profileable models.
     */
    public function profileable()
    {
        return $this->morphTo();
    }
}
