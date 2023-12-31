<?php

namespace App\Listeners;

use App\Mail\CustomerMail;
use App\Models\Front\Order;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use App\Events\CustomermailProcessed;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class CustomermailNotification
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     */
    public function handle(CustomermailProcessed $event): void
    {
        Mail::to($event->lastmail)->send(new CustomerMail($event->customermail));
    }
}
