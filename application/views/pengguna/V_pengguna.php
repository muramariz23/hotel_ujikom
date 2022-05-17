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
	<h2>ID PENGGUNA : <?php echo $detail['id_pengguna'] ?></h2>
	<h2>NAMA PENGGUNA : <?php echo $detail['nama_pengguna'] ?></h2>
	<h2>EMAIL : <?php echo $detail['email'] ?></h2>
	<h2>NOMOR TELEPON : <?php echo $detail['no_telepon'] ?></h2>
	<a href="<?php echo site_url('pengguna/Pengguna/UbahData/'.$detail['id_pengguna']).'/view' ?>"><button class="btn btn-warning">UBAH DATA</button></a>


</div>


<?php include 'partisi/footer.php'; ?>
</body>
</html>
