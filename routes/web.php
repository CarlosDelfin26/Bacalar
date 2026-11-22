<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group.
|
*/

// Página principal (renderiza resources/views/index.blade.php)
Route::view('/', 'index')->name('home');

// Redirección para compatibilidad con accesos a /index.html
Route::redirect('/index.html', '/');

// Rutas dinámicas para páginas del equipo (resources/views/pages/*.blade.php)
Route::get('/pages/{page}', function (string $page) {
    $slug = str_replace('.html', '', $page);
    $view = 'pages.' . $slug;

    if (view()->exists($view)) {
        return view($view);
    }

    abort(404);
})->name('pages.show');

// Rutas auxiliares de assets para compatibilidad en el pipeline de tests
Route::get('/css/{file}', function (string $file) {
    $path = public_path('css/' . $file);
    if (file_exists($path)) {
        return response()->file($path, ['Content-Type' => 'text/css; charset=UTF-8']);
    }
    abort(404);
})->where('file', '.*');

Route::get('/js/{file}', function (string $file) {
    $path = public_path('js/' . $file);
    if (file_exists($path)) {
        return response()->file($path, ['Content-Type' => 'application/javascript']);
    }
    abort(404);
})->where('file', '.*');

Route::get('/img/{file}', function (string $file) {
    $path = public_path('img/' . $file);
    if (file_exists($path)) {
        return response()->file($path);
    }
    abort(404);
})->where('file', '.*');
