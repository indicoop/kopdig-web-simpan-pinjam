<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MarketController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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

Auth::routes();
//Language Translation
Route::get('index/{locale}', [App\Http\Controllers\HomeController::class, 'lang']);

Route::get('/template', [App\Http\Controllers\HomeController::class, 'root'])->name('root');

//Update User Details
Route::post('/update-profile/{id}', [App\Http\Controllers\HomeController::class, 'updateProfile'])->name('updateProfile');
Route::post('/update-password/{id}', [App\Http\Controllers\HomeController::class, 'updatePassword'])->name('updatePassword');

Route::get('/', [DashboardController::class,'admin'])->name('admin');
Route::get('/ketua', [DashboardController::class,'ketua'])->name('ketua');
Route::get('/sekretaris', [DashboardController::class,'sekretaris'])->name('sekretaris');
Route::get('/bendahara', [DashboardController::class,'bendahara'])->name('bendahara');
Route::get('/anggota', [DashboardController::class,'anggota'])->name('anggota');
Route::get('/profile', [DashboardController::class,'profile'])->name('profile');
Route::get('/editprofile', [DashboardController::class,'editprofile'])->name('editprofile');
Route::get('/product', function(){
    return view('pages.product');
})->name('product');


/**
 *  TODO: Untuk melihat routing dibawah ini silahkan anda membuka terminal dan kemudian ketikkan php artisan route:list --name=market
 *  ? Akan muncul semua route dengan filter name = market
 *
 *  * By Dafrin, github: https://github.com/destroylord
 *  * Please, Follow me!!
 *
 * */
Route::prefix('/market')
        ->name('market.')
        ->controller(MarketController::class)
        ->group(function(){
            Route::get('/',  'market')->name('index');
            Route::get('/barang', 'barang')->name('barang.index');
            Route::get('detail-barang', 'detailBarang')->name('barang.detail');
            Route::get('/notifikasi', 'notifikasi')->name('notifikasi');
            Route::get('/checkout', 'checkout')->name('checkout');
            Route::get('/transaction', 'transaction')->name('transaction');
});

