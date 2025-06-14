<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PenggarisController extends Controller
{
    public function index_3()
    {
        //mengambil data dari tabel penggaris
        $penggaris = DB::table('penggaris')->paginate(10);
        ;
        // menggirim data penggaris ke view index
        return view('data_penggaris/penggaris', ['penggaris' => $penggaris]);



    }
    public function tambah()
    {
        // memanggil view tambah
        return view('data_penggaris/penggaris-tambah');
    }



    // method untuk insert data ke table
    public function store(Request $request)
    {
        // insert data ke tabel penggaris
        DB::table('penggaris')->insert(
            [
                'merekpenggaris' => $request->nama,
                'hargapenggaris' => $request->harga,
                'tersedia' => $request->tersedia,
                'berat' => $request->berat
            ]
        );
        return redirect('/penggaris');
    }

    // method untuk edit data
    public function edit($id)
    {
        // mengambil data penggaris berdasarkan id yang dipilih
        $penggaris = DB::table('penggaris')->where('penggaris_id', $id)->get();
        // passing data peggaris yang didapat ke view penggaris-edit.blade.php
        return view('data_penggaris/penggaris-edit', ['penggaris' => $penggaris]);

    }

    // update data pegawai
    public function update(Request $request)
    {
        // update data pegawai
        DB::table('penggaris')->where('penggaris_id', $request->id)->update([
            'merekpenggaris' => $request->nama,
            'hargapenggaris' => $request->harga,
            'tersedia' => $request->ketersediaan,
            'berat' => $request->berat
        ]);
        // alihkan halaman ke halaman pegawai
        return redirect('/penggaris');
    }

    // method untuk hapus data
    public function hapus($id)
    {
        // menghapus data  berdasarkan id yang dipilih
        DB::table('penggaris')->where('penggaris_id', $id)->delete();

        // alihkan halaman ke halaman
        return redirect('/penggaris');
    }

    public function cari(Request $request)
    {
        // menangkap data pencarian
        $cari = $request->cari;

        // mengambil data dari table pegawai sesuai pencarian data
        $penggaris = DB::table('penggaris')
            ->where('merekpenggaris', 'like', "%" . $cari . "%")
            ->paginate();

        // mengirim data pegawai ke view index
        return view('data_penggaris/penggaris', ['penggaris' => $penggaris]);

    }


}
