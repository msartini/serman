<?php

namespace Asset;

use Eloquent;

class Post extends Eloquent
{

protected $fillable = array('title', 'description', 'create_at', 'update_at');

protected $table = 'posts';

}
