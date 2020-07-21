<?php

namespace App\Listeners;

use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use App\Events\AdViewer;

class IncreaseCounter
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
    public function handle(AdViewer $event)
    {
         if (!session()->has('videoIsVisited')) {
            $this->updateViewr($event->ad);
        } else {
            return false;
        }
    }

    function updateViewr($ad)
    {
        $ad->viewers = $ad->viewers + 1;
        $ad->save();
        session()->put('videoIsVisited', $ad->id);
    }
}
