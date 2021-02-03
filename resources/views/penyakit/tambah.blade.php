<!DOCTYPE html>
<html>
<head>
	<title>Tambah Penyakit</title>
</head>
<body>
 
	<h3>Data Penyakit</h3>
 
	<a href="/penyakit"> Kembali</a>
	
	<br/>
	<br/>
 
	<form action="/penyakit/store" method="post">
		{{ csrf_field() }}
		Kode penyakit <input type="text" name="kd_penyakit" required="required"> <br/>
		Nama penyakit <input type="text" name="nama_penyakit" required="required"> <br/>
		Bobot <input type="number" name="bobot" required="required"> <br/>
		<input type="submit" value="Simpan Data">
	</form>
 
</body>
</html>