<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!

|Route::get('/response-json', function () {
    return response()->json([
        'info' => 'Berhasil mendapatkan data',
        'data' => 'ini adalah data dari route yang dipanggil'
    ]);    
*/
Route::get('/response-json', function () {
    return response()->json([
        'info' => 'Berhasil mendapatkan data',
        'menu' => [
            ['no' => 0, 'makanan' => 'Soto Mie', 'harga' => '8000'],
            ['no' => 1, 'makanan' => 'Bakso Malang', 'harga' => '13000'],
            ['no' => 2, 'makanan' => 'Ketoprak', 'harga' => '15000']
        ]
    ]);
});

Route::get('/list-menu-bakso/{harga}', function ($harga) {
    return "Anda memilih makanan Bakso dengan harga $harga";
    
});

Route::get('/all-menu', function () {
    return "Ini adalah halaman yang menampilkan semua menu yang ada di Cafe Amandemy";
});