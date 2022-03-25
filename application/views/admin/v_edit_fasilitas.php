<!DOCTYPE html>
<html>
<head>
	<title>Ubah Data</title>
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



	<?php include 'partisi/navbar.php'; ?>

<div class="card wadah bg-light">

	<h1>UBAH DATA FASILITAS</h1>
<form action="<?php echo site_url('admin/Fasilitas/EditFasilitas'); ?>" method="post">
	<input type="hidden" name="txt_id_fasilitas" value="<?php echo $detail['id_fasilitas'] ?>">
	<div class="input-group mb-3">
  <span class="input-group-text" id="basic-addon1">Nomer Fasilitas</span>
  <input type="text" name="txt_no_fasilitas" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1" value="<?php echo $detail['no_fasilitas'] ?>">
</div>

<div class="input-group mb-3">
  <label class="input-group-text" for="inputGroupSelect01">Jenis Fasilitas</label>
  <select class="form-select" name="txt_j_fasilitas" id="inputGroupSelect01">
    <option value="<?php echo $detail['j_fasilitas'] ?>"><?php echo $detail['j_fasilitas'] ?></option>
    <option value="umum">umum</option>
    <option value="standar">standar</option>
    <option value="khusus">khusus</option>
  </select>
</div>

<div class="input-group mb-3">
  <span class="input-group-text" id="basic-addon1">Isi Fasilitas</span>
  <input type="text" name="txt_isi_fasilitas" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1" value="<?php echo $detail['isi_fasilitas'] ?>">
</div>
	
	<input class="btn-outline-primary form-control" type="submit" value="Simpan">
</form>


</div>


<?php include 'partisi/footer.php'; ?>

</body>
</html>