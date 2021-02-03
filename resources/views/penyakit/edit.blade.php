<!DOCTYPE html>
<html>
<head>
	<title>Edit Penyakit</title>
</head>
<body>
 
	
	<h3>Edit Penyakit</h3>
 
	<a href="/penyakit"> Kembali</a>
	
	<br/>
	<br/>
 
	@foreach($penyakit as $p)
	<form action="/penyakit/update" method="post">
		{{ csrf_field() }}
		<input type="hidden" name="kd_penyakit" value="{{ $p->kd_penyakit }}"> <br/>
		Nama <input type="text" required="required" name="nama_penyakit" value="{{ $p->nama_penyakit }}"> <br/>
		Jabatan <input type="text" required="required" name="bobot" value="{{ $p->bobot }}"> <br/>
		<input type="submit" value="Simpan Data">
	</form>
	@endforeach
		
 
</body>
</html>