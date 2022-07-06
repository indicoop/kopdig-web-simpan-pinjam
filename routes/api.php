<?php

use App\Http\Controllers\API\{UserController, PinjamanController};
use Illuminate\Support\Facades\Route;


// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::name('api.')->group(function(){

    Route::get('/user/{id}', [UserController::class, 'index'])->name('user');
    Route::get('/pinjaman', [PinjamanController::class, 'index'])->name('pinjaman');

});
