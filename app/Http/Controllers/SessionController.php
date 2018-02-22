<?php

namespace App\Http\Controllers;

use Auth;


class SessionController extends Controller
{
     public function check ()
    {
    	if(!auth()->attempt(request(['email','password']))) {

            return redirect()->back()->withErrors(['your email or password not correct!!']);

    	}
    	else
    	{
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
			return redirect('/');
		}
		
		}

		
    		
    	}
    	
    }
    public function destroy ()
    {
    	auth()->logout();
    	return redirect('/');
    }
}
