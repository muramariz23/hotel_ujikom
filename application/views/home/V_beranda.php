<!DOCTYPE html>
<html>
<head>
	<title>Hotel Hebat</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/bootstrap/css/bootstrap.css') ?>">

	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css') ?>">
</head>
<body class="bg-light" style="background-image: url('https://i.pinimg.com/originals/b4/c6/69/b4c669d5b8cc03953809ecd50e7f54f4.jpg');">
	<nav class="navbar navbar-expand-lg sticky-top navbar-light bg-info">
  <div class="container-fluid">
    <img src="<?php echo base_url('assets/img/logo.png') ?>" class="navbar-brand" style="width: 50px; height: 60px;">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" href="#coba1"><button class="btn btn-outline-dark">Home</button></a>
        </li>
         <li class="nav-item">
          <a class="nav-link" href="#coba2"><button class="btn btn-outline-dark">Kamar</button></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#coba3"><button class="btn btn-outline-dark">Fasilitas</button></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#coba5"><button class="btn btn-outline-dark">Tentang Kami</button></a>
        </li>
        
       </ul>
       	  <a href="<?php echo site_url('pengguna/Pengguna/AddUser') ?>"><button class="btn btn-primary">Registrasi</button></a>
       	  <h1> | </h1>
       	  <a href="<?php echo site_url('Login') ?>"><button class="btn btn-success">Login</button></a>

    </div>
  </div>
	</nav>
	<br>
	<br>
	<div class="container card">
		<h1 class="text-center" style="font-size: 50px;">SELAMAT DATANG DI HOTEL HEBAT</h1>
		<br>
		<h1 class="text-center" style="font-size: 40px;">Reservasi Kamar Hotel Dengan Mudah Dan Terpercaya</h1>
	</div>

	<div class="container card mt-3">
		<h1 class="mx-auto">tipe-tipe kamar yang tersedia</h1>

		<div class="row mx-auto mt-5">
			<div class="card col-md-3 col-sm-6" style="width: 18rem;">
  				<img src="https://asset-a.grid.id/crop/0x0:0x0/700x0/photo/2018/12/03/1489467437.jpg" class="card-img-top" alt="...">
  					<div class="card-body">
    					<h5 class="card-title judkam">superior</h5>
    					<p class="card-text">Fasilitas</p>
    					<p class="card-text">Kamar mandi, Double Bed, Tv, Meja Kantor, Mini Kulkas</p>
    					<a href="#" class="btn btn-primary">Lihat Detail</a>
  					</div>
			</div>

			<div class="card center col-md-3 col-sm-6" style="width: 18rem;">
			  <img src="https://arsitagx-master-article.s3-ap-southeast-1.amazonaws.com/article-photo/275/Kamar-Hotel-Penuh-Gaya-Foto-1.jpg" class="card-img-top" alt="...">
			  <div class="card-body">
 			   <h5 class="card-title judkam">standar</h5>
			    <p class="card-text">Fasilitas</p>
    					<p class="card-text">Kamar mandi, Double Bed, Tv, Meja Kantor, Mini Kulkas</p>
 			   <a href="#" class="btn btn-primary">Go somewhere</a>
 			 </div>
			</div>

			<div class="card col-md-3 col-sm-6" style="width: 18rem;">
			  <img src="https://static.republika.co.id/uploads/images/inpicture_slide/kamar-deluxe-di-hotel-jw-marriott-jakarta-_151013112205-613.jpg" class="card-img-top" alt="...">
			  <div class="card-body">
			    <h5 class="card-title judkam">deluxe</h5>
 			  <p class="card-text">Fasilitas</p>
    					<p class="card-text">Kamar mandi, Double Bed, Tv, Meja Kantor, Mini Kulkas</p>
 			   <a href="#" class="btn btn-primary">Go somewhere</a>
 			 </div>
			</div>

		</div>
	</div>


	<div class="container card mt-3">
		<h1 class="text-center">Fasilitas-fasilitas Umum Yang Tersedia</h1>

		<div class="card "></div>
	</div>



	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/bootstrap/js/bootstrap.js') ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/bootstrap/js/bootstrap.bundle.js') ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/bootstrap/js/bootstrap.bundle.min.js') ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/bootstrap/js/bootstrap.esm.js') ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/bootstrap/js/bootstrap.esm.min.js') ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/bootstrap/js/bootstrap.min.js') ?>">
</body>
</html>