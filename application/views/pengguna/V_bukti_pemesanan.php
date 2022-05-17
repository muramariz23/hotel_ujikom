<!DOCTYPE html>
<html>
<head>
	<title>bukti reservasi</title>
	<?php include 'partisi/head.php'; ?>
</head>
<body>
<div class="card container">
	
		<h1 class="mx-auto">BUKTI RESERVASI KAMAR</h1>
		<div class="card bg-dark"></div>
		<br>
		<h2 class="mx-auto">Nama Pengguna : <?php echo $detail['nama_pengguna']; ?></h2>
		<h2 class="mx-auto">Nomer Blok : <?php echo $detail['no_kamar']; ?></h2>
		<h2 class="mx-auto">Tanggal Check In : <?php echo $detail['tgl_check_in']; ?></h2>
		<h2 class="mx-auto">Tanggal Check Out : <?php echo $detail['tgl_check_out']; ?></h2>
		<h2 class="mx-auto">Nama Tamu : <?php echo $detail['nama_tamu']; ?></h2>
		<h2 class="mx-auto">Keterangan : <?php echo $detail['keterangan']; ?></h2>
		<div class="card"></div>
		<p>Silahkan screenshot atau unduh Bukti Reservasi untuk diperlihatkan kepada resepsionis saat melakukan check in hotel</p>
		<br>
		<button class="btn btn-small btn-primary">Unduh Bukti Reservasi</button>
</div>




	<?php include 'partisi/footer.php'; ?>
</body>
</html>