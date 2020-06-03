<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

class Reply extends Model
{
    protected $fillable = [ 'reply' ];

    public function article ()
    {
        return $this->belongsTo( 'App\Article' );
    }

    public function user ()
    {
        return $this->belongsTo( 'App\User' );
    }

    public function getCreatedAtAttribute ()
    {
        return Carbon::parse( $this->attributes['created_at'] )->diffForHumans();
    }

    public function getUpdatedAtAttribute ()
    {
        return Carbon::parse( $this->attributes['updated_at'] )->diffForHumans();
    }
}
