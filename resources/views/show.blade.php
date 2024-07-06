<!-- menggunakan kerangka dari halaman master.blade.php --> 
@extends('master')
 
<!-- membuat komponen title sebagai judul halaman -->
@section('title', 'Halaman Home')
 
<!-- membuat header dan tombol tambah artikel di atas -->
@section('header')
    <center>
        <a href="/add"><button class="btn btn-success">Tambah Artikel</button></a>
    </center>
@endsection
 
<!-- membuat komponen main yang berisi form untuk mengisi judul dan isi artikel -->
@section('main')
    @foreach ($articles as $article)
    <div class="col-md-4 col-sm-12 mt-4">
        <div class="card">
            <img src="https://atlantictravelsusa.com/wp-content/uploads/2016/04/dummy-post-horisontal-thegem-blog-default.jpg" class="card-img-top" alt="gambar" >
            <div class="card-body">
                <h5 class="card-title">{{ $article->judul }}</h5>
                <a href="{{ route('detail', $article->id) }}" class="btn btn-primary">Baca Artikel</a>
            </div>
        </div>
    </div>
   @endforeach
@endsection