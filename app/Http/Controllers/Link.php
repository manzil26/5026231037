<?php

//namespces di java itu package jadi sebelum memanggil nama kelas harus ada package
// namespace di laravel itu adalah folder
namespace App\Http\Controllers;


use Illuminate\Http\Request;

// kelasnya gak ada kelas extends atau public
class Link extends Controller
{
    //
    public function helloword()
    {
        return view('blog');
    }

    public function index()
    {
        $nama = "Diki Alfarabi Hadi";
        $umur = 35;
        $alamat = "Surabaya";
        //parameter lebih dari satu
        $pelajaran = ["Algoritma & Pemrograman", "Kalkulus", "Pemrograman Web"];
        return view(
            'biodata',
            [
                'nama' => $nama,
                'usia' => $umur,
                'alamat' => $alamat,
                'matkul' => $pelajaran,

            ]
        );






    }
}
