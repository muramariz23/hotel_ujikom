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
    <form action="" method="post">
      <h3>Pilih Berdasarkan Tipe Kamar atau Tipe Kasur</h3>
          <div class="input-group mb-3">
  <label class="input-group-text" for="inputGroupSelect01">Tipe Kasur</label>
  <select class="form-select" name="txt_tipe_kasur" id="inputGroupSelect01">
    <option selected>Pilihan</option>
    <option value="single" required>single</option>
    <option value="double" required>double</option>
    <option value="twin" required>twin</option>
  </select>
</div>

<div class="input-group mb-3">
  <label class="input-group-text" for="inputGroupSelect01">Tipe Kamar</label>
  <select class="form-select" name="txt_tipe_kamar" id="inputGroupSelect01">
    <option selected>Pilihan</option>
    <option value="standar" required>standar</option>
    <option value="superior" required>superior</option>
    <option value="deluxe" required>deluxe</option>
  </select>
</div>
            <input type="submit" class="btn btn-outline-primary" value="Cari Kamar">
      </form>
  <div class="row my-auto">
    <?php foreach ($GetKamar as $Get) :?>
      <div class=" mx-auto mb-2 p-2 col-md-3 col-sm-6 card" style="width: 18rem; height: 25rem;">
        <h4>Rp.<?php echo $Get->harga_kamar; ?></h4>
        <h4>Kamar Tersedia : <?php echo $Get->jml_kamar; ?></h4>
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