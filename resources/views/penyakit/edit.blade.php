@extends('layouts.app')
<head>
	<title>Edit Penyakit</title>
</head>
@section('intro-header')
@endsection

@section('content')

	<section>
		<div class="d-flex mb-4">
			<h3>Edit Penyakit</h3>
		
			<a href="/penyakit" class="btn btn-outline-primary ml-4"> Kembali</a>
		</div>
		@foreach($penyakit as $p)
			<form action="/penyakit/update" method="post">
				{{ csrf_field() }}
				<div>
					<label for="kd_penyakit">
						Kode Penyakit
					</label>
					<input type="text" disablde name="kd_penyakit" disabled value="{{ $p->kd_penyakit }}" id="kd_penyakit" class="form-control">
				</div>
				<div class="mt-3">
					<label for="nama_penyakit">
						Nama penyakit 
					</label>
					<input type="text" required="required" name="nama_penyakit" value="{{ $p->nama_penyakit }}" id="nama_penyakit" class="form-control">
				</div>
				<div class="mt-3">
					<label for="bobot">
						Bobot 
					</label>
					<input type="text" required="required" name="bobot" value="{{ $p->bobot }}" id="bobot" class="form-control">
				</div>
				<input type="submit" value="Simpan Data" class="mt-4 btn btn-primary btn-lg px-5">
			</form>
		@endforeach
	</section>
		
@endsection 