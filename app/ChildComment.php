<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ChildComment extends Model
{
    protected $fillable = ['comment_text','user_id','likes', 'active', 'parent_id'];
}
