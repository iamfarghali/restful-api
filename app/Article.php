<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Article extends Model
{
    protected $fillable = [ 'title', 'body', 'user_id' ];

    public function setTitleAttribute ( $value )
    {
        $this->attributes['title'] = $value;
        $this->attributes['slug'] = Str::slug( $value );
    }

    public function user ()
    {
        return $this->belongsTo( 'App\User' );
    }

    public function replies ()
    {
        return $this->hasMany( 'App\Reply' );
    }
}
