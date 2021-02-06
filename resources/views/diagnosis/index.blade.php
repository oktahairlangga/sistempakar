@extends('layouts.app')
<head>
	<title>Diagnosis</title>
</head>
@section('intro-header')
@endsection
<body>
@section('content')

<section>
	<h3>Diagnosis</h3>
    <p>
        Pilihlah sesuai dengan kondisi domba ternak yg sedang sakit. (Bisa dipilih banyak)
    </p>
 
    <form action="/diagnosis/store" method="post" class="mt-4">
        {{ csrf_field() }}
        <div class="row">
            @foreach($gejala as $g)
                <div class="col-md-6">
                    <!-- <label for="checkbox-{{$g->kd_gejala}}" class="custom-checkbox">
                        <input type="checkbox" name="G[]" value="{{$g->kd_gejala}}" id="checkbox-{{$g->kd_gejala}}">
                        <div class="text">
                            {{$g->nama_gejala}}
                        </div>
                    </label> -->
                    <div class="inputGroup">
                        <input id="checkbox-{{$g->kd_gejala}}" name="G[]" value="{{$g->kd_gejala}}" type="checkbox"/>
                        <label for="checkbox-{{$g->kd_gejala}}">
                            {{$g->nama_gejala}}
                        </label>
                    </div>
                </div>
            @endforeach
        </div>
        <input type="submit" name="simpan" value="Simpan" align="middle" class="btn btn-primary btn-lg px-5 mt-4">
    </form>

</section>
	

@endsection
	
 
 
</body>
</html>