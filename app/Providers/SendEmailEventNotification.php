<?php

namespace App\Providers;

use App\Providers\EmailEvent;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use SerializesModels;
use Illuminate\Support\Facades\Mail;
use App\Mail\WelcomeMail;
class SendEmailEventNotification
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
     * @param  \App\Providers\EmailEvent  $event
     * @return void
     */
    public function handle(EmailEvent $event)
    {
        $user=$event->user;
        Mail::to($user->email)->send(new WelcomeMail($user));
    }
}
