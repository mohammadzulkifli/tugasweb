<!DOCTYPE html>
<html>
<head>
	<title>Mahasiswa</title>
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/bootstrap.min.css') ?>">
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-dark shadow" style="background-color: green">
	<a href="" class="navbar-brand">
		Tugas
	</a>
	<div class="navbar-nav">
		<a href="<?= site_url('modelD')?>" class="nav-link active">HOME</a>
		<a href="<?= site_url('controllerD/tambah')?>" class="nav-link">Tambah Data</a>
	</div>
	<div class="4avbar-nav ml-auto">
		<a href="" class="nav-link active">MOZU_KMD</a>
		<small id="emailHelp" class="form-text text-muted">Tidak Boleh Kosong</small>
		
	</div>
</nav>
<div class="alert alert-info text-center mt-2 text-white" style="background-color: blue">
	TAMBAH DATA MAHASISWA
</div>
<hr>
<div class="container"  >
	<div align="centre" style="margin-left: 400px; margin-right: 400px">
		<form action="<?php echo site_url('controllerD/simpan_data') ?>" method="POST">
		  	<div class="form-group" align="centre" >
		    	<label>id_06</label>
		    	<input type="number" name="id_006" class="form-control">
		    	<small id="emailHelp" class="form-text text-muted">Tidak Boleh Kosong</small>
		  	</div>
			<div class="form-group">
			   <label>kolom_kelas</label>
			   <input type="text" name="kolom_kelas" class="form-control">
			   <small id="emailHelp" class="form-text text-muted">Tidak Boleh Kosong</small>
			</div>
			<div class="form-group" >
				<label>kolom_jurusan</label>
			  	<input type="textarea" name="kolom_jurusan" class="form-control">
			  	<small id="emailHelp" class="form-text text-muted">Tidak Boleh Kosong</small>
			 </div>
			 	<div class="form-group" >
				<label>kolom_isi</label>
			  	<input type="textarea" name="kolom_isi" class="form-control">
			  	<small id="emailHelp" class="form-text text-muted">Tidak Boleh Kosong</small>
			 </div>
			 <div>
			  		<button type="submit" class="btn btn-primary">simpan</button>
			</div>
		</form>
	</div>
</div>
</body>
</html>