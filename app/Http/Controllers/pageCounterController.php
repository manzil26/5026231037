<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Post;


class pageCounterController extends Controller
{
    //

    public function index()
    {
        DB::table('pagecounter')
            ->where('id', 1)
            ->increment('jumlah');

        $pagecounter = DB::table('pagecounter')->where('id', 1)->first();
        return view('coba', ['pagecounter' => $pagecounter]);

    }

}

