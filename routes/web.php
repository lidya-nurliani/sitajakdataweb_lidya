<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DafkenController;
use App\Http\Controllers\BayarselanjutnyaController;
use App\Http\Controllers\BlmlunasController;
use App\Http\Controllers\SuratkuasaController;
use App\Http\Controllers\PerbaruanplatController;
use App\Http\Controllers\RegistController;

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
Route::post('/registrasi', [RegistController::class, 'index'])->name('registrasi');

Route::group(['middleware'=> ['auth','ceklevel:admin,user']], function () {

    //dafken
Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/index-dafken', [DafkenController::class, 'index'])->name('index-dafken');
Route::get('/create-dafken', [DafkenController::class, 'create'])->name('create-dafken');
Route::post('/simpan-dafken', [DafkenController::class, 'store'])->name('simpan-dafken');
Route::get('/edit-dafken/{id}', [DafkenController::class, 'edit'])->name('edit-dafken');
Route::post('/update-dafken/{id}', [DafkenController::class, 'update'])->name('update-dafken');
Route::get('/delete-dafken/{id}', [DafkenController::class, 'destroy'])->name('delete-dafken');

// blm lunas 
Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/index-blmlunas', [BlmlunasController::class, 'index'])->name('index-blmlunas');
Route::get('/create-blmlunas', [BlmlunasController::class, 'create'])->name('create-blmlunas');
Route::post('/simpan-blmlunas', [BlmlunasController::class, 'store'])->name('simpan-blmlunas');
Route::get('/edit-blmlunas/{id}', [BlmlunasController::class, 'edit'])->name('edit-blmlunas');
Route::post('/update-blmlunas/{id}', [BlmlunasController::class, 'update'])->name('update-blmlunas');
Route::get('/delete-blmlunas/{id}', [BlmlunasController::class, 'destroy'])->name('delete-blmlunas');

//selanjutnya
Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/index-bayarselanjutnya', [BayarselanjutnyaController::class, 'index'])->name('index-bayarselanjutnya');
Route::get('/create-bayarselanjutnya', [BayarselanjutnyaController::class, 'create'])->name('create-bayarselanjutnya');
Route::post('/simpan-bayarselanjutnya', [BayarselanjutnyaController::class, 'store'])->name('simpan-bayarselanjutnya');
Route::get('/edit-bayarselanjutnya/{id}', [BayarselanjutnyaController::class, 'edit'])->name('edit-bayarselanjutnya');
Route::post('/update-bayarselanjutnya/{id}', [BayarselanjutnyaController::class, 'update'])->name('update-bayarselanjutnya');
Route::get('/delete-bayarselanjutnya/{id}', [BayarselanjutnyaController::class, 'destroy'])->name('delete-bayarselanjutnya');

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