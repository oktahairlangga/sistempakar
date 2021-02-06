<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HasilController extends Controller
{
    public function index()
    {
        DB::table('coba')->truncate();
        DB::table('hitung')->truncate();
        $count = DB::table('diagnosis')->count();
        $diagnosis = DB::table('diagnosis')->get();
        foreach($diagnosis as $d){
        // insert data ke table gejala
            
                $r=DB::table('relasi')->where('kd_gejala',$d->kd_gejala)->first();
                DB::table('coba')->insert([
                'kd_penyakit' => $r->kd_penyakit,
                'kd_gejala' => $d->kd_gejala,
                'b_pakar' => $d->b_pakar,]);
	            
        }
        
        

        $penyakit = DB::table('coba')->distinct('kd_penyakit')->get('kd_penyakit');
        
        $b = 0;
        $i = 0;
        $v = 0;
        foreach($penyakit as $p2){
            $qeon=DB::table('penyakit')->where('kd_penyakit',$p2->kd_penyakit)->get();
            foreach($qeon as $qe){
                $bobot_penyakit[$v] = $qe->bobot;
                $v++;
            }
        }
        
        
        foreach($penyakit as $p){
            //cf
            $rex=DB::table('coba')->where('kd_penyakit',$p->kd_penyakit)->get();
           

		    $num_rows1 = DB::table('coba')->where('kd_penyakit',$p->kd_penyakit)->count();
                    
                    foreach($rex as $re){
                        $bobot_gejala[$b] = $re->b_pakar;
                        $b++;
                    }
                    
			
                    if($num_rows1==1){
                        $cfold[0] = $bobot_gejala[0];
                        $persen[0] = $cfold[0] * 100;
                        DB::table('hitung')->insert([
                            'kd_penyakit' => $p->kd_penyakit,
                            'nilai' => $persen[0],
                            'metode' => 'cf',]);
                    }

                    elseif($num_rows1==2){
                        $cfold[0] = $bobot_gejala[0] + $bobot_gejala[1]*(1 - $bobot_gejala[0]) ;
                        $persen[0] = $cfold[0] * 100;
                        DB::table('hitung')->insert([
                            'kd_penyakit' => $p->kd_penyakit,
                            'nilai' => $persen[0],
                            'metode' => 'cf',]);
                    }

                    else{
                        $cfold[0] = $bobot_gejala[0] + $bobot_gejala[1]*(1 - $bobot_gejala[0]) ;
		                for ($a=1;$a<=$num_rows1-2;++$a){
			                $cfold[$a] = $cfold[$a-1] + ($bobot_gejala[$a+1]*(1-$cfold[$a-1]));
			                }	
			            $f = $a -1;
                        $persen[$f] = $cfold[$f] * 100; 
                        DB::table('hitung')->insert([
                            'kd_penyakit' => $p->kd_penyakit,
                            'nilai' => $persen[$f],
                            'metode' => 'cf',]);
                    }
        }
                    //bayes
        
            for($c=0 ; $c< count($penyakit) ; ++$c){
                
                $bayes1[$c] = $bobot_gejala[$c] * $bobot_gejala[0] ;	//penyebut
                    $banyak_penyakit = DB::table('coba')->distinct('kd_penyakit')->count();
                    for($d = 0 ; $d < $banyak_penyakit ; ++$d)
                        {	
                            $bayes2[$d] = $bobot_gejala[$c] * $bobot_penyakit[$d]; //pembilang
                        }
                    
                    
                    $bayes3[$c] =array_sum($bayes2); //total penyebut
                    $tb[$c] = $bayes2[$c]/$bayes3[$c]; // penyebut:pembilang
                    
            }
            $total_bayes[$i] = array_sum($tb);    
            
             
           
        
        
        //nilai hasil bayes
        $hasilbayes = array_sum($tb);
        
        $j=0;
        foreach($penyakit as $q){
            $propabilitas[$j] =  $tb[$j]/ $hasilbayes;
            $propabilitas2[$j] = number_format($propabilitas[$j],3) * 100;
            DB::table('hitung')->insert([
                'kd_penyakit' => $q->kd_penyakit,
                'nilai' => $propabilitas2[$j],
                'metode' => 'bayes',]);
            $j++;
            }
        
        
        $hitung = DB::table('hitung')->get();  
        

        $penyakitx = DB::table('coba')->distinct('kd_penyakit')->get('kd_penyakit');
        $x=0;
        foreach($penyakitx as $p3){
            $qeon=DB::table('penyakit')->where('kd_penyakit',$p3->kd_penyakit)->get();
            foreach($qeon as $qe){
                $nama_penyakit[$x] = $qe->nama_penyakit;
                $x++;
            }
        }
        $np = implode(" ",$nama_penyakit);
        
        $coba = DB::table('coba')->get();
        $coba2 = DB::table('hitung')->get();

        foreach($coba as $nama_coba){
            $pakar[]=$nama_coba->b_pakar;
            $nc=DB::table('gejala')->where('kd_gejala',$nama_coba->kd_gejala)->get();
                foreach($nc as $ncc){
                $nama_diagnosis[]=$ncc->nama_gejala;
                }
            
            }
        foreach($coba2 as $nama_coba2){
                $pakar2[]=$nama_coba2->nilai;
                $metode[]=$nama_coba2->metode;
                $nc=DB::table('penyakit')->where('kd_penyakit',$nama_coba2->kd_penyakit)->get();
                    foreach($nc as $nccs){
                    $nama_diagnosis2[]=$nccs->nama_penyakit;
                    }
                
        }
        
        $bayes =DB::table('hitung')->where('metode','bayes')->orderBy('nilai','desc')->first();
        $nama_bayes1=DB::table('penyakit')->where('kd_penyakit',$bayes->kd_penyakit)->get();
        foreach($nama_bayes1 as $nbs){
            $nama_bayes=$nbs->nama_penyakit;
            }
       
        $cf =DB::table('hitung')->where('metode','cf')->orderBy('nilai','desc')->first();
        $nama_cf1=DB::table('penyakit')->where('kd_penyakit',$cf->kd_penyakit)->get();
        foreach($nama_cf1 as $ncf){
            $nama_cf=$ncf->nama_penyakit;
            } 
        
          
            $data2 = array_merge(['nama' => $nama_diagnosis2],['nilai' => $pakar2]);
            $data = array_merge(['nama' => $nama_diagnosis],['bobot' => $pakar]);
    
        $index = 0;

        $diagnosises = collect([]);

        foreach($nama_diagnosis as $diagnosis) 
        {
            $diagnosises->push([
                'nama_diagnosis'=>$diagnosis,
                'bobot'=>$pakar[$index]
            ]);

            $index++;
        }
        
        $index2 = 0;
        $penyakits = collect([]);
        foreach($nama_diagnosis2 as $panyakits) 
        {
            $penyakits->push([
                'nama_penyakit'=>$panyakits,
                'nilai'=>$pakar2[$index2],
                'metode'=>$metode[$index2]
            ]);

            $index2++;
        }

       

        // mengirim data ke view index
        return view('hasil.index',
            [
                'coba' => $coba, 
                'hitung' => $hitung, 
                'bayes' => $bayes, 
                'cf' => $cf,
                'nama_bayes' => $nama_bayes,
                'nama_cf' => $nama_cf,
                'nama_penyakit'=>$nama_penyakit,
                'nama_diagnosis'=>$nama_diagnosis,
                'data'=>$data,
                'diagnosises'=> $diagnosises,
                'penyakits' => $penyakits,
            ]
        );
        //
    }
    //
}
