<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Link;
use App\Http\Controllers\PegawaiController;
//use App\Http\Controllers\Pegawai2Controller;
use App\Http\Controllers\BlogController;


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
// dari router dan ini dibutuhkan ketika butuh logika
Route::get('hello', [Link::class, 'helloword']);

//URI (Uniform Resource Identifier)
//Ini berarti saat kamu buka:
//http://localhost:8000/pertama
//ksi yang dilakukan saat URI /pertama diakses.
//Factory ini bertanggung jawab untuk membuat objek view dari file .blade.php di folder resources/views.  Laravel akan mencari file: resources/views/pertama.blade.php

//default
Route::get('pertama', function () {
    return view('pertama');
});


//route untuk frontend blade
Route::get('frontend', function () {
    return view('frontend');
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

Route::get('blogs', function () {
    return view('blog');
});


//route Link
Route::get('dosen', [Link::class, 'index']);


// route pegawai controller
//Route::get('pegawai/{nama}', [Pegawai2Controller::class, 'index']);
//Route::get('/formulir', [Pegawai2Controller::class, 'formulir']);
//Route::post('/formulir/proses', [Pegawai2Controller::class, 'proses']);


//route blog
Route::get('/blog', [BlogController::class, 'home']);
Route::get('/blog/tentang', [BlogController::class, 'tentang']);
Route::get('/blog/kontak', [BlogController::class, 'kontak']);


//crud pegawai
Route::get('/pegawai', [PegawaiController::class, 'index']);
Route::get('/pegawai/tambah', [PegawaiController::class, 'tambah']);
Route::post('/pegawai/store', [PegawaiController::class, 'store']);
Route::get('/pegawai/edit/{pegawai_id}', [PegawaiController::class, 'edit']);
Route::post('/pegawai/update', [PegawaiController::class, 'update']);
Route::get('/pegawai/hapus/{pegawai_id}', [PegawaiController::class, 'hapus']);
