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

<button onclick="window.print()">Print this page</button>
<div class="card-header">
            <table class="table table-striped table-bordered" style="width:100%;">
                <thead class="bg-secondary text-white">
    <tr>
      <th>No</th>
      <th>ID Reservasi</th>
      <th>Nama Pengguna</th>
      <th>Nomor Blok Kamar</th>
      <th>Tanggal Check In</th>
      <th>Tanggal Check Out</th>
      <th>Nama Tamu</th>
      <th>Keterangan</th>
      <th>Status</th>
    </tr>
  </thead>
  <tbody>
       <?php $no = 1; ?>
        <?php foreach ($GetRiwayat as $Get): ?>
        <tr>
            <td><?php echo $no++; ?></td>
            <td width="50">
                <?php echo $Get->id_riwayat ?>
            </td>
            <td>
                <?php echo $Get->nama_pegawai ?>
            </td>
            <td>
                <?php echo $Get->nama_pengguna ?>
            </td>
            <td>
                <?php echo $Get->no_kamar ?>
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
    
<?php include 'partisi/footer.php'; ?>
</body>
</html>