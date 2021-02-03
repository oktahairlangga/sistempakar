<html>
<head>
	<title>Tanda Penyakit</title>
</head>
<body>
 
	
	<h3>Data Tanda Penyakit</h3>
 
	
	
	<br/>
	<br/>
 
	<table border="1">
		<tr>
			<th>penyakit</th>
			<th>gejala</th>
            
		</tr>
		@foreach($tanda as $g)
		<tr>
			<td>{{ $g->penyakit }}</td>
			<td>{{ $g->gejala}}</td>
			
		</tr>
		@endforeach
	</table>
 
 
</body>
</html>
