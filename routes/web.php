<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EncryptionController;

Route::get('/', function () {
    return view('encrypt');
});

Route::post('/encrypt', [EncryptionController::class, 'encrypt']);
Route::post('/decrypt', [EncryptionController::class, 'decrypt']);
