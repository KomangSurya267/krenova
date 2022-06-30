<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\Admin;
use App\Http\Controllers\Pengguna;
use App\Http\Controllers\Layout;

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
    return view('admin.view_login');
});

//Route::get('login',[LoginController::class, 'index'])->name('login');


Route::controller(LoginController::class)->group(function()
{
    Route::get('login', 'index')->name('login');
    Route::post('login/proses', 'proses');
    Route::get('logout', 'logout');
    
});

Route::group(['middleware' => ['auth']], function(){
    Route::group(['middleware' => ['cekUserLogin:1']], function(){
        Route::get('/admin/user', [Admin::class, 'user'])->name('admin.user');
        Route::resource('admin', Admin::class);
    });

    Route::group(['middleware' => ['cekUserLogin:0']], function(){
        Route::resource('pengguna', Pengguna::class);
    });
});


Route::controller(RegisterController::class)->group(function()
{
    Route::get('register', 'index')->name('register');
    Route::get('/register/create', 'create')->name('register');;
    Route::post('/register/simpan', 'save');
});

// Route::get('/', [Layout::class, 'home']);

Route::controller(Layout::class)->group(function () {
    Route::get('/layout/home', 'home');
    Route::get('/layout/index', 'index');
});

// Route::get('/admin/index', [Admin::class, 'index'])->name('admin.index');

Route::controller(Admin::class)->group(function () {
    Route::get('/admin/user', 'user')->name('admin.user');
    Route::get('/admin/create2', 'create2');
});

Route::controller(Pengguna::class)->group(function () {
    Route::get('/pengguna', 'index');
    Route::get('/informasi', 'informasi');
    Route::get('/galeri', 'galeri');
    Route::get('/pendaftaran', 'pendaftaran');
    Route::get('/tambah', 'tambah');
    Route::get('/gokart', 'gokart');
    Route::get('/sirup', 'sirup');
    Route::get('/keripik', 'keripik');
    Route::get('/oppa', 'oppa');
    Route::get('/pintu', 'pintu');
    Route::get('/paprokes', 'paprokes');
    Route::get('/nugget', 'nugget');
    Route::get('/quizku', 'quizku');
    Route::get('/oil', 'oil');
});


//     // Route::get('/admin/index', 'index')->name('admin.index');
//     Route::get('/admin/tambah', 'create');
//     Route::post('/admin/simpan', 'save');
//     Route::get('/admin/edit/{id}', 'edit')->name('admin.edit');
//     Route::put('/admin/update/{id}', 'update')->name('admin.update');
//     Route::delete('/admin/hapus/{id}', 'hapus');
  
