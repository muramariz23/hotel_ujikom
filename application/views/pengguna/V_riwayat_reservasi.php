<!DOCTYPE html>
<html>
<head>
	<title>HomePage</title>
	<?php include 'partisi/head.php'; ?>
</head>
<body>
	
<h1>RIWAYAT RESERVASI ANDA</h1>
<a href="<?php echo site_url('pengguna/Pengguna') ?>"><button class="btn btn-warning">KEMBALI</button></a>
	

<div class="card-header">
      
        <div class="table-responsive"> 
            <table id="myTable" class="table  table-striped table-bordered" style="width:100%;">
                <thead class="bg-secondary text-white">
    <tr>
      <th>No</th>
      <th>ID Reservasi</th>
      <th>Nomer Kamar</th>
      <th>Tgl Check In</th>
      <th>Tgl Check Out</th>
      <th>Nama Tamu</th>
      <th>Status Pemesanan</th>
      <th>Keterangan</th>
      <th>tindakan</th>
    </tr>
  </thead>
  <tbody>
       <?php $no = 1; ?>
        <?php foreach ($GetRiwayat as $Get): ?>
        <tr>
            <td><?php echo $no++; ?></td>
            <td width="150">
                <?php echo $Get->id_reservasi ?>
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
                <?php echo $Get->stat_pemesanan ?>
            </td>
            <td>
                <?php echo $Get->keterangan ?>
            </td>
            <td width="250">
                <a href="<?php echo site_url('pengguna/Pemesanan/DataBuktiPesanan/'.$Get->id_reservasi) ?>"><button class="btn btn-primary">Cetak Bukti</button></a>
                
                <a 
                 href="<?php echo site_url('admin/Fasilitas/DeleteFasilitas/'.$Get->id_fasilitas) ?>" class="btn btn-small text-danger"><i class="fas fa-trash"></i> Hapus</a>
            </td>
        </tr>
        <?php endforeach; ?>

                </tbody>
            
            </table>

        </div>
    </div>

	<?php include 'partisi/footer.php'; ?>
</body>
</html>