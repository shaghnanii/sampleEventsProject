<?php

namespace App\Listeners\Registration;

use App\Events\Registration\NewUserRegisteredEvent;
use App\Jobs\NewUserRegisteredAdminMailJob;
use Carbon\Carbon;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class NewUserSendSlackNotificationListener
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
     * @param  NewUserRegisteredEvent  $event
     * @return void
     */
    public function handle(NewUserRegisteredEvent $event)
    {
        $job = (new NewUserRegisteredAdminMailJob($event->user['email']))->delay(Carbon::now()->addSeconds(10));
        dispatch($job);
    }
}
