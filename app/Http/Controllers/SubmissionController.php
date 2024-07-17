<?php

namespace App\Http\Controllers;

use App\Http\Requests\SubmissionRequest;
use App\Jobs\ProcessSubmission;
use Illuminate\Support\Facades\Log;

class SubmissionController extends Controller
{
    public function store(SubmissionRequest $request)
    {
        try {
            ProcessSubmission::dispatch(
                $request->validated()
            );

            return response()->json(['message' => 'Submission received and processing started.']);
        } catch (\Exception $e) {
            Log::error('Error processing submission: ' . $e->getMessage());

            return response()->json(['error' => 'Failed to process submission.'], 500);
        }
    }
}
