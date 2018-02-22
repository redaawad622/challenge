<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Instruction extends Model
{
    protected $fillable=['url','body'];
    public function users()
    {
        return $this->belongsTo(User::class );
    }
}
