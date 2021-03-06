<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    use SoftDeletes;

    protected $dates = ['deleted_at'];
    protected $fillable = ['title', 'content', 'author', 'category'];

    public function user(){

        return $this->belongsTo('App\User');
    }


    public function comments() {
        return $this->morphMany('App\Comment', 'commentable');
    }

    public function tags(){

        return $this->morphToMany('App\Tag', 'taggable');
    }
}



