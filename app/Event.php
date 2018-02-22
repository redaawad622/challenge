<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
     protected $dates = [
        'created_at',
        'updated_at',

    ];
    protected $fillable=['title','date','time','description','url'];

public static function listen()
{
    return'g';
}
}
