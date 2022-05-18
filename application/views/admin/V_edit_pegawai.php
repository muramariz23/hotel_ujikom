<!DOCTYPE html>
<html>
<head>
	<title>Ubah Data</title>
	<?php include 'partisi/head.php'; ?>
	
</head>
<body>



	<?php include 'partisi/navbar.php'; ?>

<div class="card wadah bg-light">

	<h1>UBAH DATA PEGAWAI</h1>
<form action="<?php echo site_url('admin/Pegawai/EditPegawai'); ?>" method="post">
	<input type="hidden" name="txt_id_pegawai" value="<?php echo $detail['id_pegawai'] ?>">
	<input type="hidden" name="txt_id_login" value="<?php echo $detail['id_login'] ?>">
	<div class="input-group mb-3">
  <span class="input-group-text" id="basic-addon1">Nama Pegawai</span>
  <input type="text" name="txt_nama_pegawai" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1" required> value="<?php echo $detail['nama_pegawai'] ?>">
</div>
<div class="input-group mb-3">
  <span class="input-group-text" id="basic-addon1">Alamat</span>
  <input type="text" name="txt_alamat" class="form-control" placeholder="Alamat" aria-label="Username" aria-describedby="basic-addon1" required> value="<?php echo $detail['alamat'] ?>">
</div>


<div class="input-group mb-3">
  <label class="input-group-text" for="inputGroupSelect01">Status Pegawai</label>
  <select class="form-select" name="txt_stat_pegawai" id="inputGroupSelect01">
    <option selected value="<?php echo $detail['stat_pegawai'] ?>"><?php echo $detail['stat_pegawai'] ?></option>
    <option value="housekeeper" required>>housekeeper</option>
    <option value="resepsionis" required>>resepsionis</option>
  </select>
</div>	
	
	<input class="btn-outline-primary form-control" type="submit" value="Simpan">
</form>


</div>


<?php include 'partisi/footer.php'; ?>

</body>
</html>