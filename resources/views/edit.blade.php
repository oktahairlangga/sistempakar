<!DOCTYPE html>
<html>
<head>
	<title>Edit Gejala</title>
</head>
<body>
 
	
	<h3>Edit Gejala</h3>
 
	<a href="/gejala"> Kembali</a>
	
	<br/>
	<br/>
 
	@foreach($gejala as $p)
	<form action="/gejala/update" method="post">
		{{ csrf_field() }}
		<input type="hidden" name="kd_gejala" value="{{ $p->kd_gejala }}"> <br/>
		Nama <input type="text" required="required" name="nama_gejala" value="{{ $p->nama_gejala }}"> <br/>
		Jabatan <input type="text" required="required" name="bobot" value="{{ $p->bobot }}"> <br/>
		<input type="submit" value="Simpan Data">
	</form>
	@endforeach
		
 
</body>
</html>