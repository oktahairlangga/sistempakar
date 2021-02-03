<html>
<head>
	<title>Diagnosis</title>
</head>
<body>
 
	
	<h3>Data diagnosis</h3>
	<br/>
	<br/>
 
    <form action="/diagnosis/store" method="post">
    {{ csrf_field() }}
        <table>
            @foreach($gejala as $g)
            <tr>
                <td><input type="checkbox" name="G[]" value="{{$g->kd_gejala}}"></td>
                <td>{{$g->nama_gejala}}</td>
            </tr>
            @endforeach
            <tr>
                <td class=""><input type="submit" name="simpan" value="simpan" align="middle"></div></td>
            </tr>
        </table>
    </form>


	
 
 
</body>
</html>