<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminAuthController extends Controller
{
    /**
     * Contraseña provisional configurada para acceso al panel administrativo.
     */
    public const PROVISIONAL_PASSWORD = '301006';

    /**
     * Muestra la pantalla de inicio de sesión del panel administrativo.
     */
    public function showLoginForm(Request $request)
    {
        if ($request->session()->get('admin_authenticated', false)) {
            return redirect()->route('admin.index');
        }

        return view('admin.login');
    }

    /**
     * Procesa la autenticación por contraseña.
     */
    public function login(Request $request)
    {
        $request->validate([
            'password' => ['required', 'string'],
        ], [
            'password.required' => 'Por favor introduce la contraseña de acceso.',
        ]);

        $configuredPassword = config('app.admin_password', env('ADMIN_PASSWORD', self::PROVISIONAL_PASSWORD));

        if ($request->input('password') === (string) $configuredPassword) {
            $request->session()->regenerate();
            $request->session()->put('admin_authenticated', true);

            return redirect()->intended(route('admin.index'));
        }

        return back()
            ->withErrors(['password' => 'Contraseña incorrecta. Por favor intenta de nuevo.'])
            ->withInput();
    }

    /**
     * Cierra la sesión administrativa.
     */
    public function logout(Request $request)
    {
        $request->session()->forget('admin_authenticated');
        $request->session()->regenerateToken();

        return redirect()->route('admin.login')->with('status', 'Sesión cerrada correctamente.');
    }
}

