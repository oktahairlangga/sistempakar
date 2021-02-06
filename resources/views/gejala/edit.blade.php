@extends('layouts.app')
<head>
	<title>Edit Gejala</title>
</head>
@section('intro-header')
@endsection

@section('content')
	<section>
		<div class="d-flex mb-4">
			<h3>Edit Gejala</h3>

			<a href="/gejala" class="btn btn-outline-primary ml-4"> Kembali</a>
		</div>
	
		@foreach($gejala as $p)
			<form action="/gejala/update" method="post">
				{{ csrf_field() }}
				<div>
					<label for="kd_gejala">
						Kode Gejala 
					</label>
					<input type="text" disabled name="kd_gejala" value="{{ $p->kd_gejala }}" id="kd_gejala" class="form-control">
				</div>
				<div class="mt-3">
					<label for="nama_gejala">
						Nama Gejala 
					</label>
					<input type="text" required="required" name="nama_gejala" value="{{ $p->nama_gejala }}" id="nama_gejala" class="form-control">
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
