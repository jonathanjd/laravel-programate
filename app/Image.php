<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    //
    protected $fillable = ['name', 'articles_id'];

    public function article()
    {
        # code...
        return $this->belongsTo('App\Article','articles_id');
    }
}
