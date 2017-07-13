<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //
    protected $fillable = ['name'];

    public function articles()
    {
        # code...
        return $this->hasMany('App\Article', 'categories_id');
    }

    //My Accessor
    public function getCountPostAttribute()
    {
        # code...
        return $this->articles->count();
    }
}
