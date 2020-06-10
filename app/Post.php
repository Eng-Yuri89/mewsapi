<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        'title','content','featured_image','votes_up','vote_down','user_id'
    ];

}
