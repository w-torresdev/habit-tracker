<?php

use Illuminate\Support\Facades\Route;

Route::get('/', [\App\Http\Controllers\SiteController::class, 'index']);

require __DIR__ . '/settings.php';