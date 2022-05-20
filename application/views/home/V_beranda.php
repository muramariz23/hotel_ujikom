<!DOCTYPE html>
<html>
<head>
	<title>Hotel Hebat</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/bootstrap/css/bootstrap.css') ?>">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
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
    					<h5 class="card-title judkam">standar</h5>
    					<p class="card-text">Fasilitas</p>
    					<p class="card-text">Tv, Meja Kantor, Mini Kulkas</p>
    					
  					</div>
			</div>

			<div class="card center col-md-3 col-sm-6" style="width: 18rem;">
			  <img src="https://arsitagx-master-article.s3-ap-southeast-1.amazonaws.com/article-photo/275/Kamar-Hotel-Penuh-Gaya-Foto-1.jpg" class="card-img-top" alt="...">
			  <div class="card-body">
 			   <h5 class="card-title judkam">superior</h5>
			    <p class="card-text">Fasilitas</p>
    					<p class="card-text">Tv, Meja Kantor, Mini Kulkas, teras, pemanas ruangan</p>
 			 </div>
			</div>

			<div class="card col-md-3 col-sm-6" style="width: 18rem;">
			  <img src="https://static.republika.co.id/uploads/images/inpicture_slide/kamar-deluxe-di-hotel-jw-marriott-jakarta-_151013112205-613.jpg" class="card-img-top" alt="...">
			  <div class="card-body">
			    <h5 class="card-title judkam">deluxe</h5>
 			  <p class="card-text">Fasilitas</p>
    					<p class="card-text">Tv, Meja Kantor, teras, pemanas ruangan, mini bar, kolam renang indoor</p>
 			   
 			 </div>
			</div>

		</div>
	</div>


	<div class="container card mt-3">
		<h1 class="text-center">Fasilitas-fasilitas Umum Yang Tersedia</h1>
		<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="https://asset.kompas.com/crops/RYpHR-_8QhxhV2YAqH-pDIBnP9Y=/11x0:1500x993/750x500/data/photo/2021/12/23/61c37fa83b3fe.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="https://awsimages.detik.net.id/community/media/visual/2020/10/20/bukan-romantis-lampu-remang-remang-di-restoran-bikin-makanan-tak-enak_169.png?w=700&q=90" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="https://cdn.futuready.com/artikel/media/2018/12/26110858/shutterstock_721723381.jpg" class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
		<div class="card "></div>
	</div>


	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/bootstrap/js/bootstrap.js') ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/bootstrap/js/bootstrap.bundle.js') ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/bootstrap/js/bootstrap.bundle.min.js') ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/bootstrap/js/bootstrap.esm.js') ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/bootstrap/js/bootstrap.esm.min.js') ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/bootstrap/js/bootstrap.min.js') ?>">
</body>
</html>