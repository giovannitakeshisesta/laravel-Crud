<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

// add a resource route
Route::resource('users', UserController::class);

Route::get('/', function () {
    return view('welcome');
});
