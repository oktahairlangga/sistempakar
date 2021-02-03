<?php

namespace App\Http\Controllers;

use App\Tanda;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class TandaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       // mengambil data dari table tanda
    	$tanda = DB::table('tanda')->get();
 
    	// mengirim data tanda ke view index
    	return view('tanda.index',['tanda' => $tanda]); //
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
     * @param  \App\Tanda  $tanda
     * @return \Illuminate\Http\Response
     */
    public function show(Tanda $tanda)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Tanda  $tanda
     * @return \Illuminate\Http\Response
     */
    public function edit(Tanda $tanda)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Tanda  $tanda
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tanda $tanda)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Tanda  $tanda
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tanda $tanda)
    {
        //
    }
}
