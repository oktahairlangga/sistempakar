<html>
<head>
	<title>penyakit</title>
</head>
<body>
 
	
	<h3>Data Penyakit</h3>
 
	<a href="/penyakit/tambah"> + Tambah Penyakit Baru</a>
	
	<br/>
	<br/>
 
	<table border="1">
		<tr>
			<th>kode</th>
			<th>nama penyakit</th>
			<th>bobot</th>
            <th>aksi</th>
		</tr>
		@foreach($penyakit as $g)
		<tr>
			<td>{{ $g->kd_penyakit }}</td>
			<td>{{ $g->nama_penyakit }}</td>
			<td>{{ $g->bobot}}</td>
			<td>
				<a href="/penyakit/edit/{{ $g->kd_penyakit }}">Edit</a>
				|
				<a href="/penyakit/hapus/{{ $g->kd_penyakit}}">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>
 
 
</body>
</html>


