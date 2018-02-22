<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Monthly_Report extends Model
{
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
