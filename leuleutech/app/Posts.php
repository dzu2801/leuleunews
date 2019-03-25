<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Posts extends Model
{
    protected $table = 'posts';
    protected $fillable = ['PostView'];
    public function categories()
    {
        return $this->belongsTo('App\Categories','CateID','id');
    }
    public function comment()
    {
        return $this->hasMany('App\Commnect','PostID','id');
    }
}
