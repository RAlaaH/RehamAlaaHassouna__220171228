<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = ['title','body','code','category_id','author_email'];


    public function category()
    {
        return $this->belongsTo('App\Category');
    }

    public function comments()
    {
        return $this->hasMany('App\Comment');
    }

    public function image()
    {
        return $this->morphOne('App\Image', 'imageable');
    }

    public function shares()
    {
        return $this->morphMany('App\Share', 'shareable');
    }

    public function tags()
    {
        return $this->morphToMany('App\Tag', 'taggable');
    }
}
