<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class WeeklyPlan extends Model
{
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
