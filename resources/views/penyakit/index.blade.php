@extends('layouts.app')
<head>
	<title>penyakit</title>
</head>
@section('intro-header')
@endsection

@section('content')

	<section>
		<div class="d-flex">
			<h3>Data Penyakit</h3>
			<a href="/penyakit/tambah" class="btn btn-outline-primary ml-4"> + Tambah Penyakit Baru</a>
		</div>
		
		<table class="table table-striped mt-4">
			<tr>
				<th>Kode</th>
				<th>Nama Penyakit</th>
				<th>Bobot</th>
				<th>Aksi</th>
			</tr>
			<tr v-for="penyakit in data_penyakit">
				<td>@{{ penyakit.kd_penyakit }}</td>
				<td>@{{ penyakit.nama_penyakit }}</td>
				<td>@{{ penyakit.bobot}}</td>
				<td style="width: 150px">
					<a :href="'/penyakit/edit/' + penyakit.kd_penyakit" class="fw-bold text-success">Edit</a>
					<a :href="'/penyakit/hapus/' + penyakit.kd_penyakit" class="ml-3 fw-bold text-success">Hapus</a>
				</td>
				
			</tr>
		</table>
	</section>
 
@endsection 
@section('js') 

	<script>
		'use strict'
		var vm = new Vue({
			el: '#app',
			data() {
				return {
					data_penyakit: []
				}
			},
			created() {
				this.getPenyakit()
			},
			methods: {
				getPenyakit() {
					var url = "{{ route('api.penyakit') }}"
					axios({
						method: 'GET',
						url
					})
					.then((res) => {
						let data = res.data.data 
						this.data_penyakit = data
					})
					.catch((err) => {
						console.log(err)
					})
				}
			}
		})
	</script>

@endsection

