<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DiagnosisController extends Controller
{
    public function index()
    {
      // mengambil data dari table gejala
    	$diagnosis = DB::table('diagnosis')->get();
        $gejala = DB::table('gejala')->get();
    	// mengirim data gejala ke view index
    	return view('diagnosis.index',['diagnosis' => $diagnosis],['gejala' => $gejala]); //
    
    }//
    
    public function store(Request $request)
    {
       
      
            DB::table('diagnosis')->truncate();   
            $checkBox = $request->G ;

            for ($i=0; $i<sizeof($checkBox); $i++)
            {
                $r=DB::table('gejala')->where('kd_gejala',$checkBox[$i])->first();
                $ck = $r->bobot;
                DB::table('diagnosis')->insert([
                    'kd_gejala' => $checkBox[$i],
                    'b_pakar' => $ck,
                    ]);  
            } 
       
            return redirect('/hasil');

    }//

}
