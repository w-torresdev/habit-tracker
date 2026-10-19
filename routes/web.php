<?php

use Illuminate\Support\Facades\Route;


Route::get('/home', function () {
    return view('app');
});

Route::get('/', [\App\Http\Controllers\SiteController::class, 'index']);

require __DIR__ . '/settings.php';