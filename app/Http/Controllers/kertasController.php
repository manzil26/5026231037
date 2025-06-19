<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class kertasController extends Controller
{
    //
    public function index_3()
    {
        //mengambil data dari tabel penggaris
        $kertas = DB::table('kertas')->paginate(10);
        ;
        // menggirim data penggaris ke view index
        return view('data_kertas/kertas', ['kertas' => $kertas]);



    }
    public function tambah()
    {
        // memanggil view tambah
        return view('data_kertas/kertas-tambah');
    }



    // method untuk insert data ke table
    public function store(Request $request)
    {
        // insert data ke tabel penggaris
        DB::table('kertas')->insert(
            [
                'merkkertas' => $request->nama,
                'hargakertas' => $request->harga,
                'tersedia' => $request->tersedia,
                'berat' => $request->berat
            ]
        );
        return redirect('/kertas');
    }

    // method untuk edit data
    public function edit($id)
    {
        // mengambil data penggaris berdasarkan id yang dipilih
        $kertas = DB::table('kertas')->where('id', $id)->get();
        // passing data peggaris yang didapat ke view penggaris-edit.blade.php
        return view('data_kertas/kertas-edit', ['kertas' => $kertas]);

    }

    // update data pegawai
    public function update(Request $request)
    {
        // update data pegawai
        DB::table('kertas')->where('id', $request->id)->update([
            'merkkertas' => $request->nama,
            'hargakertas' => $request->harga,
            'tersedia' => $request->ketersediaan,
            'berat' => $request->berat
        ]);
        // alihkan halaman ke halaman pegawai
        return redirect('/kertas');
    }

    // method untuk hapus data
    public function hapus($id)
    {
        // menghapus data  berdasarkan id yang dipilih
        DB::table('kertas')->where('id', $id)->delete();

        // alihkan halaman ke halaman
        return redirect('/kertas');
    }

    public function cari(Request $request)
    {
        // menangkap data pencarian
        $cari = $request->cari;

        // mengambil data dari table pegawai sesuai pencarian data
        $kertas = DB::table('kertas')
            ->where('merkkertas', 'like', "%" . $cari . "%")
            ->paginate();

        // mengirim data pegawai ke view index
        return view('data_kertas/kertas', ['kertas' => $kertas]);

    }

}
