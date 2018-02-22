<?php
namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use Auth;

class SendMail extends Mailable {
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Build the message.
     *
     * @return $this
     */
  public function build(){

      if (request('url') && request('file'))
      {

          return $this->view('mail',['name'=>request('name'),'subject'=>request('subject'),'body'=>request('body')])

              ->attach(request('url')->getRealPath(), [
                  'as' => request('url')->getClientOriginalName(),

              ])
              ->attach(request('file')->getRealPath(), [
                  'as' => request('file')->getClientOriginalName(),

              ])->

              to('islamsalah1971@gmail.com')->subject(request('subject'));

      }

      elseif (request('url') && !request('file'))
      {

          return $this->view('mail',['name'=>request('name'),'subject'=>request('subject'),'body'=>request('body')])

              ->attach(request('url')->getRealPath(), [
                  'as' => request('url')->getClientOriginalName(),

              ])
              -> to('islamsalah1971@gmail.com')->subject(request('subject'));

      }
      elseif (!request('url') && request('file'))
      {

          return $this->view('mail',['name'=>request('name'),'subject'=>request('subject'),'body'=>request('body')])


              ->attach(request('file')->getRealPath(), [
                  'as' => request('file')->getClientOriginalName(),

              ])-> to('islamsalah1971@gmail.com')->subject(request('subject'));

      }
      else
      {

          return $this->view('mail',['name'=>request('name'),'subject'=>request('subject'),'body'=>request('body')])->to('islamsalah1971@gmail.com')
              ->subject(request('subject'));

      }



  }

}