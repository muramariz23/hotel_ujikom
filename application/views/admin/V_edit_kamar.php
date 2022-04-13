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

	<h1>UBAH DATA KAMAR</h1>
<form action="<?php echo site_url('admin/Kamar/EditKamar'); ?>" method="post" enctype="multipart/form-data">
	<input type="hidden" name="txt_id_kamar" value="<?php echo $detail['id_kamar'] ?>">
	
	<div class="input-group mb-3">
  <span class="input-group-text" id="basic-addon1">Nomer Kamar</span>
  <input type="text" name="txt_no_kamar" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1" value="<?php echo $detail['no_kamar'] ?>">
</div>

<div class="input-group mb-3">
  <label class="input-group-text" for="inputGroupSelect01">Tipe Kasur</label>
  <select class="form-select" name="txt_tipe_kasur" id="inputGroupSelect01">
  	<option selected value="<?php echo $detail['tipe_kasur'] ?>"><?php echo $detail['tipe_kasur'] ?></option>
    <option value="single">single</option>
    <option value="double">double</option>
    <option value="twin">twin</option>
  </select>
</div>

<div class="input-group mb-3">
  <label class="input-group-text" for="inputGroupSelect01">Tipe Kamar</label>
  <select class="form-select" name="txt_tipe_kamar" id="inputGroupSelect01">
  	<option selected value="<?php echo $detail['tipe_kamar'] ?>"><?php echo $detail['tipe_kamar'] ?></option>
    <option value="standar">standar</option>
    <option value="superior">superior</option>
    <option value="deluxe">deluxe</option>
  </select>
</div>

<div class="input-group mb-3">
  			<span class="input-group-text" id="inputGroup-sizing-default">Nomor Fasilitas</span>
		<select class="form-select" name="txt_id_fasilitas" aria-label="Default select example">
			<option value="<?php echo $detail['id_fasilitas']?>"><?php echo $detail['id_fasilitas']</option>
  			<?php foreach ($GetFasilitas as $Get) : ?>
				<option value="<?php echo $Get->id_fasilitas ?>"><?php echo $Get->no_fasilitas; ?></option>
			<?php endforeach; ?>
		</select>
		</div>

<div class="input-group mb-3">
  <span class="input-group-text" id="basic-addon1">Gambar Kamar</span>
  <input type="file" name="txt_gambar_kamar" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
</div>
	
	<input class="btn-outline-primary form-control" type="submit" value="Simpan">
</form>


</div>


<?php include 'partisi/footer.php'; ?>
</body>
</html>