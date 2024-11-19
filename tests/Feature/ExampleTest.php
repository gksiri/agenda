<?php

<<<<<<< HEAD
it('returns a successful response', function () {
    $response = $this->get('/');

    $response->assertStatus(200);
});
=======
namespace Tests\Feature;

// use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     */
    public function test_the_application_returns_a_successful_response(): void
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }
}
>>>>>>> 1a93987bd2038f22c8904f8d4d8814e95adf64ee
