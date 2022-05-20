<!DOCTYPE html>
<html>
<head>
	<title>Transaksi</title>
	<?php include 'partisi/head.php'; ?>
	
</head>
<body>
  
<?php if ($this->session->flashdata('success')) : ?>
                            <div class="alert alert-success" role="alert">
                                <?php echo $this->session->flashdata('success'); ?>
                            </div>
                        <?php endif; ?>
                <?php if ($this->session->flashdata('danger')) : ?>
                            <div class="alert alert-danger" role="alert">
                                <?php echo $this->session->flashdata('danger'); ?>
                            </div>
                <?php endif; ?>
                 <?php if ($this->session->flashdata('warning')) : ?>
                            <div class="alert alert-warning" role="alert">
                                <?php echo $this->session->flashdata('warning'); ?>
                            </div>
                <?php endif; ?>
                
<div class="card wadah bg-light">

	<h1>Pembayaran Kamar Hotel</h1>
<form action="<?php echo site_url('resepsionis/Transaksi/Pembayaran'); ?>" method="post">
  <input type="hidden" name="txt_id_reservasi" value="<?php echo $detail['id_reservasi']?>">
  <input type="hidden" name="txt_id_pegawai" value="<?php echo $detail['id_pegawai']?>">
  <input type="hidden" name="txt_id_pengguna" value="<?php echo $detail['id_pengguna']?>">
  <input type="hidden" name="txt_harga" value="<?php echo $detail['harga']?>">


  <h3>Nama Pengguna : <?php echo $detail['nama_pengguna']; ?></h3>
  <h3>Nama tamu : <?php echo $detail['nama_tamu']; ?></h3>
  <h3>Jumlah Kamar Dipesan : <?php echo $detail['jml_kmr_dipesan']; ?></h3>
  <h3>Total Harga : Rp. <?php echo $detail['harga']; ?></h3>
	<div class="input-group mb-3">
  <span class="input-group-text" id="basic-addon1">Jumlah Pembayaran</span>
  <input type="number" name="txt_jml_bayar" class="form-control" placeholder="Jumlah Pembayaran" aria-label="Username" aria-describedby="basic-addon1"required>
</div>	
	<input class="btn-primary form-control" type="submit" value="Bayar">
	
</form>
<br>
	<a class="col" href="<?php echo site_url('resepsionis/Reservasi')?>"><button class="btn btn-warning form-control">Kembali</button></a>


</div>


<?php include 'partisi/footer.php'; ?>
</body>
</html>