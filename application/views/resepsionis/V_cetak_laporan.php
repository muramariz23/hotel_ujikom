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

<body>
<h1>DATA RESERVASI KAMAR</h1>
<a href="<?php echo site_url('resepsionis/Reservasi'); ?>"><button class=" noPrint btn btn-small btn-warning">Kembali</button></a>

<div class="card-header">
            <table class="table table-striped table-bordered" style="width:100%;">
                <thead class="bg-secondary text-white">
    <tr>
      <th>No</th>
      <th>ID Reservasi</th>
      <th>Nama Pengguna</th>
      <th>Jumlah Kamar Dipesan</th>
      <th>Jumlah Harga</th>
      <th>Tanggal Check In</th>
      <th>Tanggal Check Out</th>
      <th>Nama Tamu</th>
      <th>Keterangan</th>
      <th>Status</th>
    </tr>
  </thead>
  <tbody>
       <?php $no = 1; ?>
        <?php foreach ($GetReservasi as $Get): ?>
        <tr>
            <td><?php echo $no++; ?></td>
            <td width="50">
                <?php echo $Get->id_reservasi ?>
            </td>
            <td>
                <?php echo $Get->nama_pengguna ?>
            </td>
            <td>
                <?php echo $Get->jml_kmr_dipesan ?>
            </td>
            <td>
                <?php echo $Get->harga ?>
            </td>
            <td>
                <?php echo $Get->tgl_check_in ?>
            </td>
            <td>
                <?php echo $Get->tgl_check_out ?>
            </td>
            <td>
                <?php echo $Get->nama_tamu ?>
            </td>
            <td>
                <?php echo $Get->keterangan ?>
            </td>
            <td>
                <?php echo $Get->stat_pemesanan ?>
            </td>
        </tr>
        <?php endforeach; ?>
              </tbody>
            
            </table>

        </div>
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

    <script type="text/javascript">
        window.print();
    </script>
<?php include 'partisi/footer.php'; ?>
</body>
</html>