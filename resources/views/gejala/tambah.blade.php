@extends('layouts.app')
<head>
	<title>Tambah Gejala</title>
</head>
@section('intro-header')
@endsection

@section('content')
	<section>
		<div class="d-flex mb-4">
			<h3>Tambah Gejala</h3>
		
			<a href="/gejala" class="btn btn-outline-primary ml-4"> Kembali</a>
		</div>
	
		<form action="/gejala/store" method="post">
			{{ csrf_field() }}
				<div>
					<label for="kd_gejala">
						Kode Gejala 
					</label>
					<input type="text" name="kd_gejala" required="required" id="kd_gejala" class="form-control">
				</div>
				<div class="mt-3">
					<label for="nama_gejala">
						Nama Gejala 
					</label>
					<input type="text" name="nama_gejala" required="required" id="nama_gejala" class="form-control">
				</div>
				<div class="mt-3">
					<label for="bobot">
						Bobot 
					</label>
					<input type="number" name="bobot" required="required" id="bobot" class="form-control">
				</div>
				<input type="submit" value="Simpan Data" class="mt-4 btn btn-primary btn-lg px-5">
		</form>
	</section>
@endsection 