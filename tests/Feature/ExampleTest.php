<?php

namespace Tests\Feature;

// use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     */
    public function test_the_public_pages_return_successful_responses(): void
    {
        foreach ([
            '/',
            '/about',
            '/corporate',
            '/login',
            '/register',
            '/courses',
            '/theory-courses',
            '/online-courses',
            '/books',
            '/blogs',
            '/media',
            '/contact',
        ] as $uri) {
            $this->get($uri)->assertOk();
        }
    }
}
