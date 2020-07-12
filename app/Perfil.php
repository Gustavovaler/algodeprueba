<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Perfil extends Model
{
    protected $fillable = [
        'avatar', 'active', 'votes','contrib','user_id'
    ];
}
