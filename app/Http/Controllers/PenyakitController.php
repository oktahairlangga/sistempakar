<?php

namespace App\Http\Controllers;

use App\Penyakit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PenyakitController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // mengambil data dari table penyakit
    	$penyakit = DB::table('penyakit')->get();
 
    	// mengirim data penyakit ke view index
    	return view('penyakit.index',['penyakit' => $penyakit]); //
    }

    public function tambah()
    {
        // memanggil view tambah
        return view('penyakit.tambah');
    } 

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
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
        // insert data ke table penyakit
	     DB::table('penyakit')->insert([
		'kd_penyakit' => $request->kd_penyakit,
		'nama_penyakit' => $request->nama_penyakit,
		'bobot' => $request->bobot,
		
	]);
	// alihkan halaman ke halaman penyakit
	return redirect('/penyakit');
    }

    public function edit($kd_penyakit)
    {
       	// mengambil data penyakit berdasarkan id yang dipilih
	$penyakit = DB::table('penyakit')->where('kd_penyakit',$kd_penyakit)->get();
	// passing data penyakit yang didapat ke view edit.blade.php
	return view('edit',['penyakit' => $penyakit]); //
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Penyakit  $penyakit
     * @return \Illuminate\Http\Response
     */
    public function show(Penyakit $penyakit)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Penyakit  $penyakit
     * @return \Illuminate\Http\Response
     */
  

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Penyakit  $penyakit
     * @return \Illuminate\Http\Response
     */

    public function update(Request $request)
    {
        // update data penyakit
	    DB::table('penyakit')->where('kd_penyakit',$request->kd_penyakit)->update([
		'nama_penyakit' => $request->nama_penyakit,
		'bobot' => $request->bobot,
		
	]);
	// alihkan halaman ke halaman penyakit
	return redirect('/penyakit');
    }

    // method untuk hapus data penyakit
    public function hapus($kd_penyakit)
    {
        // menghapus data pegawai berdasarkan id yang dipilih
        DB::table('penyakit')->where('kd_penyakit',$kd_penyakit)->delete();
            
        // alihkan halaman ke halaman pegawai
        return redirect('/penyakit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Penyakit  $penyakit
     * @return \Illuminate\Http\Response
     */
    public function destroy(Penyakit $penyakit)
    {
        //
    }
}
