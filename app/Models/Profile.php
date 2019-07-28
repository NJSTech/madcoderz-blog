<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $fillable = ['about', 'facebook', 'twitter', 'userable_id', 'userable_type'];

    /**
     * Get all of the owning profileable models.
     */
    public function profileable()
    {
        return $this->morphTo();
    }
}
