<html>
<head>
	<title>Tanda Penyakit</title>
</head>
<body>
 
Nilai Diagnosis Keseluruhan	
<table border="1">
		<tr>
			<th>nama gejala</th>
			<th>bobot</th>
            
		</tr>
		
		
		
		@foreach($nama_diagnosis as $ng)
				@foreach($coba as $aboc)	
				<tr>
				
					<td>{{ $ng }}</td>
					<td>
					{{$aboc->b_pakar}}
					
					</td>
					
					
				</tr>
				@endforeach
		@endforeach		
		
</table>
</br>
Perkiraan Penyakit : 

@foreach($nama_penyakit as $nama)
{{ $nama }} 
@endforeach

</br>
</br>
Hasil Perhitungan Tiap Metode 
<table border="1">
		<tr>
			<th>kd_penyakit</th>
			<th>nilai</th>
			<th>metode</th>
            
		</tr>
		@foreach($hitung as $h)
		<tr>
			<td>{{ $h->kd_penyakit }}</td>
			<td>{{ $h->nilai }}</td>
			<td>{{ $h->metode}}</td>
			
		</tr>
		@endforeach
</table>
</br>
perkiraan penyakit menurut teorema bayes : {{$nama_bayes}}
{{$bayes->nilai}}
</br>
perkiraan penyakit menurut certainly factor : {{$nama_cf}}
{{$cf->nilai}}
</body>
</html>
