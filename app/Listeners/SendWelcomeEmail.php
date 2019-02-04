<?php

namespace App\Listeners;

use App\Event\UserRegistered;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Mail;

class SendWelcomeEmail
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  UserRegistered  $event
     * @return void
     */
    public function handle(UserRegistered $event)
    {
        $data=array('username'=>$event->user->username, 'email'=>$event->user->email, 'body'=>'Welcome to our website. Hope you will enjoy our services');
        Mail::send('email.mail', $data, function($message) use ($data){
            $message->to($data['email'])
            ->subject('welcome Mail')
            ->from('abc@gmail.com');
        });
    }
}
