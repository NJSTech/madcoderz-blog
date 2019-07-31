<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Reply extends Model
{
    protected $fillable = ['comment_id', 'reply', 'replyable_id', 'replyable_type'];
    public function replyable()
    {
        return $this->morphTo();
    }
}
