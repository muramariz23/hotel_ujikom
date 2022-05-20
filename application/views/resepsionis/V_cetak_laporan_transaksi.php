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
<h1>DATA TRANSAKSI KAMAR</h1>

<form action="" method="post" class="noPrint">
          <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1">Filter Tanggal Transaksi</span>
                    <input type="date" name="txt_filter_tanggal" class="form-control" placeholder="Pilih Tanggal Check In" aria-label="Username" aria-describedby="basic-addon1">
            </div>
            <input type="submit" class="btn btn-outline-primary" value="Cetak">
      </form>

<a href="<?php echo site_url('resepsionis/Transaksi'); ?>"><button class=" noPrint btn btn-small btn-warning">Kembali</button></a>

<div class="card-header">
            <table class="table table-striped table-bordered" style="width:100%;">
                <thead class="bg-secondary text-white">
        <tr>
      <th>No</th>
      <th>ID Transaksi</th>
      <th>Nama Pengguna</th>
      <th>Jumlah Kamar Dipesan</th>
      <th>Nama Tamu</th>
      <th>Total Harga</th>
      <th>Jumlah Dibayar</th>
      <th>Keterangan</th>
    </tr>
  </thead>
  <tbody>
       <?php $no = 1; ?>
        <?php foreach ($GetTransaksi as $Get): ?>
        <tr>
            <td><?php echo $no++; ?></td>
            <td width="50">
                <?php echo $Get->id_transaksi ?>
            </td>
            <td>
                <?php echo $Get->nama_pengguna ?>
            </td>
            <td>
                <?php echo $Get->jml_kmr_dipesan ?>
            </td>
            <td>
                <?php echo $Get->nama_tamu ?>
            </td>
             <td>
                <?php echo $Get->harga ?>
            </td>
            <td>
                <?php echo $Get->jml_bayar ?>
            </td>            
            <td>
                <?php echo $Get->keterangan_transaksi ?>
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