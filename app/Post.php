<?php

namespace Serman;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{

protected $fillable = array('title', 'description', 'create_at', 'update_at');

protected $table = 'posts';

}
