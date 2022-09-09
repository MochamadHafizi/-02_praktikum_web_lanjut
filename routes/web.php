<?php

use App\Http\Controllers\HomeController;
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

Route::get('/', function () {
    return 'Selamat Datang';
});
Route::get('/about', function(){
    return '
    Nim : 2221771008<br>
    Nama : Mochamad Hafizi<br>
    Kelas : PLS 1-A
    ';
});
    Route::prefix('/articles')->group(function (){
        Route::get('1', function(){
            return 'Sepakbola<br>
            Pengertian sepak bola menurut Kamus Besar Bahasa Indonesia (KBBI) adalah permainan beregu di lapangan, menggunakan bola sepak dari dua kelompok yang berlawanan, yang masing-masing terdiri atas sebelas pemain, berlangsung selama 2x45 menit, kemenangan ditentukan oleh selisih gol yang masuk ke gawang lawan.
            ';
        });
        Route::get('2', function(){
            return 'Basket<br>
            basket adalah olahraga bola berkumpul menjadi kelompok yang terdiri atas dua tim beranggota masing-masing lima orang yang saling bertanding mencetak poin dengan memasukkan bola ke dalam keranjang lawan.
            ';
        });
    });