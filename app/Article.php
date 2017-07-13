<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Cviebrock\EloquentSluggable\Sluggable;

use Cviebrock\EloquentSluggable\SluggableScopeHelpers;

class Article extends Model
{
    //
    use Sluggable;

    use SluggableScopeHelpers;

    protected $fillable = ['title', 'content', 'categories_id', 'users_id', 'slug'];

    /**
     * Return the sluggable configuration array for this model.
     *
     * @return array
     */
    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }

    public function category()
    {
        # code...
        return $this->belongsTo('App\Category','categories_id');
    }

    public function user()
    {
        # code...
        return $this->belongsTo('App\User','users_id');
    }

    public function image()
    {
        # code...
        return $this->hasOne('App\Image','articles_id');
    }

    //My Accessor
    public function getContentReadMoreAttribute()
    {
        # code...
        return str_limit($this->content, 300);
    }

    public function scopeBuscar($query, $title)
    {
        # code...
        return $query->where('title', 'like', '%' .$title. '%');
    }
    
}