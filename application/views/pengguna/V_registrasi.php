<!DOCTYPE html>
<html>
<head>
	<title>Tambah Data</title>
	<?php include 'partisi/head.php'; ?>
	
</head>
<body>
<!-- <?php include 'partisi/navbar.php'; ?> -->

<div class="card wadah bg-light mt-3">

	<h1>TAMBAH DATA PENGGUNA</h1>
<form action="<?php echo site_url('pengguna/Pengguna/Tambah'); ?>" method="post">
	<div class="input-group mb-3">
  <span class="input-group-text" id="basic-addon1">Username</span>
  <input type="text" name="txt_username" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1" required>
</div>


<div class="input-group mb-3">
  <span class="input-group-text" id="basic-addon1">Password</span>
  <input type="Password" name="txt_password" class="form-control" placeholder="Password" aria-label="Username" aria-describedby="basic-addon1" required>
</div>

<input type="hidden" name="txt_status" value="pengguna">
	
	<input class="btn-outline-primary form-control" type="submit" value="Simpan">
</form>


</div>


<?php include 'partisi/footer.php'; ?>
</body>
</html>