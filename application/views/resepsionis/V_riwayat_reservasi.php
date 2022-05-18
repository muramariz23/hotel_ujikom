<!DOCTYPE html>
<html>
<head>
	<title>Riwayat Reservasi</title>
    <?php include 'partisi/head.php'; ?>
</head>
<body>
    <?php include 'partisi/navbar.php'; ?>
<h1>DATA RIWAYAT RESERVASI KAMAR</h1>


<div class="card-header">
      <form action="" method="post">
          <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1">Filter Tanggal Check In</span>
                    <input type="date" name="txt_filter_tanggal" class="form-control" placeholder="Pilih Tanggal Check In" aria-label="Username" aria-describedby="basic-addon1">
            </div>
            <input type="submit" class="btn btn-outline-primary" value="Cari">
      </form>

      <a href="<?php echo site_url('resepsionis/Riwayat/CetakLaporan') ?>"><button class="btn btn-primary">Cetak Laporan Reservasi</button></a>
        <div class="table-responsive"> 
            <table id="myTable" class="table  table-striped table-bordered" style="width:100%;">
                <thead class="bg-secondary text-white">
    <tr>
      <th>No</th>
      <th>ID Reservasi</th>
      <th>Nama Pegawai</th>
      <th>Nama Pengguna</th>
      <th>Nomor Blok Kamar</th>
      <th>Tanggal Check In</th>
      <th>Tanggal Check Out</th>
      <th>Nama Tamu</th>
      <th>Keterangan</th>
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