<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use \Illuminate\Http\Response;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\DB;
use App\Models\Articel;
class ArtikelController extends Controller
{
    public function show()
    {
        $articles = DB::table('artikel')->orderby('id', 'desc')->get();
        return view('show', ['articles'=>$articles]);
    }
 
    public function add_process(Request $article)
    {
        DB::table('artikel')->insert([
            'judul'=>$article->judul,
            'deskripsi'=>$article->deskripsi
        ]);
        return redirect()->action('ArtikelController@show');
    }
    // public function detail($id)
    // {
    //     $article = DB::table('artikel')->where('id', $id)->first();
    //     return view('detail', ['article'=>$article]);
    // }
    // public function show_by_admin()
    // {
    //     $articles = DB::table('artikel')->orderby('id', 'desc')->get();
    //     return view('adminshow', ['articles'=>$articles]);
    // }
}