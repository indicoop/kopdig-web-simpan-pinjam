<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\{SimpanPinjamController, ProfileController, TenorController};
use Illuminate\Support\Facades\Route;

// Route::redirect('/login', 'auth.login', 302);
Route::redirect('/', 'login');

Route::group(['middleware' => 'auth'], function(){
    Route::get('/dashboard', DashboardController::class)->name('dashboard');

    // Simpan Pinjam
    Route::controller(SimpanPinjamController::class)
            ->prefix('simpan-pinjam')
            ->name('simpan-pinjam.')->group(function(){

        Route::get('/all', 'index')->name('index');
        Route::get('/detail/{id}', 'show')->name('show');

        Route::name('pinjaman.')->group(function(){
            Route::get('/pinjaman', 'pinjaman')->name('index');
            Route::get('/pinjaman/create', 'pinjamanCreate')->name('create');
            Route::post('/pinjaman/store', 'PinjamanStore')->name('store');
            Route::get('/pinjaman/show/{id}', 'PinjamanShow')->name('show');
            Route::post('/angsuran', 'Angsuran')->name('loan.store');
        });

        Route::name('simpanan.')->group(function(){
            Route::get('/simpanan', 'simpanan')->name('index');
            Route::post('/simpanan/store', 'simpananStore')->name('store');
        });
    });

    // Profile
     Route::get('/profile', [ProfileController::class, 'index'])->name('profile.index');
     Route::get('/edit-profile', [ProfileController::class, 'edit'])->name('profile.edit');


});

require __DIR__.'/auth.php';
