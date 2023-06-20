<?php

namespace App\Listeners;

use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use App\Events\NewMessageEvent;

class NewMessageListener
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
    public function handle(NewMessageEvent $event): void
    {
        echo "hai";
        $message = $event->message;
        echo "listener msg".$message;
        \Log::info('Received new message: ' . $message);
        dd($message); // Output the message and terminate execution

    }
}
