<?php

namespace App\Http\ViewComposers;

use App\User;
use Illuminate\View\View;

class adminComposer
{
    public $notifications;
    /**
     * Create a movie composer.
     *
     * @return void
     */
    public function __construct()
    {

        $admins = User::whereHas('roles', function ($query) {

            $query->where('name', '=', 'admin');

        })->get();
        $this->notifications=$admins->notifications;
        dd($this->notifications);

    }

    /**
     * Bind data to the view.
     *
     * @param  View  $view
     * @return void
     */
    public function compose(View $view)
    {
        $view->with('notifications',$this->notifications);
    }
}