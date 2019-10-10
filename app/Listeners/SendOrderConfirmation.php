<?php

namespace App\Listeners;

use App\Events\OrderSubmitted;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class SendOrderConfirmation
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
     * @param  OrderSubmitted  $event
     * @return void
     */
    public function handle(OrderSubmitted $event)
    {
        \Illuminate\Support\Facades\Auth::user()->notify(new \App\Notifications\OrderSubmitted());
        
        
        Notification::route('mail', 'taylor@example.com')
            ->route('nexmo', '5555555555')
            ->notify(new OrderSubmitted($invoice));
        
        
    }
}
