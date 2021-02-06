@extends('layouts.app')
<head>
	<title> Hasil Diagnosis</title>
</head>

@section('intro-header')
@endsection

@section('content')
	<section>
		<div class="row">
			<div class="col-md-6">
				<div class="box">
					<h5>
						Nilai Diagnosis Keseluruhan	
					</h5>
					<table class="table mt-4">
							<tr>
								<th>Nama gejala</th>
								<th>Bobot</th>
								
							</tr>
							
							
							
							@foreach($diagnosises as $diagnosis)
									<tr>
									
										<td>{{ $diagnosis['nama_diagnosis'] }}</td>
										<td>
											{{ $diagnosis['bobot'] }}
										</td>
										
										
									</tr>
							@endforeach		
							
					</table>

					<div class="separator"></div>

					<h6 class="mt-3">
						Perkiraan Penyakit : 
					</h6>

					@foreach($nama_penyakit as $nama)
						<span class="tag">
							{{ $nama }} 
						</span>
					@endforeach
				</div>
			</div>
			<div class="col-md-6">
				<div class="box">
					<h6>
						Hasil Perhitungan Tiap Metode 
					</h6>
					<table class="table mt-4">
							<tr>
								<th>Kode Penyakit</th>
								<th>Nilai</th>
								<th>Metode</th>
								
							</tr>
							@foreach($penyakits as $pepepe)
									<tr>
									
										<td>{{ $pepepe['nama_penyakit'] }}</td>
										<td>
											{{ $pepepe['nilai'] }}
										</td>
										<td>
											{{ $pepepe['metode'] }}
										</td>
										
									</tr>
							@endforeach		


					</table>

					<div class="separator"></div>

					<div>
						Perkiraan penyakit menurut teorema bayes : 
						<span class="tag ml-3">
							{{$nama_bayes}}
						</span>
						<span class="text-success fw-bold ml-3">
							{{$bayes->nilai}}
						</span>
					</div>

					<div class="mt-3">
						Perkiraan penyakit menurut certainly factor : 
						<span class="tag ml-3">
							{{$nama_cf}}
						</span>
						<span class="text-success fw-bold ml-3">
							{{$cf->nilai}}
						</span>
					</div>
					
				</div>
			</div>
		</div>
	</section>
@endsection