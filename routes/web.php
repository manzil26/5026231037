<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Link;

// yang komen ini java
// import java.io;
// system.out.println();

// hanya bisa kembali di satu string
Route::get('/', function () {
    return view('welcome');
});

Route::get('frontend', function () {
    return view('frontend');
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
// dari router dan ini dibutuhkan ketika butuh logika
Route::get('hello', [Link::class, 'helloword']);

//URI (Uniform Resource Identifier)
//Ini berarti saat kamu buka:
//http://localhost:8000/pertama
//ksi yang dilakukan saat URI /pertama diakses.
//Factory ini bertanggung jawab untuk membuat objek view dari file .blade.php di folder resources/views.  Laravel akan mencari file: resources/views/pertama.blade.php

Route::get('pertama', function () {
    return view('pertama');
});

Route::get(
    'boostrap1',
    function () {
        return view('boostrap1');
    }
);

Route::get('cobapertama', function () {
    return view('cobapertama');
});

Route::get('idx', function () {
    return view('idx');
});

Route::get('boostrap1', function () {
    return view('boostrap1');
});

Route::get('cobapertama', function () {
    return view('cobapertama');
});

Route::get('js1', function () {
    return view('js1');
});

Route::get('js2', function () {
    return view('js2');
});
Route::get('linktree', function () {
    return view('linktree');
});
Route::get('pertemuan4', function () {
    return view('pertemuan4');
});


Route::get('template1', function () {
    return view('template1');
});

Route::get('index', function () {
    return view('index');
});
