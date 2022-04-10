<!DOCTYPE html>
<html>
<head>
	<title>Tambah Data</title>
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

	<h1>TAMBAH DATA KAMAR</h1>
<form action="<?php echo site_url('admin/Kamar/AddKamar'); ?>" enctype="multipart/form-data" method="post">
	<div class="input-group mb-3">
  <span class="input-group-text" id="basic-addon1">Nomer Kamar</span>
  <input type="text" name="txt_no_kamar" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
</div>

<div class="input-group mb-3">
  <label class="input-group-text" for="inputGroupSelect01">Tipe Kasur</label>
  <select class="form-select" name="txt_tipe_kasur" id="inputGroupSelect01">
    <option selected>Pilihan</option>
    <option value="single">single</option>
    <option value="double">double</option>
    <option value="twin">twin</option>
  </select>
</div>

<div class="input-group mb-3">
  <label class="input-group-text" for="inputGroupSelect01">Tipe Kamar</label>
  <select class="form-select" name="txt_tipe_kamar" id="inputGroupSelect01">
    <option selected>Pilihan</option>
    <option value="standar">standar</option>
    <option value="superior">superior</option>
    <option value="deluxe">deluxe</option>
  </select>
</div>

<div class="input-group mb-3">
  			<span class="input-group-text" id="inputGroup-sizing-default">Nomer Fasilitas</span>
		<select class="form-select" name="txt_id_fasilitas" aria-label="Default select example">
  			<?php foreach ($GetFasilitas as $Get) : ?>
				<option value="<?php echo $Get->id_fasilitas ?>"><?php echo $Get->no_fasilitas; ?></option>
			<?php endforeach; ?>
		</select>
		</div>

<div class="input-group mb-3">
  <span class="input-group-text" id="basic-addon1">Isi Fasilitas</span>
  <input type="file" name="txt_gambar_kamar" class="form-control" placeholder="Pilih File Gambar" aria-label="Username" aria-describedby="basic-addon1">
</div>
	
	<input class="btn-outline-primary form-control" type="submit" value="Simpan">
</form>


</div>


<?php include 'partisi/footer.php'; ?>
</body>
</html>