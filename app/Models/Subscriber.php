<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Subscriber extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['email'];

    public function scopeNew($query)
    {
        return $query->orderBy('created_at', 'desc')->take(15);
    }
}
