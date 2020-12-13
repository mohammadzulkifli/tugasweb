<!DOCTYPE html>
<html>
<head>
	<title>mahasiswa</title>
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/bootstrap.min.css') ?>">
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-dark shadow" style="background-color: green">
		<a href="" class="navbar-brand">
			Tugas
		</a>
		<div class="navbar-nav">
			<a href="<?= site_url('Dmodel')?>" class="nav-link active">HOME</a>
			<a href="<?= site_url('Dcontroller/tambah')?>" class="nav-link">Tambah Data</a>
		</div>
		<div class="navbar-nav ml-auto">
			<a href="" class="nav-link active">MOZU_KMD</a>
		</div>
	</nav>
	<div class="alert alert-info text-center mt-2 text-white" style="background-color: blue">
		Data Mahasiswa
	</div>
<div class="container">
<table class="table table-bordered table-striped table-hover ">
		
		<tr class="text-center">
			<th>id_06</th>
			<th>kolom_kelas</th>
			<th>kolom_jurusan</th>
			<th>kolom_isi</th>
			
		</tr>
			<?php  foreach ($data_tabel as $key):?>
			<tr>
				
				<td><?= $key->id_06 ?></td>
				<td><?= $key->kolom_kelas ?></td>
				<td><?= $key->kolom_jurusan ?></td>
				<td><?= $key->kolom_isi ?></td>
				<td>
				
			</tr>
		<tr>	
			</td>
		</tr>
 <?php endforeach ?>
	</table>
</div>
</body>
</html>