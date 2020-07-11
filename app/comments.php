<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class comments extends Model
{
     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
       'comment_text', 'user_id'
    ];

}
