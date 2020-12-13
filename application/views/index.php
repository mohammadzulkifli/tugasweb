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
			<a href="<?= site_url('index')?>" class="nav-link active">HOME</a>
			<a href="<?= site_url('index/tambah')?>" class="nav-link">Tambah Data</a>
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
			<th>nim</th>
			<th>nama</th>
			<th>alamat</th>
			<th>tanggal_lahir</th>
			<th>Aksi</th>
		</tr>

		<?php $no = 1; ?>
		<?php  foreach ($data_tabel as $key):?>
			<tr>
				<td><?= $no++;?></td>
				<td><?= $key->nim ?></td>
				<td><?= $key->nama ?></td>
				<td><?= $key->alamat ?></td>
				<td><?= $key->tanggal_lahir?></td>
				<td>
					<a href="" class="btn btn-info btn-sm">EDIT</a>
					<a href="" class="btn btn-success btn-sm">HAPUS</a>	
				</td>
			</tr>
		<tr>	
			</td>
		</tr>
 <?php endforeach ?>
	</table>
</div>
</body>
</html>