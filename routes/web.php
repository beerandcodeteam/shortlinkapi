<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/{name}', [\App\Http\Controllers\ShortlinkController::class, 'show'])
    ->middleware('guest')
    ->name('shortlink.show');

