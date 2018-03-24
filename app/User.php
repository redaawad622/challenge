<?php

namespace App;

use App\Notifications\ResetPasswordNotification;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\CanResetPassword;
use Illuminate\Auth\Notifications\ResetPassword as ResetPassword;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\Access\Authorizable;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\Access\Authorizable as AuthorizableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use  Authorizable,Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','file_num','url',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function instructions()
    {
       return $this->hasMany(Instruction::class);
    }

    public function dailyReportMorning()
    {
        return $this->hasMany(DailyReportMorning::class);
    }
    public function dailyReportEvening()
    {
        return $this->hasMany(DailyReportEvening::class);
    }
    public function weeklyPlan()
    {
        return $this->hasMany(WeeklyPlan::class);
    }
    public function monthlyReports()
    {
        return $this->hasMany('App\Monthly_Report','user_id');
    }
    public function cvs()
    {
        return $this->hasMany('App\Cv','user_id');
    }

    public function email()
    {
        return $this->hasMany('App\EmailNotify','user_id');
    }




    public function roles()
    {
        return $this->belongsToMany('App\Role','user_role','user_id','role_id');
    }


    public function hasAnyRole($roles)
    {
        if(is_array($roles))
        {
            foreach ($roles as $role) {
                if($this->hasRole($role))
                {
                    return true;
                }
            }

        }
        else
        {
            if($this->hasRole($roles))
            {
                return true;
            }

        }
    }
    public function hasRole($role)
    {
        if ($this->roles()->where('name',$role)->first()) {
            return true;
        }

        return false;

    }
    /**
     * Send the password reset notification.
     *
     * @param  string  $token
     * @return void
     */
    public function sendPasswordResetNotification($token)
    {
        $this->notify(new ResetPasswordNotification($token));
    }


}
