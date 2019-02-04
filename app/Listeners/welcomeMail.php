<?php

namespace App\Listeners;

use App\Event\firstEvent;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class welcomeMail
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
     * @param  firstEvent  $event
     * @return void
     */
    public function handle(firstEvent $event)
    {
        print_r($event);
    }
}
