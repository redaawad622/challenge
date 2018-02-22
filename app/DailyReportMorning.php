<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class DailyReportMorning extends Model
{
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function getCreatedAtAttribute($date)
    {
        return Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $date)->format('Y-m-d');
    }

}
