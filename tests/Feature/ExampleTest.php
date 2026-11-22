<?php

namespace Tests\Feature;

use Tests\TestCase;

class ExampleTest extends TestCase
{
    /**
     * Verifica que la ruta raíz cargue la vista 'index'.
     */
    public function test_the_application_returns_a_successful_response(): void
    {
        $response = $this->get('/');

        $response->assertStatus(200);
        $response->assertViewIs('index');
    }

    /**
     * Verifica la redirección canónica de /index.html a /.
     */
    public function test_index_html_route_redirects_to_home(): void
    {
        $response = $this->get('/index.html');

        $response->assertRedirect('/');
    }

    /**
     * Verifica la resolución de hojas de estilo desde public/css.
     */
    public function test_css_assets_route_returns_successful_response(): void
    {
        $response = $this->get('/css/styles.css');

        $response->assertStatus(200);
        $response->assertHeader('Content-Type', 'text/css; charset=UTF-8');
    }

    /**
     * Verifica la resolución de scripts desde public/js.
     */
    public function test_js_assets_route_returns_successful_response(): void
    {
        $response = $this->get('/js/main.js');

        $response->assertStatus(200);
        $response->assertHeader('Content-Type', 'application/javascript');
    }

    /**
     * Verifica la carga de vistas de páginas en resources/views/pages.
     */
    public function test_page_view_returns_successful_response(): void
    {
        $response = $this->get('/pages/comunidades');

        $response->assertStatus(200);
        $response->assertViewIs('pages.comunidades');
    }
}
