<?php

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

Route::get('produk', function () {
    return 'ini produk';
});

Route::get('produk/{id_produk}', function ($id_produk) {
    return 'produk anda dengan id '.$id_produk;
});

Route::get('produkers', function () {
    return 'ini produk';
})->name('produkers');

Route::get('test', function () {
    return redirect()->route('produkers');
});

Route::view('/','hello',[
    'nama'=>'Nizar',
]);

Route::get('/', function () {
    return view('hello',[
        'nama'=>'Nizar',
    ]);
});

use App\Http\Controllers\hellocontroller;

Route::get('/halo', [hellocontroller::class, 'index']);

use App\Http\Controllers\helloocontroller;

Route::get('/halo/{name}', [helloocontroller::class, 'halo']);

use App\Http\Controllers\ProfilController;

Route::get('/profil', [ProfilController::class,'index']);


