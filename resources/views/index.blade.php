<html>
<head>
	<title>Gejala</title>
</head>
<body>
 
	
	<h3>Data Gejala</h3>
 
	<a href="/gejala/tambah"> + Tambah Gejala Baru</a>
	
	<br/>
	<br/>
 
	<table border="1">
		<tr>
			<th>kode</th>
			<th>nama gejala</th>
			<th>bobot</th>
            <th>aksi</th>
		</tr>
		@foreach($gejala as $g)
		<tr>
			<td>{{ $g->kd_gejala }}</td>
			<td>{{ $g->nama_gejala }}</td>
			<td>{{ $g->bobot}}</td>
			<td>
				<a href="/gejala/edit/{{ $g->kd_gejala }}">Edit</a>
				|
				<a href="/gejala/hapus/{{ $g->kd_gejala}}">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>
 
 
</body>
</html>


