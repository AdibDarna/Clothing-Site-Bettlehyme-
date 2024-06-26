<?php

use App\Http\Controllers\WaveController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\SertifikatController;
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
Route::get('/linktree', function () {
    return view('misc.linktree');
});

Route::get('/', function () {
    return view('index');
});

Route::get('/admin/wave', [WaveController::class, 'index']);
Route::post('/admin/wave/store', [WaveController::class, 'store']);
Route::get('/admin/wave/{id}', [WaveController::class, 'destroy']);
Route::get('/admin/wave/make/{id}', [WaveController::class, 'makecatalogue']);

Route::get('/admin', [ProdukController::class, 'dashboard']);
Route::get('/admin/produk', [ProdukController::class, 'index']);
Route::post('/admin/produk/store', [ProdukController::class, 'store']);
Route::get('/admin/produk/{id}', [SertifikatController::class, 'store']);
Route::post('/admin/produk/thumbnail', [ProdukController::class, 'thumbnail']);

Route::get('/admin/sertifikat', [SertifikatController::class, 'index']);
Route::get('/admin/genQR/{id}', [SertifikatController::class, 'downloadQR']);


Route::get('/adminlogin', [LoginController::class, 'index']);
Route::post('/adminlogin/login', [LoginController::class, 'login']);
Route::post('/logout', function () {
    auth()->logout();
    request()->session()->invalidate();
    request()->session()->regenerateToken();

    return redirect('/adminlogin');
})->name('logout');


Route::get('/collection', [ProdukController::class, 'catalogue']);

Route::get('/collectionDetail/{id}', [ProdukController::class, 'catalogueDetail']);

Route::get('/catalogueSertif/{id}', [SertifikatController::class, 'sertifCheck']);
Route::get('/inputSertif/{id}', [SertifikatController::class, 'inputSertif']);
Route::post('/storeSertif', [SertifikatController::class, 'storeSertif']);

Route::post('/inputcomment', [ProdukController::class, 'inputComment']);


Route::get('/catalogue/{id}', [ProdukController::class, 'itemDetail']);

