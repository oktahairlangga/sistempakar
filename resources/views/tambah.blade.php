<!DOCTYPE html>
<html>
<head>
	<title>Tambah Gejala</title>
</head>
<body>
 
	<h3>Data Gejala</h3>
 
	<a href="/gejala"> Kembali</a>
	
	<br/>
	<br/>
 
	<form action="/gejala/store" method="post">
		{{ csrf_field() }}
		Kode Gejala <input type="text" name="kd_gejala" required="required"> <br/>
		Nama Gejala <input type="text" name="nama_gejala" required="required"> <br/>
		Bobot <input type="number" name="bobot" required="required"> <br/>
		<input type="submit" value="Simpan Data">
	</form>
 
</body>
</html>