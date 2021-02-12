<?php

namespace App\Listeners\Registration;

use App\Jobs\NewUserRegisteredWelcomeMailJob;
use App\Mail\NewUserRegisteredWelcomeMail;
use Carbon\Carbon;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Mail;

class NewUserEmailListener
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
     * @param  object  $event
     * @return void
     */
    public function handle($event)
    {
        $job = (new NewUserRegisteredWelcomeMailJob($event->user['email']))->delay(Carbon::now()->addSeconds(5));
        dispatch($job);
    }
}
