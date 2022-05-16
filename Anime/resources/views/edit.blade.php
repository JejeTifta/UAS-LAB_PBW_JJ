@extends('template')
@section('title', 'Edit Anime J')

@section('konten')
    @foreach($anime as $anm)
        <form action="/anime/update" method ="post">
            {{csrf_field()}}
            Judul Anime <br>  <input type=text, name="judul", required="required", value="{{$anm->judul}}"><br>
            Genre <br> <input type=text, name="genre", required="required", value="{{$anm->genre}}"><br>
            Tahun Rilis <br><input type=text, name="tahun", required="required", value="{{$anm->tahun}}"><br>
            <input type="submit" value="Simpan Data">
        </form>
    @endforeach
@endsection