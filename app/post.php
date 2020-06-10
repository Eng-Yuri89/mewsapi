<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class post extends Model
{
    protected  $fillable = [
        'title',   'content', 'data_written',
        'featured_image', 'votes_up',     'vote_down',
        'user_id', 'category_id',

    ];
}
