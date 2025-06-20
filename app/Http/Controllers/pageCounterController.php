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

    //     public function index(){
//     $counter = DB::table('pagecounter')->where('ID', 1)->first();
//     $jumlahpengunjung = 0;
//     if ($counter) {
//         $newJumlah = $counter->Jumlah + 1;
//         DB::table('pagecounter')->where('ID', 1)->update(['Jumlah' => $newJumlah]);
//         $jumlahpengunjung = $newJumlah;
//     }

    //     return view('indexcounter', ['Jumlah' => $jumlahpengunjung]);
// }

}

