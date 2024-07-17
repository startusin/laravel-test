<?php

namespace Tests\Unit;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class SubmissionTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic unit test example.
     */
    public function test_submit_endpoint(): void
    {
        $response = $this->postJson(route('submission-store'), [
            'name' => 'John Doe',
            'email' => 'john.doe@example.com',
            'message' => 'This is a test message.'
        ]);

        $response->assertStatus(200);
        $response->assertJson(['message' => 'Submission received and processing started.']);
    }
}
