<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProsesController;

Route::get('/', function () {
    return view('kalkulator.index');
});

Route::resource('proses', ProsesController::class);