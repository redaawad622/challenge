<?php
namespace App\Http\Controllers;

use Mail;

use App\Mail\SendMail;
use App\EmailNotify;
use Auth;
class MailController extends Controller {




  public function sendEmail(){

      request()->validate([
          'name' => 'required|min:3|max:20|string',
          'subject' => 'required|string',
          'body'=>'required|string',
          'url'=>'image',


      ]);
      Mail::send(new SendMail());
     $notify= new EmailNotify();
     $notify->user_id=Auth::user()->id;
     $notify->name=Auth::user()->name;
     $notify->url=Auth::user()->url;

     $notify->reading='0';

     $notify->save();

      return redirect()->back();

  }
}
