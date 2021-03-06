<?php

namespace App\Http\Controllers;

use App\Relasi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RelasiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // mengambil data dari table relasi
    	$relasi = DB::table('relasi')->get();
 
    	// mengirim data relasi ke view index
    	return view('relasi.index',['relasi' => $relasi]); //
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Relasi  $relasi
     * @return \Illuminate\Http\Response
     */
    public function show(Relasi $relasi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Relasi  $relasi
     * @return \Illuminate\Http\Response
     */
    public function edit(Relasi $relasi)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Relasi  $relasi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Relasi $relasi)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Relasi  $relasi
     * @return \Illuminate\Http\Response
     */
    public function destroy(Relasi $relasi)
    {
        //
    }
}
