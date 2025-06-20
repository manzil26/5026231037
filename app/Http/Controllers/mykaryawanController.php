<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class mykaryawanController extends Controller
{
    //

    public function index_4()
    {
        //mengambil data dari tabel
        $mykaryawan = DB::table('mykaryawan')->get();
        ;
        // menggirim data pke view index
        return view('data_eas/index_1', ['mykaryawan' => $mykaryawan]);



    }




    // method untuk insert data ke table
    public function store(Request $request)
    {
        DB::table('mykaryawan')->insert([
            'kodepegawai' => $request->kodepegawai,
            'namalengkap' => $request->namalengkap,
            'divisi' => $request->divisi,
            'departemen' => $request->departemen
        ]);
        return redirect('/index_eas');
    }


    // method untuk edit data
    public function edit($kodepegawai)
    {
        $pg = DB::table('mykaryawan')->where('kodepegawai', $kodepegawai)->first(); // ambil satu baris saja
        return view('data_eas.mykaryawan-edit', compact('pg'));
    }

    public function view($kodepegawai)
    {
        $pg = DB::table('mykaryawan')->where('kodepegawai', $kodepegawai)->first(); // ambil satu baris saja
        return view('data_eas.mykaryawan-edit', compact('pg'));
    }
    // update data pegawai
    public function update(Request $request)
    {
        DB::table('mykaryawan')->where('kodepegawai', $request->kodepegawai)->update([
            'namalengkap' => $request->namalengkap,
            'divisi' => $request->divisi,
            'departemen' => $request->departemen
        ]);
        return redirect('/index_eas');
    }


}
