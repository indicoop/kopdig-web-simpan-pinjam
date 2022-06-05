<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\{SimpanPinjamController, ProfileController, TenorController};
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

Route::redirect('/login', 'auth.login');

Route::group(['middleware' => 'auth'], function(){
    Route::get('/dashboard', DashboardController::class)->name('dashboard');

    // Simpan Pinjam
    Route::controller(SimpanPinjamController::class)
            ->prefix('simpan-pinjam')
            ->name('simpan-pinjam.')->group(function(){

        Route::get('/all', 'index')->name('index');
        Route::get('/detail/{id}', 'show')->name('show');
    });

    //Tenor pengecekan
    Route::get('/cek-tenor-pinjaman', [TenorController::class, 'index'])->name('tenor.index');

    // Profile
     Route::get('/profile', [ProfileController::class, 'index'])->name('profile.index');
     Route::get('/edit-profile', [ProfileController::class, 'edit'])->name('profile.edit');

});

// Route::get('/dashboard', function () {

// })->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
