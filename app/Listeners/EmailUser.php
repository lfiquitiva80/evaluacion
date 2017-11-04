<?php

namespace App\Listeners;

use App\Events\EmailUser;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class EmailUser
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
     * @param  EmailUser  $event
     * @return void
     */
    public function handle(EmailUser $event)
    {
        //
    }
}
