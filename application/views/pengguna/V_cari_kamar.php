<!DOCTYPE html>
<html>
<head>
	<title>Pemesanan Kamar Hotel</title>
	<?php include 'partisi/head.php'; ?>
	
</head>
<body>

<div class="card bg-light">

	<h1>PESAN KAMAR HOTEL</h1>
  <p>Silahkan Pilih Kamar Sesuai Keinginan Anda</p>
    <a href="<?php echo site_url('pengguna/Pengguna') ?>"><button class="btn btn-warning">KEMBALI</button></a>
  <div class="row my-auto">
    <?php foreach ($GetKamar as $Get) :?>
      <div class=" mx-auto mb-2 p-2 col-md-3 col-sm-6 card" style="width: 18rem; height: 25rem;">
        <h4><?php echo $Get->no_kamar; ?></h4>
           <img class="w-50 h-50 mx-auto card" src="<?php echo base_url('assets/img/') . $Get->gambar_kamar ?>">
           <p>tipe kamar : <?php echo $Get->tipe_kamar; ?></p>
           <p>tipe kasur : <?php echo $Get->tipe_kasur; ?></p>
           <p>isi fasilitas : <?php echo $Get->isi_fasilitas; ?></p>
            <a href="<?php echo site_url('pengguna/Pemesanan/DetailKamarReservasi/'.$Get->id_kamar).'/view' ?>"
                 class="btn btn-small btn-success"><i class="fas fa-edit"></i>Lihat Kamar</a>
      </div>
      <?php endforeach; ?>
  </div>
  
  


</div>


<?php include 'partisi/footer.php'; ?>
</body>
</html>