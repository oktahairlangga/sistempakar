<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        return view('welcome');
    }
 
    public function gejala()
    {
        return redirect('gejala.index');
    }
 
    public function penyakit()
    {
        return view('penyakit.index');
    }
    public function diagnosis()
    {
        return view('diagnosis.index');
    }
    public function hasil()
    {
        return view('hasil.index');
    }
}
