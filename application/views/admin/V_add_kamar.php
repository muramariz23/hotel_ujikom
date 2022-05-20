<!DOCTYPE html>
<html>
<head>
	<title>Tambah Data</title>
	<?php include 'partisi/head.php'; ?>
		
</head>
<body>

<div class="card wadah bg-light">

	<h1>TAMBAH DATA KAMAR</h1>

<form action="<?php echo site_url('admin/Kamar/AddKamar'); ?>" method="post" enctype="multipart/form-data">

	<div class="input-group mb-3">
  <span class="input-group-text" id="basic-addon1">Jumlah Kamar</span>
  <input type="text" name="txt_jml_kamar" class="form-control" placeholder="Jumlah Kamar" aria-label="Username" aria-describedby="basic-addon1" required>
</div>

<div class="input-group mb-3">
  <label class="input-group-text" for="inputGroupSelect01">Tipe Kasur</label>
  <select class="form-select" name="txt_tipe_kasur" id="inputGroupSelect01">
    <option selected>Pilihan</option>
    <option value="single" required>single</option>
    <option value="double" required>double</option>
    <option value="twin" required>twin</option>
  </select>
</div>

<div class="input-group mb-3">
  <label class="input-group-text" for="inputGroupSelect01">Tipe Kamar</label>
  <select class="form-select" name="txt_tipe_kamar" id="inputGroupSelect01">
    <option selected>Pilihan</option>
    <option value="standar" required>standar</option>
    <option value="superior" required>superior</option>
    <option value="deluxe" required>deluxe</option>
  </select>
</div>

<div class="input-group mb-3">

  			<span class="input-group-text" id="inputGroup-sizing-default">Nomor Fasilitas</span>

		<select class="form-select" name="txt_id_fasilitas" aria-label="Default select example">
  			<?php foreach ($GetFasilitas as $Get) : ?>
				<option value="<?php echo $Get->id_fasilitas ?>" required><?php echo $Get->no_fasilitas; ?></option>
			<?php endforeach; ?>
		</select>
		</div>

<div class="input-group mb-3">

  <span class="input-group-text" id="basic-addon1">Gambar Kamar</span>
  <input type="file" name="txt_gambar_kamar" class="form-control" placeholder="Pilih Gambar" aria-label="Username" aria-describedby="basic-addon1" required>
</div>
	
  <div class="input-group mb-3">

  <span class="input-group-text" id="basic-addon1">Harga Kamar</span>
  <input type="number" name="txt_harga_kamar" class="form-control" placeholder="Harga" aria-label="Username" aria-describedby="basic-addon1" required>
</div>

	<input class="btn-outline-primary form-control" type="submit" value="Simpan">
</form>


</div>


<?php include 'partisi/footer.php'; ?>
</body>
</html>