@extends('layouts.app')
<html>
<head>
	<title>Gejala</title>
</head>
@section('intro-header')

@endsection

@section('content') 
	<section>
		<div class="d-flex">
			<h3>Data Gejala</h3>
			<a href="/gejala/tambah" class="btn btn-outline-primary ml-4"> + Tambah Gejala Baru</a>
		</div>
		
		<table class="table table-striped mt-4">
			<tr>
				<th>Kode</th>
				<th>Nama Gejala</th>
				<th>Bobot</th>
				<th>Aksi</th>
			</tr>
			<tr v-for="gejala in data_gejala">
				<td>@{{ gejala.kd_gejala }}</td>
				<td>@{{ gejala.nama_gejala }}</td>
				<td>@{{ gejala.bobot}}</td>
				<td style="width: 150px">
					<a :href="'/gejala/edit/' + gejala.kd_gejala" class="fw-bold text-success">Edit</a>
					<a :href="'/gejala/hapus/' + gejala.kd_gejala" class="ml-3 fw-bold text-success">Hapus</a>
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
					data_gejala: []
				}
			},
			created() {
				this.getGejala()
			},
			methods: {
				getGejala() {
					var url = "{{ route('api.gejala') }}"
					axios({
						method: 'GET',
						url
					})
					.then((res) => {
						let data = res.data.data 
						this.data_gejala = data
					})
					.catch((err) => {
						console.log(err)
					})
				}
			}
		})
	</script>

@endsection