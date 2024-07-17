<?php

namespace App\Listeners;

use App\Events\SubmissionSaved;
use Illuminate\Support\Facades\Log;

class LogSubmission
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
    public function handle(SubmissionSaved $event): void
    {
        Log::info('Submission created for ' . $event->submission->name . ' ' .  'his email ' . $event->submission->email);
    }
}
