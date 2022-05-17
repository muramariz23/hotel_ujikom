<!DOCTYPE html>
<html>
<head>
	<title>Ubah Data</title>
	<?php include 'partisi/head.php'; ?>
	
</head>
<body>
  
<div class="card wadah bg-light">

	<h1>UBAH DATA PENGGUNA</h1>
<form action="<?php echo site_url('pengguna/Pengguna/EditProfile'); ?>" method="post">
	<input type="hidden" name="txt_id_pengguna" value="<?php echo $detail['id_pengguna'] ?>">
  <input type="hidden" name="txt_id_login" value="<?php echo $detail['id_login'] ?>">

	<div class="input-group mb-3">
  <span class="input-group-text" id="basic-addon1">Nama Pengguna</span>
  <input type="text" name="txt_nama_pengguna" class="form-control" placeholder="Nama Pengguna" aria-label="Username" aria-describedby="basic-addon1" value="<?php echo $detail['nama_pengguna'] ?>">
</div>

<div class="input-group mb-3">
  <span class="input-group-text" id="basic-addon1">Email</span>
  <input type="text" name="txt_email" class="form-control" placeholder="Email" aria-label="Username" aria-describedby="basic-addon1" value="<?php echo $detail['email'] ?>">
</div>

<div class="input-group mb-3">
  <span class="input-group-text" id="basic-addon1">No Telepon</span>
  <input type="text" name="txt_no_telepon" class="form-control" placeholder="Ex:08123*****" aria-label="Username" aria-describedby="basic-addon1" value="<?php echo $detail['no_telepon'] ?>">
</div>
	
	<input class="btn-outline-primary form-control" type="submit" value="Simpan">
</form>


</div>


<?php include 'partisi/footer.php'; ?>

</body>
</html>