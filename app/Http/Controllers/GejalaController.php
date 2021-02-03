<?php

namespace App\Http\Controllers;

use App\Gejala;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class GejalaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       // mengambil data dari table gejala
    	$gejala = DB::table('gejala')->get();
 
    	// mengirim data gejala ke view index
    	return view('index',['gejala' => $gejala]); //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    
     // method untuk menampilkan view form tambah gejala
    public function tambah()
    {
        // memanggil view tambah
        return view('tambah');
    } 
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // insert data ke table gejala
	     DB::table('gejala')->insert([
		'kd_gejala' => $request->kd_gejala,
		'nama_gejala' => $request->nama_gejala,
		'bobot' => $request->bobot,
		
	]);
	// alihkan halaman ke halaman gejala
	return redirect('/gejala');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Gejala  $gejala
     * @return \Illuminate\Http\Response
     */
    public function show(Gejala $gejala)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Gejala  $gejala
     * @return \Illuminate\Http\Response
     */
    public function edit($kd_gejala)
    {
       	// mengambil data gejala berdasarkan id yang dipilih
	$gejala = DB::table('gejala')->where('kd_gejala',$kd_gejala)->get();
	// passing data gejala yang didapat ke view edit.blade.php
	return view('edit',['gejala' => $gejala]); //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Gejala  $gejala
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        // update data gejala
	    DB::table('gejala')->where('kd_gejala',$request->kd_gejala)->update([
		'nama_gejala' => $request->nama_gejala,
		'bobot' => $request->bobot,
		
	]);
	// alihkan halaman ke halaman gejala
	return redirect('/gejala');
    }


    // method untuk hapus data gejala
    public function hapus($kd_gejala)
    {
        // menghapus data pegawai berdasarkan id yang dipilih
        DB::table('gejala')->where('kd_gejala',$kd_gejala)->delete();
            
        // alihkan halaman ke halaman pegawai
        return redirect('/gejala');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Gejala  $gejala
     * @return \Illuminate\Http\Response
     */
    public function destroy(Gejala $gejala)
    {
        //
    }
}
