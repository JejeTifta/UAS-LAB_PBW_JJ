<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class AnimeController extends Controller
{
    public function readdata()
    {
        //mau ambil data dari tabel mahasiswa
        $anime= DB::table('anime')->get();

        // mengirim ke halaman mahasiswa untuk ditampilkan data
        return view('dataanime',['anime'=>$anime]);
    }

    public function input()
    {
        return view('inputdata');
    }

    public function store(Request $request)
    {
        //memasukkan data kedalam databse
        DB::table('anime')->insert([
            'judul' => $request->judul,
            'genre' => $request->genre,
            'tahun' => $request->tahun
            
        ]);

        return redirect('/tampildata');
    }

    public function edit($genre)
    {
        #ambil data mahasiswa berdasarkan nim
        $anime = DB::table('anime')->where('genre', $genre)->get();

        #passing data
        return view('edit', ['anime' => $anime]);
    }

    public function update(Request $request)
    {
        DB::table('anime')->where('genre', $request->genre)->update([
            'judul' => $request->judul,
            'genre' => $request->judul,
            'tahun' => $request->tahun
        ]);

        return redirect('/tampildata');
    }

    public function hapus($genre)
    {
        DB::table('anime')->where('genre', $genre)->delete();

        return redirect('/tampildata');
    }

}