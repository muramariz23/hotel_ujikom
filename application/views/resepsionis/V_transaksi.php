<!DOCTYPE html>
<html>
<head>
	<title>Reservasi</title>
    <?php include 'partisi/head.php'; ?>
</head>
<body>
    <?php include 'partisi/navbar.php'; ?>
<h1 class="text-center">DATA TRANSAKSI KAMAR</h1>


<div class="card-header">
      <form action="" method="post">
          <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1">Filter Tanggal Transaksi</span>
                    <input type="date" name="txt_filter_tanggal" class="form-control" placeholder="Pilih Tanggal Check In" aria-label="Username" aria-describedby="basic-addon1">
            </div>
            <input type="submit" class="btn btn-outline-primary" value="Cari">
      </form>
      <a href="<?php echo site_url('resepsionis/Transaksi/CetakLaporan') ?>"><button class="btn btn-primary">Cetak Laporan Transaksi</button></a>
        <div class="table-responsive"> 
            <table id="myTable" class="table  table-striped table-bordered" style="width:100%;">
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
        $(document).ready(function() {
         $('#myTable').DataTable({
            "scrollY": "250px",
            "scrollCollapse": true,
                    "paging":   false,
                    "buttons": [
        'pdf'
    ]
         });
        });
    </script>
<?php include 'partisi/footer.php'; ?>
</body>
</html>