<?php

namespace App\Listeners;

use App\Events\Ordered;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class SendOrderNotice
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
     * @param  Ordered  $event
     * @return void
     */
    public function handle(Ordered $event)
    {
        //
    }
}
