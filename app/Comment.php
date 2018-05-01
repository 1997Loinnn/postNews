<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    //
    protected $fillable = [
       'name',
       'email',
       'content',
       'create_time',
       'post_id',
    ];

    public function post()
    {
        return $this->belongsTo(Post::class);
    }
}
