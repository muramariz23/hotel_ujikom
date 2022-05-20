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

	<h1>LENGKAPI DATA DIRI ANDA</h1>

<form action="<?php echo site_url('pengguna/Pengguna/Registrasi'); ?>" method="post" enctype="multipart/form-data">

	<input type="text" name="txt_id_login" value="<?php echo $detail['id_login'] ?>">
	<div class="input-group mb-3">
  <span class="input-group-text" id="basic-addon1">Nama Pengguna</span>
  <input type="text" name="txt_nama_pengguna" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1" required>
</div>
<div class="input-group mb-3">
  <span class="input-group-text" id="basic-addon1">Email</span>
  <input type="text" name="txt_email" class="form-control" placeholder="Email" aria-label="Username" aria-describedby="basic-addon1" required>
</div>
<div class="input-group mb-3">
  <span class="input-group-text" id="basic-addon1">Nomor Telepon</span>
  <input type="text" name="txt_no_telepon" class="form-control" placeholder="08xxxxxxxxxxx" aria-label="Username" aria-describedby="basic-addon1" required>
</div>
	
	<input class="btn-outline-primary form-control" type="submit" value="Simpan">
</form>
	<a class="col" href="<?php echo site_url('pengguna/Pengguna')?>"><button class="btn btn-warning">Kembali</button></a>


</div>


<?php include 'partisi/footer.php'; ?>
</body>
</html>