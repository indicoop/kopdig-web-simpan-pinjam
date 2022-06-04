<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\SimpanPinjamController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::group(['middleware' => 'auth'], function(){
    Route::get('/dashboard', DashboardController::class)->name('dashboard');

    // Simpan Pinjam
    Route::controller(SimpanPinjamController::class)
            ->prefix('simpan-pinjam')
            ->name('simpan-pinjam.')->group(function(){

        Route::get('/all', 'index')->name('index');
        Route::get('/get/{id}', 'show')->name('show');
    });

});

// Route::get('/dashboard', function () {

// })->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
