<!DOCTYPE html>
<html>
<head>
	<title>Detail Kamar</title>
	<?php include 'partisi/head.php'; ?>
</head>
<body>
	<div class="container card mt-2">
		<div class="card bg-primary mx-auto">
			<h1>Detail Kamar</h1>
		</div>
		<div class="container card bg-light">
		<div class="row">
			<div class="card col-12 col-md-4 card">

			<h3>Harga Kamar : Rp.<?php echo $detail['harga_kamar']; ?></h3>
			<h3>Jumlah Kamar Tersedia : <?php echo $detail['jml_kamar']; ?></h3>

			<h3>Tipe Kasur : <?php echo $detail['tipe_kasur']; ?></h3>

			<h3>Tipe Kamar : <?php echo $detail['tipe_kamar']; ?></h3>
			</div>

			<div class="card col-12 col-md-4 card">
			<h3>Isi Fasilitas : <?php echo $detail['isi_fasilitas']; ?></h3>
			</div>

			<div class="card col-12 col-md-4 card">
			<h3>Gambar Kamar</h3>
			<img class="w-50 h-50 mx-auto card" src="<?php echo base_url('assets/img/') . $detail['gambar_kamar'] ?>">
			</div>

			
		</div>
			<div class="row">
			<div class="card col-12 col-md-6 card">
			<h3>Tanggal Yang Sudah Dipesan</h3>
			<table>
			<thead>
				<tr>
					<th>Tanggal Check In</th>
					<th>Tanggal Check Out</th>
				</tr>
			</thead>
			<tbody>
				
			<?php foreach ($GetReservasi as $Get) : ?>
				<tr>
					<td><?php echo $Get->tgl_check_in; ?></td>
					<td><?php echo $Get->tgl_check_out; ?></td>
				</tr>
			<?php endforeach; ?>

			</tbody>
			</table>
		</div>
		<div class="card col-12 col-md-6 card">
			<h2 class="mx-auto">Lakukan Pemesanan</h2>
			<form action="<?php echo site_url('pengguna/Pemesanan/AddPemesanan'); ?>" method="post">
				<input type="hidden" name="txt_id_pengguna" value=" <?php echo $detail['id_pengguna']; ?>">
				<input type="hidden" name="txt_id_kamar" value=" <?php echo $detail['id_kamar']; ?>">
				<div class="input-group mb-3">
  					<span class="input-group-text" id="basic-addon1">Jumlah Kamar</span>
  					<input type="text" name="txt_jml_kmr_dipesan" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1" required>
				</div>
				<div class="input-group mb-3">
  					<span class="input-group-text" id="basic-addon1">Pilih Tanggak Check In</span>
  					<input type="date" name="txt_tgl_check_in" min="2022-05-19" class="form-control" placeholder="Pilih Tanggal Check In" aria-label="Username" aria-describedby="basic-addon1" required>
				</div>
				<div class="input-group mb-3">
  					<span class="input-group-text" id="basic-addon1">Pilih Tanggal Check Out</span>
  					<input type="date" name="txt_tgl_check_out" min="2022-05-19" class="form-control" placeholder="Pilih Tanggal Check Out" aria-label="Username" aria-describedby="basic-addon1" required>
				</div>
				<div class="input-group mb-3">
  					<span class="input-group-text" id="basic-addon1">Nama Tamu</span>
  					<input type="text" name="txt_nama_tamu" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1" required>
				</div>
				<div class="input-group mb-3">
  					<span class="input-group-text" id="basic-addon1">Keterangan Tambahan</span>
  					<input type="text" name="txt_keterangan" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1" required>
				</div>
				<input class="btn btn-outline-primary" type="submit" value="Pesan Sekarang">
			</form>
		</div>
		</div>
		</div>
	</div>

<?php include 'partisi/footer.php'; ?>
</body>
</html>