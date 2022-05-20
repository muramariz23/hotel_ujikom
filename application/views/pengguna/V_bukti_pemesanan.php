<!DOCTYPE html>
<html>
<head>
  <title>Cetak Laporan</title>
    <?php include 'partisi/head.php'; ?>

    <style type="text/css">
        @media print {
  .noPrint{
    display: none;
  }
  
}
    </style>
</head>
<body class="bg-info">
<div class="card container w-50 mt-3">
	
		<h1 class="mx-auto">BUKTI RESERVASI KAMAR</h1>
		<div class="card bg-dark"></div>
		<br>
        <h2 class="text-justify">Id Reservasi : <?php echo $detail['id_reservasi']; ?></h2>
		<h2 class="text-justify">Nama Pengguna : <?php echo $detail['nama_pengguna']; ?></h2>
		<h2 class="text-justify">Jumlah Kamar Dipesan : <?php echo $detail['jml_kmr_dipesan']; ?></h2>
        <h2 class="text-justify">Total Harga : Rp. <?php echo $detail['harga']; ?></h2>
		<h2 class="text-justify">Tanggal Check In : <?php echo $detail['tgl_check_in']; ?></h2>
		<h2 class="text-justify">Tanggal Check Out : <?php echo $detail['tgl_check_out']; ?></h2>
		<h2 class="text-justify">Nama Tamu : <?php echo $detail['nama_tamu']; ?></h2>
		<h2 class="text-justify">Keterangan : <?php echo $detail['keterangan']; ?></h2>

		<div class="card"></div>
		<p class="text-justify">Silahkan screenshot atau unduh Bukti Reservasi untuk diperlihatkan kepada resepsionis saat melakukan check in hotel</p>
		<br>
		<button onclick="window.print()"  class=" noPrint btn btn-small btn-primary">Unduh Bukti</button>

        <a href="<?php echo site_url('pengguna/Pengguna'); ?>"><button class=" noPrint btn btn-small btn-warning">Kembali</button></a>
</div>

    <script>
        $('#myTable').DataTable( {
    buttons: [
        {
            extend: 'pdf',
            text: 'Save current page',
            exportOptions: {
                modifier: {
                    page: 'current'
                }
            }
        }
    ]
} );
    </script>
    
<?php include 'partisi/footer.php'; ?>

</body>
</html>