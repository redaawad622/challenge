<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;


class SessionController extends Controller
{
     public function check (Request $request)
    {
        $remember = $request->input('remember_me');
    	if(auth()->attempt(request(['email','password']),$remember)) {

            $bottomValue = 60;
            $upperValue = 60*6;
            $currentValue = date("G")*60+date("i");
            if(Auth::check()&&Auth::user()->hasRole('admin'))
            {
                return redirect('/');
            }
            else
            {
                if (($currentValue >= $bottomValue) && ($currentValue <= $upperValue))
                {
                    auth()->logout();
                    return redirect('/access');
                }
                else
                {
                    return redirect('/profile')->withInput();
                }

            }
    	}
    	else
    	{
            return redirect()->back()->withInput()->withErrors(['your email or password not correct!!']);

        }
    	
    }
    public function destroy ()
    {
    	auth()->logout();
    	return redirect('/');
    }
}
