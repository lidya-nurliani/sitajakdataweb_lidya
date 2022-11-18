<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DafkenController;
use App\Http\Controllers\BlmbayarController;
use App\Http\Controllers\BayarpajakController;
use App\Http\Controllers\SuratkuasaController;
use App\Http\Controllers\PerbaruanplatController;

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

Auth::routes();
Route::get('/home', [HomeController::class, 'index'])->name('home');

// Route::get('/registrasi', [LoginController::class, 'registrasi'])->name('registrasi');
// Route::post('/simpanregistrasi', [LoginController::class, 'simpanregistrasi'])->name('simpanregistrasi');
// Route::get('/login', [LoginController::class, 'halamanlogin'])->name('login');
// Route::post('/postlogin', [LoginController::class, 'postlogin'])->name('postlogin');
// Route::post('/logout', [LoginController::class, 'logout'])->name('logout');


Route::group(['middleware'=> ['auth','ceklevel:admin,user']], function () {

    //dafken
Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/index-dafken', [DafkenController::class, 'index'])->name('index-dafken');
Route::get('/create-dafken', [DafkenController::class, 'create'])->name('create-dafken');
Route::post('/simpan-dafken', [DafkenController::class, 'store'])->name('simpan-dafken');
Route::get('/edit-dafken/{id}', [DafkenController::class, 'edit'])->name('edit-dafken');
Route::post('/update-dafken/{id}', [DafkenController::class, 'update'])->name('update-dafken');
Route::get('/delete-dafken/{id}', [DafkenController::class, 'destroy'])->name('delete-dafken');

//bayarpajak sudah byr
Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/index-bayarpajak', [BayarpajakController::class, 'index'])->name('index-bayarpajak');
Route::get('/create-bayarpajak', [BayarpajakController::class, 'create'])->name('create-bayarpajak');
Route::post('/simpan-bayarpajak', [BayarpajakController::class, 'store'])->name('simpan-bayarpajak');
Route::get('/edit-bayarpajak/{id}', [BayarpajakController::class, 'edit'])->name('edit-bayarpajak');
Route::post('/update-bayarpajak/{id}', [BayarpajakController::class, 'update'])->name('update-bayarpajak');
Route::get('/delete-bayarpajak/{id}', [BayarpajakController::class, 'destroy'])->name('delete-bayarpajak');

//blm bayar
Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/index-blmbayar', [BlmbayarController::class, 'index'])->name('index-blmbayar');
Route::get('/create-blmbayar', [BlmbayarController::class, 'create'])->name('create-blmbayar');
Route::post('/simpan-blmbayar', [BlmbayarController::class, 'store'])->name('simpan-blmbayar');
Route::get('/edit-blmbayar/{id}', [BlmbayarController::class, 'edit'])->name('edit-blmbayar');
Route::post('/update-blmbayar/{id}', [BlmbayarController::class, 'update'])->name('update-blmbayar');
Route::get('/delete-blmbayar/{id}', [BlmbayarController::class, 'destroy'])->name('delete-blmbayar');

//suratkuasa
Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/index-suratkuasa', [SuratkuasaController::class, 'index'])->name('index-suratkuasa');
Route::get('/create-suratkuasa', [SuratkuasaController::class, 'create'])->name('create-suratkuasa');
Route::post('/simpan-suratkuasa', [SuratkuasaController::class, 'store'])->name('simpan-suratkuasa');
Route::get('/edit-suratkuasa/{id}', [SuratkuasaController::class, 'edit'])->name('edit-suratkuasa');
Route::post('/update-suratkuasa/{id}', [SuratkuasaController::class, 'update'])->name('update-suratkuasa');
Route::get('/delete-suratkuasa/{id}', [SuratkuasaController::class, 'destroy'])->name('delete-suratkuasa');

//perbaruan plat
Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/index-perbaruanplat', [PerbaruanplatController::class, 'index'])->name('index-perbaruanplat');
Route::get('/create-perbaruanplat', [PerbaruanplatController::class, 'create'])->name('create-perbaruanplat');
Route::post('/simpan-perbaruanplat', [PerbaruanplatController::class, 'store'])->name('simpan-perbaruanplat');
Route::get('/edit-perbaruanplat/{id}', [PerbaruanplatController::class, 'edit'])->name('edit-perbaruanplat');
Route::post('/update-perbaruanplat/{id}', [PerbaruanplatController::class, 'update'])->name('update-perbaruanplat');
Route::get('/delete-perbaruanplat/{id}', [PerbaruanplatController::class, 'destroy'])->name('delete-perbaruanplat');

});