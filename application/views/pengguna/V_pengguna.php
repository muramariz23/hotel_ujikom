<!DOCTYPE html>
<html>
<head>
	<title>Lengkapi Data</title>
	<?php include 'partisi/head.php'; ?>
	<style>
		.wadah{
		width: 750px;
		height: 500px;
		justify-content: center;
		border-radius: 10%;
		position: absolute;
		top: 10%;
		left: 20%;
		padding: 5%;
	}
	</style>
</head>
<body>

	<div class="card wadah bg-light">

	<h1 class="text-center bg-info">PROFIL PENGGUNA</h1>
	<h3>ID PENGGUNA : <?php echo $detail['id_pengguna'] ?></h3>
	<h3>NAMA PENGGUNA : <?php echo $detail['nama_pengguna'] ?></h3>
	<h3>NIK : <?php echo $detail['nik'] ?></h3>
	<h3>EMAIL : <?php echo $detail['email'] ?></h3>
	<h3>NOMOR TELEPON : <?php echo $detail['no_telepon'] ?></h3>
	<br>
	<div class="row">
	<a class="col" href="<?php echo site_url('pengguna/Pengguna')?>"><button class="btn btn-warning">Kembali</button></a>
	<a class="col" href="<?php echo site_url('pengguna/Pengguna/UbahData/'.$detail['id_pengguna']).'/view' ?>"><button class="btn btn-warning">UBAH DATA</button></a> 
	
</div>


</div>


<?php include 'partisi/footer.php'; ?>
</body>
</html>
