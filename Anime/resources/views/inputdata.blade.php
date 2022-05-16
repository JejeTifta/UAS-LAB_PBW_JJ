@extends('template')
@section('title', 'Input Data Mahasiswa')

@section('konten')
    <form action="/anime/store" method ="post">
        {{csrf_field()}}
        Judul Anime <br>  <input type=text, name="judul", required="required"><br>
        genre <br> <input type=text, name="genre", required="required"><br>
        Tahun <br><input type=text, name="tahun", required="required"><br>
        <input type="submit" value="Simpan Data">
    </form>

@endsection