<?php

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

    public function test_index_html_route_returns_successful_response(): void
    {
        $response = $this->get('/index.html');

        $response->assertStatus(200);
    }

    public function test_css_assets_route_returns_successful_response(): void
    {
        $response = $this->get('/css/styles.css');

        $response->assertStatus(200);
        $response->assertHeader('Content-Type', 'text/css; charset=UTF-8');
    }

    public function test_js_assets_route_returns_successful_response(): void
    {
        $response = $this->get('/js/main.js');

        $response->assertStatus(200);
        $response->assertHeader('Content-Type', 'application/javascript');
    }
}
