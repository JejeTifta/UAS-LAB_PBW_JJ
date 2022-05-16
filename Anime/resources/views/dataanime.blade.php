@extends('template')
@section('title', 'Anime J')

@section('konten')
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script src="http://getbootstrap.com/dist/js/bootstrap.min.js"></script>
<img src="https://www.google.com/url?sa=i&url=https%3A%2F%2Fwall.alphacoders.com%2Fbig.php%3Fi%3D1022371&psig=AOvVaw0xK0owYO7vo2dJ3p9wLWZ-&ust=1652542430918000&source=images&cd=vfe&ved=0CAwQjRxqFwoTCNDRs6zo3PcCFQAAAAAdAAAAABAI">

<div class="container">
    <h2> Daftar Anime </h2>
	<div class="row">
        <div class="table-responsive">                
            <table id="mytable" class="table table-bordred table-striped">
                <thead>
                    <th>id</th>
                    <th>judul Anime</th>
                    <th>genre</th>
                    <th>tahun Rilis</th>
                    
                </thead>
            <tbody> 
                @foreach($anime as $anm)
                <tr>
                    <td>{{$anm->id}}</td>
                    <td>{{$anm->judul}}</td>
                    <td>{{$anm->genre}}</td>
                    <td>{{$anm->tahun}}</td>
                    
                    <td>
                        <a href="/anime/edit/{{ $anm->genre}}">Edit</a>
                        <a style="color:red;" href="/anime/hapus/{{ $anm->genre}}">Hapus</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection