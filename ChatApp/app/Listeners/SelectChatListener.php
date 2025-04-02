<?php

namespace App\Listeners;

use App\Events\SelectChat;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class SelectChatListener
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
    public function handle(SelectChat $event): void
    {
        dd("bateu aq");
    }
}
