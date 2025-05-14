<?php

use Illuminate\Support\Facades\Route;
// yang komen ini java
// import java.io;
// system.out.println();

// hanya bisa kembali di satu string
Route::get('/', function () {
    return view('welcome');
});


//Membuat Route Baru Laravel
Route::get('halo', function () {
    return "<h2>Halo, Selamat datang di tutorial laravel www.malasngoding.com</h2>";
});

//tidak ada garis bawah sehingga tidak ada garis bawah
// tidak butuh akses database
Route::get('blog', function () {
    return view('blog');
});

// sourcecodeny panjang
Route::get('hello', [Link::class, 'helloword']);

Route::get('pertama', function () {
    return view('pertama');
});
