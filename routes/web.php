<?php

use App\Http\Controllers\OwnerController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/create-owner', [OwnerController::class, 'show']);
Route::get('/show-owner/{owner}', [OwnerController::class, 'show']);