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

<div class="card container">
	
		<h1 class="mx-auto">BUKTI RESERVASI KAMAR</h1>
		<div class="card bg-dark"></div>
		<br>
		<h2 class="mx-auto">Nama Pengguna : <?php echo $detail['nama_pengguna']; ?></h2>
		<h2 class="mx-auto">Jumlah Kamar Dipesan : <?php echo $detail['jml_kmr_dipesan']; ?></h2>
		<h2 class="mx-auto">Tanggal Check In : <?php echo $detail['tgl_check_in']; ?></h2>
		<h2 class="mx-auto">Tanggal Check Out : <?php echo $detail['tgl_check_out']; ?></h2>
		<h2 class="mx-auto">Nama Tamu : <?php echo $detail['nama_tamu']; ?></h2>
		<h2 class="mx-auto">Keterangan : <?php echo $detail['keterangan']; ?></h2>
		<div class="card"></div>
		<p>Silahkan screenshot atau unduh Bukti Reservasi untuk diperlihatkan kepada resepsionis saat melakukan check in hotel</p>
		<br>
		<button onclick="window.print()">Print this page</button>
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