<?php

use App\Http\Controllers\KaryawanController1;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Link;
use App\Http\Controllers\PegawaiController;
//use App\Http\Controllers\Pegawai2Controller;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\keranjangbelanjaController;
use App\Http\Controllers\PenggarisController;
use App\Http\Controllers\kertasController;
use App\Http\Controllers\KaryawanController;
use App\Http\Controllers\KeranjangbelanjaController2;
use App\Http\Controllers\pageCounterController;


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


Route::get('template', function () {
    return view('template');
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
Route::get('/pegawai/cari', [PegawaiController::class, 'cari']);

//tugas tabel penggaris
Route::get('/penggaris', [PenggarisController::class, 'index_3']);
Route::get('/penggaris/penggaris-tambah', [PenggarisController::class, 'tambah']);
Route::post('/penggaris/store', [PenggarisController::class, 'store']);
Route::get('/penggaris/penggaris-edit/{penggaris_id}', [PenggarisController::class, 'edit']);
Route::post('/penggaris/update', [PenggarisController::class, 'update']);
Route::get('/penggaris/hapus/{pegawai_id}', [PenggarisController::class, 'hapus']);
Route::get('/penggaris/cari', [PenggarisController::class, 'cari']);


// keranjang belanja
Route::get('/keranjangbelanja', [keranjangbelanjaController::class, 'index_4']);
Route::get('/keranjangbelanja/keranjang-tambah', [keranjangbelanjaController::class, 'keranjangtambah']);
Route::post('/keranjangbelanja/store', [keranjangbelanjaController::class, 'store']);
Route::get('/keranjangbelanja/hapus/{id}', [keranjangbelanjaController::class, 'hapus']);
Route::get('/keranjangbelanja/cari', [keranjangbelanjaController::class, 'cari']);


// CRUD Karyawan - punya bara (genap)
Route::get('/karyawan', [KaryawanController::class, 'index_5']);
Route::get('/karyawan/tambah', [KaryawanController::class, 'tambah']);
Route::post('/karyawan/store', [KaryawanController::class, 'store']);
Route::get('/karyawan/hapus/{id}', [KaryawanController::class, 'hapus']);
Route::get('/karyawan/cari', [KaryawanController::class, 'cari']);

//keranjang belanja 2 - punya amel
Route::get('/keranjangbelanja2', [KeranjangbelanjaController2::class, 'index']);
Route::get('/keranjangbelanja2/beli', [KeranjangbelanjaController2::class, 'beli']);
Route::post('/keranjangbelanja2/store', [KeranjangbelanjaController2::class, 'store']);
Route::get('/keranjangbelanja2/batal/{id}', [KeranjangbelanjaController2::class, 'batal']);

// karyawan punya mario (ganjil)

Route::get('/karyawan1', [KaryawanController1::class, 'index']);
Route::get('/karyawan1/tambah', [KaryawanController1::class, 'tambah']);
Route::post('/karyawan1/store', [KaryawanController1::class, 'store']);
Route::get('/karyawan1/hapus/{kodepegawai}', [KaryawanController1::class, 'hapus']);


// coba belajar
Route::get('/latihan2', [pageCounterController::class, 'index']);

//coba kertas (coba belajar )
Route::get('/kertas', [kertasController::class, 'index_3']);
Route::get('/kertas/kertas-tambah', [kertasController::class, 'tambah']);
Route::post('/kertas/store', [kertasController::class, 'store']);
Route::get('/kertas/kertas-edit/{kertas_id}', [kertasController::class, 'edit']);
Route::post('/kertas/update', [kertasController::class, 'update']);
Route::get('/kertas/hapus/{pegawai_id}', [kertasController::class, 'hapus']);
Route::get('/kertas/cari', [kertasController::class, 'cari']);


