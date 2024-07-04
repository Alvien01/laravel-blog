<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ArtikelController extends Controller
{
    public function show()
    {
        $articles = DB::table('artikel')->orderby('id', 'desc')->get();
        // return "Artikel Berhasil Ditambahkan";
        return view('show', ['articles'=>$articles]);
    }

    public function add_proses()
    {
        DB::table('artikel')->insert([
            'judul'=>$articles->judul,
            'deskripsi'=>$articles->deskripsi
        ]);
        return redirect()->action('ArtikelController@show');
    }
}
