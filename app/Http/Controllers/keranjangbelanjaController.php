<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class keranjangbelanjaController extends Controller
{
    //
    public function index_4()
    {
        //mengambil data dari tabel
        $keranjangbelanja = DB::table('keranjangbelanja')->paginate(10);
        ;
        // menggirim data pke view index
        return view('keranjangbelanja', ['keranjangbelanja' => $keranjangbelanja]);



    }

    public function keranjangtambah()
    {
        // memanggil view tambah
        return view('keranjang-tambah');
    }
    // method untuk insert data ke table
    public function store(Request $request)
    {
        // insert data ke tabel
        DB::table('keranjangbelanja')->insert(
            [
                'kodebarang' => $request->kodebarang,
                'jumlah' => $request->jumlah,
                'harga' => $request->harga,
            ]
        );
        return redirect('/keranjangbelanja');
    }

    public function hapus($id) // pegawai/hapus/{pegawai_id}
    {
        // menghapus data pegawai berdasarkan id yang dipilih
        DB::table('keranjangbelanja')
            ->where('id', $id)
            ->delete();

        // alihkan halaman ke halaman pegawai
        return redirect('/keranjangbelanja');
    }
}
