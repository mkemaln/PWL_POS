<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\POSController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LevelController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\WelcomeController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [WelcomeController::class, 'index']);

// Page Level
Route::get('/level', [LevelController::class, 'index']);
Route::get('/level/create', [LevelController::class, 'create']);
Route::post('/level', [LevelController::class, 'store']);

// Page Kategori
Route::get('/kategori', [KategoriController::class, 'index']);
Route::get('/kategori/create', [KategoriController::class, 'create']);
Route::post('/kategori', [KategoriController::class, 'store']);
Route::get('/kategori/edit/{id}', [KategoriController::class, 'edit'])->name('kategori.edit');
Route::put('/kategori/edit_save/{id}', [KategoriController::class, 'edit_save']);
Route::get('/kategori/delete/{id}', [KategoriController::class, 'delete'])->name('kategori.delete');
Route::get('/kategori/delete_confirm/{id}', [KategoriController::class, 'delete_conf']);

// Page User
Route::get('/user', [UserController::class, 'index']);
Route::get('/user/tambah', [UserController::class, 'tambah']);
Route::post('/user/tambah_simpan', [UserController::class, 'tambah_simpan']);
Route::get('/user/ubah/{id}', [UserController::class, 'ubah']);
Route::put('/user/ubah_simpan/{id}', [UserController::class, 'ubah_simpan']);
Route::get('/user/hapus/{id}', [UserController::class, 'hapus']);

// jobsheet 6 CRUD
Route::resource('m_user', POSController::class);

// route jobsheet 7 
// refined user page
Route::group(['prefix' => 'user'], function() {
    Route::get('/', [UserController::class, 'index']);              // menampilkan halaman awal user
    Route::post('/list', [UserController::class, 'list']);          // menampilkan data user dalam bentuk json untuk datatables
    Route::get('/create', [UserController::class, 'create']);       // menampilkan halaman form tambah user
    Route::post('/', [UserController::class, 'store']);             // menyimpan data user baru
    Route::get('/{id}', [UserController::class, 'show']);           // menampilkan detail user
    Route::get('/{id}/edit', [UserController::class, 'edit']);      // menampilkan halaman form edit user
    Route::put('/{id}', [UserController::class, 'update']);         // menyimpan perubahan data user
    Route::delete('/{id}', [UserController::class, 'destroy']);     // menghapus data user
});


