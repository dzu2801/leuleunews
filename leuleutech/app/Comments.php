<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comments extends Model
{
    //
    protected $table = 'comment';
    public function posts()
    {
        return $this->belongsTo('App\Posts','PostID','id');
    }
}
