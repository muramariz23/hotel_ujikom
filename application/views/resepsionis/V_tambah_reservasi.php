<!DOCTYPE html>
<html>
<head>
	<title>Tambah Data</title>
	<?php include 'partisi/head.php'; ?>
		
</head>
<body>
<?php include 'partisi/navbar.php'; ?>

<div class="card wadah bg-light">

	<h1>TAMBAH DATA RESERVASI</h1>

<form action="<?php echo site_url('resepsionis/Reservasi/AddPemesanan'); ?>" method="post">
  <input type="hidden" name="txt_id_pegawai" value="<?php echo $detail['id_pegawai']?>">
  <input type="hidden" name="txt_id_pengguna" value="<?php echo $detail['id_pengguna']?>">
	

<div class="input-group mb-3">
  			<span class="input-group-text" id="inputGroup-sizing-default">Nomor Kamar</span>
		<select class="form-select" name="txt_id_kamar" aria-label="Default select example">
  			<?php foreach ($GetKamar as $Get) : ?>
				<option value="<?php echo $Get->id_kamar ?>"><?php echo $Get->no_kamar; ?></option>
			<?php endforeach; ?>
		</select>
		</div>

    <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">Pilih Tanggak Check In</span>
            <input type="date" name="txt_tgl_check_in" class="form-control" placeholder="Pilih Tanggal Check In" aria-label="Username" aria-describedby="basic-addon1" required>
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">Pilih Tanggal Check Out</span>
            <input type="date" name="txt_tgl_check_out" class="form-control" placeholder="Pilih Tanggal Check Out" aria-label="Username" aria-describedby="basic-addon1" required>
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">Nama Tamu</span>
            <input type="text" name="txt_nama_tamu" class="form-control" placeholder="Nama Tamu" aria-label="Username" aria-describedby="basic-addon1" required>
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">Keterangan</span>
            <input type="text" name="txt_keterangan" class="form-control" placeholder="Keterangan" aria-label="Username" aria-describedby="basic-addon1" required>
        </div>
	
	<input class="btn-outline-primary form-control" type="submit" value="Simpan">
</form>


</div>


<?php include 'partisi/footer.php'; ?>
</body>
</html>