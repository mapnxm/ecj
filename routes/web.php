<?php

use App\Http\Controllers\admin;
use App\Http\Controllers\login;
use App\Http\Controllers\mahasiswa;
use App\Http\Controllers\Tugas;
use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('index');
// });


Route::get('/logout',[login::class, 'logout']);
Route::get('/',[login::class, 'index']);
Route::post('/loginproses',[login::class, 'login']);

Route::middleware(['admin'])->group(function(){
    Route::put('{id}',[admin::class, 'edit']);
    Route::get('{id}/edit',[admin::class, 'update']);
    Route::post('/store', [admin::class,'store']);
    Route::put('{id}/nilai',[admin::class, 'nilai']);
    Route::get('{id}/downloadD',[admin::class,'downloadD']);
    Route::get('{id}/downloadA',[admin::class,'downloadA']);
    Route::get('{id}/hapustgs',[admin::class,'hapustgs']);
    Route::get('{id}/hapusakun',[admin::class,'hapusakun']);
    Route::get('/list-mahasiswa', [admin::class, 'list']);
    Route::get('/admin',[admin::class, 'admin'])->name('admin');
    // Route::get('/logoutA',[login::class, 'logout']);
});

Route::middleware(['mahasiswa'])->group(function(){
    Route::get('/hasil',[mahasiswa::class, 'index']);
    Route::get('/cari',[mahasiswa::class, 'cari']);
    Route::get('upload/{id}', [Tugas::class, 'isiTgs']);
    Route::post('/uploadhasil',[mahasiswa::class, 'upload']);
    Route::get('{id}/deltgs',[Tugas::class,'hapustgs']);
});
Route::middleware(['auth'])->group(function(){

});



























Route::get('home', function () {
    return view('home');
});

// Route::get('hasil', function () {
//     return view('hasil-siswa');
// });

// Route::get('admin', function () {
//     return view('admin-home');
// });
// Route::get('list-mahasiswa', function () {
//     return view('admin-mahasiswa');
// });
Route::get('list-tugas', function () {
    return view('admin-tugas');
});
Route::get('edit', function () {
    return view('edit');
});
