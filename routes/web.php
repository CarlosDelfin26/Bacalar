<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return response()->file(base_path('index.html'));
});

Route::get('/index.html', function () {
    return response()->file(base_path('index.html'));
});

Route::get('/pages/{page}', function (string $page) {
    $path = base_path('pages/' . $page);
    if (file_exists($path)) {
        return response()->file($path);
    }
    abort(404);
});

Route::get('/css/{file}', function (string $file) {
    $path = base_path('css/' . $file);
    if (file_exists($path)) {
        return response()->file($path, ['Content-Type' => 'text/css']);
    }
    abort(404);
})->where('file', '.*');

Route::get('/js/{file}', function (string $file) {
    $path = base_path('js/' . $file);
    if (file_exists($path)) {
        return response()->file($path, ['Content-Type' => 'application/javascript']);
    }
    abort(404);
})->where('file', '.*');

Route::get('/img/{file}', function (string $file) {
    $path = base_path('img/' . $file);
    if (file_exists($path)) {
        return response()->file($path);
    }
    abort(404);
})->where('file', '.*');
