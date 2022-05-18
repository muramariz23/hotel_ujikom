<!DOCTYPE html>
<html>
<head>
	<title>Reservasi</title>
    <?php include 'partisi/head.php'; ?>
</head>
<body>
    <?php include 'partisi/navbar.php'; ?>
<h1>DATA RESERVASI KAMAR</h1>


<div class="card-header">
      <form action="" method="post">
          <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1">Filter Tanggal Check In</span>
                    <input type="date" name="txt_filter_tanggal" class="form-control" placeholder="Pilih Tanggal Check In" aria-label="Username" aria-describedby="basic-addon1">
            </div>
            <input type="submit" class="btn btn-outline-primary" value="Cari">
      </form>
      <a href="<?php echo site_url('resepsionis/Reservasi/CetakLaporan') ?>"><button class="btn btn-primary">Cetak Laporan Reservasi</button></a>
        <div class="table-responsive"> 
            <table id="myTable" class="table  table-striped table-bordered" style="width:100%;">
                <thead class="bg-secondary text-white">
    <tr>
      <th>No</th>
      <th>ID Reservasi</th>
      <th>Nama Pengguna</th>
      <th>Jumlah Kamar Dipesan</th>
      <th>Tanggal Check In</th>
      <th>Tanggal Check Out</th>
      <th>Nama Tamu</th>
      <th>Keterangan</th>
      <th>Status</th>
      <th>Tindakan</th>
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
            <td width="300">
                <a href="<?php echo site_url('resepsionis/Reservasi/CheckIn/'.$Get->id_reservasi) ?>"
                 class="btn btn-small btn-success"> Check In</a>
                 <a href="<?php echo site_url('resepsionis/Reservasi/CheckOut/'.$Get->id_reservasi) ?>"
                 class="btn btn-small btn-warning"> Check Out</a>
                <a href="<?php echo site_url('resepsionis/Reservasi/Batalkan/'.$Get->id_reservasi) ?>" class="btn btn-small btn-danger"> Batalkan</a>
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