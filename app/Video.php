<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
   protected $filalble = ['is_premium', 'url_video', 'description', 'titulo', 'curso_id'];
}
