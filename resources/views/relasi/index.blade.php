<html>
<head>
	<title>Gejala</title>
</head>
<body>
 
	
	<h3>Data Relasi</h3>
 
	
	
	<br/>
	<br/>
 
	<table border="1">
		<tr>
			<th>id</th>
			<th>kd_penyakit</th>
			<th>kd_gejala</th>
            
		</tr>
		@foreach($relasi as $g)
		<tr>
			<td>{{ $g->id }}</td>
			<td>{{ $g->kd_penyakit }}</td>
			<td>{{ $g->kd_gejala}}</td>
			
		</tr>
		@endforeach
	</table>
 
 
</body>
</html>
