<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reply extends Model
{
    protected $fillable = [ 'reply' ];

    public function article ()
    {
        return $this->belongsTo( 'App\Article' );
    }
    public function user ()
    {
        return $this->belongsTo('App\User');
    }
}
