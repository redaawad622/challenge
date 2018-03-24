<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;

class emailNotification extends Notification
{
    use Queueable;
    protected $subject;
    protected $path;
    protected $data;


    /**
     * Create a new notification instance.
     *
     * @return void
     */

    public function __construct($subject,$data,$path)
    {

        $this->subject=$subject;
        $this->data=$data;
        $this->path=$path;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['mail'];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {
        return (new MailMessage)
            ->subject($this->subject)
            ->greeting('Welcome')
            ->line($this->data)
            ->action('Show report', url($this->path))

            ->line('Thank you for using our application!')
            ->from('redaawad622@gmail.com');
    }

    /**
     * Get the array representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function toArray($notifiable)
    {
        return [
            //
        ];
    }
}
