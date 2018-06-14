<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    //commentable

    public function commentable(){

        return $this->morphTo();
    }
}
