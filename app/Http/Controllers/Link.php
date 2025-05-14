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
}
