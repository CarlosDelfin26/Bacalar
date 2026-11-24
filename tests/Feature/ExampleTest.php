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

    /**
     * Verifica que un usuario sin autenticar sea redirigido al login del admin.
     */
    public function test_unauthenticated_user_is_redirected_to_admin_login(): void
    {
        $response = $this->get('/admin');

        $response->assertRedirect('/admin/login');
    }

    /**
     * Verifica que la pantalla de login del panel administrativo sea accesible.
     */
    public function test_admin_login_screen_is_accessible(): void
    {
        $response = $this->get('/admin/login');

        $response->assertStatus(200);
        $response->assertViewIs('admin.login');
    }

    /**
     * Verifica que el intento de login con contraseña incorrecta falle.
     */
    public function test_admin_login_fails_with_incorrect_password(): void
    {
        $response = $this->post('/admin/login', [
            'password' => 'wrong-pass',
        ]);

        $response->assertSessionHasErrors('password');
        $this->assertFalse(session('admin_authenticated', false));
    }

    /**
     * Verifica que el login con la contraseña provisional (301006) autentique y redirija al dashboard.
     */
    public function test_admin_login_succeeds_with_provisional_password(): void
    {
        $response = $this->post('/admin/login', [
            'password' => '301006',
        ]);

        $response->assertRedirect(route('admin.index'));
        $response->assertSessionHas('admin_authenticated', true);
    }

    /**
     * Verifica que un administrador autenticado pueda acceder a /admin.
     */
    public function test_authenticated_admin_can_access_dashboard(): void
    {
        $response = $this->withSession(['admin_authenticated' => true])->get('/admin');

        $response->assertStatus(200);
        $response->assertViewIs('admin.index');
    }

    /**
     * Verifica que el cierre de sesión elimine la sesión y redirija al login.
     */
    public function test_admin_logout_clears_session(): void
    {
        $response = $this->withSession(['admin_authenticated' => true])->get('/admin/logout');

        $response->assertRedirect(route('admin.login'));
        $this->assertFalse(session('admin_authenticated', false));
    }
}
