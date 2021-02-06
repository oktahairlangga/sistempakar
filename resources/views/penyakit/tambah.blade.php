@extends('layouts.app')
<head>
	<title>Tambah Penyakit</title>
</head>
@section('intro-header')
@endsection

@section('content')
	<section>
		<div class="d-flex mb-4">
			<h3>Data Penyakit</h3>
			<a href="/penyakit" class="btn btn-outline-primary ml-4"> Kembali</a>
		</div>
	
		<form action="/penyakit/store" method="post" class="mt-4">
			{{ csrf_field() }}
			<div>
				<label for="kd_penyakit">
					Kode penyakit 
				</label>
				<input type="text" name="kd_penyakit" required="required" class="form-control" id="kd_penyakit">
			</div>
			<div class="mt-3">
				<label for="nama_penyakit">
					Nama penyakit 
				</label>
				<input type="text" name="nama_penyakit" required="required" class="form-control" id="nama_penyakit">
			</div>
			<div class="mt-3">
				<label for="bobot">
					Bobot 
				</label>
				<input type="number" name="bobot" required="required" class="form-control" id="bobot">
			</div>
			<input type="submit" value="Simpan Data" class="mt-4 btn btn-primary btn-lg px-5">
		</form>
	</section>
 
 
 @endsection 