<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::post('/login', [\App\Http\Controllers\LoginController::class, 'login'])
    ->middleware('guest')
    ->name('login');

Route::get('/{name}', [\App\Http\Controllers\ShortlinkController::class, 'show'])
    ->name('shortlink.showcache');

Route::get('/{name}/no-cache', [\App\Http\Controllers\ShortlinkController::class, 'showLink'])
    ->name('shortlink.nocache');


Route::get('/static', [\App\Http\Controllers\ShortlinkController::class, 'static'])
    ->name('shortlink.static');
