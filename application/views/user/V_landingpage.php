<!DOCTYPE html>
<html>
<head>
	<title>HOTEL HEBAT</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<style type="text/css">
		body{
			margin: auto;
			padding: auto;
			background-image: linear-gradient( #9ADCFF, #EEC373);
					}

		.navku{
			background-color: #93FFD8;
		}

		.logo{
			width: 50px;
			height: 60px;
		}

		.laman{
			width: 100vw;
			height: 100vh;
		}
		.latar{
			background-color: rgba(150, 50, 10, 0.2);
			width: 90vw;
			height: 90vh;

		}
		
		.konten{
			transform: translateY(10%);
		}


		@font-face{
			font-family: "judul";
			src: url('Kanit-SemiBold.ttf');
		}
		@font-face{
			font-family: "hl";
			src: url('Kanit-Black.ttf');
		}
		@font-face{
			font-family: "subjudul";
			src: url('Kanit-Medium.ttf');
		}
		.judul{
			text-align: center;
			text-transform: uppercase;
			font-size: 135px;
			font-family: "judul";
		}
		.subjudul{
			text-align: center;
			text-transform: uppercase;
			font-size: 75px;
			font-family: "subjudul";
		}

		.gamslide{
			width: 600px;
			height: 430px;
		}

		.gambar{
			
			width: 100%;
			height: 100%;
		}

		.headlaman{
			margin-top: 5%;
			font-size: 40px;
			text-transform: uppercase;
			font-family: "hl";
text-align: center;
		}

		.judkam{
			font-size: 25px;
			text-transform: uppercase;
		}

		.gfslide{
			width: 100%;
			height: 60vh;
		}

		.formulir{
			transform: translate(5%);
			width: 90%;
			height: 70%; 
		}

		.isian{
			margin-top: 1%;
			width: 80%;
			transform: translate(10%);
		}

		.isian input:hover{
			background-color: #FDF6EC;
		}

		.tentang{
			width: 80%;
			height: 100%;
			transform: translate(12%);
		}

		.ablogo{
			width: 10%;
			transform: translateX(50%);
		}
	</style>
</head>
<body>
	<nav class="navbar navbar-expand-lg sticky-top navbar-light navku">
  <div class="container-fluid">
    <img src="logo.png" class="navbar-brand logo">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" href="#coba1"><button class="btn btn-outline-success">Home</button></a>
        </li>
         <li class="nav-item">
          <a class="nav-link" href="#coba2"><button class="btn btn-outline-success">Kamar</button></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#coba3"><button class="btn btn-outline-success">Fasilitas</button></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#coba4"><button class="btn btn-outline-success">Reservasi</button></a>
        </li>

        
       </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>




<div class="laman" id="coba1">
	
	<div class="card row latar top-50 start-50 translate-middle">
		
			<div class=" konten col-6">
				<h1 class="judul">selamat datang</h1>
				<h2 class="subjudul">di hotel hebat</h2>
			</div>


			<div class=" konten col-6">
				<div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item gamslide active">
      <img src="https://i.pinimg.com/originals/b4/c6/69/b4c669d5b8cc03953809ecd50e7f54f4.jpg" class="d-block gambar" alt="...">
    </div>
    <div class="carousel-item gamslide">
      <img src="https://www.hkbac.com/wp-content/uploads/2018/01/1.jpg" class="d-block gambar" alt="...">
    </div>
    <div class="carousel-item gamslide">
      <img src="https://th.bing.com/th/id/OIP.ksta-mvHR3paET6uOo74UAHaEb?pid=ImgDet&rs=1" class="d-block gambar" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
			</div>
		
	</div>
</div>


<div class="laman" id="coba2">
	
	<div class="card latar top-50 start-50 translate-middle">
		<h1 class="headlaman">tipe-tipe kamar yang tersedia</h1>

		<div class="row">
			<div class="col-1"></div>
			<div class="card col-3" style="width: 18rem;">
  				<img src="https://asset-a.grid.id/crop/0x0:0x0/700x0/photo/2018/12/03/1489467437.jpg" class="card-img-top" alt="...">
  					<div class="card-body">
    					<h5 class="card-title judkam">superior</h5>
    					<p class="card-text">Fasilitas</p>
    					<p class="card-text">Kamar mandi, Double Bed, Tv, Meja Kantor, Mini Kulkas</p>
    					<a href="#" class="btn btn-primary">Lihat Detail</a>
  					</div>
			</div>

			<div class="col-1"></div>

			<div class="card col-3" style="width: 18rem;">
			  <img src="https://arsitagx-master-article.s3-ap-southeast-1.amazonaws.com/article-photo/275/Kamar-Hotel-Penuh-Gaya-Foto-1.jpg" class="card-img-top" alt="...">
			  <div class="card-body">
 			   <h5 class="card-title judkam">standar</h5>
			    <p class="card-text">Fasilitas</p>
    					<p class="card-text">Kamar mandi, Double Bed, Tv, Meja Kantor, Mini Kulkas</p>
 			   <a href="#" class="btn btn-primary">Go somewhere</a>
 			 </div>
			</div>

			<div class="col-1"></div>

			<div class="card col-3" style="width: 18rem;">
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
</div>

<div class="laman" id="coba3">
	<div class="card latar top-50 start-50 translate-middle">
		
			<h1 class="headlaman">Fasilitas Umum yang tersedia</h1>
			
			<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
 			 <div class="carousel-indicators">
 			   <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
 			   <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
 			   <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
 			 </div>
 			 <div class="carousel-inner">
 			   <div class="carousel-item active">
 			     <img src="https://static.sehatq.com/content/review/image/1632316358.jpeg" class=" gfslide d-block w-100" alt="...">
			    </div>
			    <div class="carousel-item">
			      <img src="https://res.cloudinary.com/dk0z4ums3/image/upload/v1626060465/attached_image/Relaksasi-Menyehatkan-Dengan-Sauna.jpg" class="gfslide d-block w-100" alt="...">
			    </div>
 			   <div class="carousel-item">
 			     <img src="https://awsimages.detik.net.id/community/media/visual/2020/10/20/bukan-romantis-lampu-remang-remang-di-restoran-bikin-makanan-tak-enak_169.png" class="gfslide d-block w-100" alt="...">
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

	</div>
</div>

<div class="laman" id="coba4">
	
	<div class="card latar top-50 start-50 translate-middle">
		
			<h1 class="headlaman">reservasi kamar hotel</h1>
			<div class="card formulir">
				<form>
					<select class="form-select isian" aria-label="Default select example">
  						<option selected>Tipe Kamar</option>
  						<option value="1">One</option>
  						<option value="2">Two</option>
  						<option value="3">Three</option>
					</select>

					<div class="input-group mb-3 isian">
  						<span class="input-group-text" id="basic-addon1">Tanggal Check In</span>
  						<input type="date" class="form-control" aria-label="Username" aria-describedby="basic-addon1">
					</div>

					<div class="input-group mb-3 isian">
  						<span class="input-group-text" id="basic-addon1">Tanggal Check Out</span>
  						<input type="date" class="form-control" aria-label="Username" aria-describedby="basic-addon1">
					</div>

					<div class="input-group mb-3 isian">
  						<span class="input-group-text" id="basic-addon1">Nama Pemesan</span>
  						<input type="text" class="form-control" aria-label="nama" aria-describedby="basic-addon1">
					</div>

					<div class="input-group mb-3 isian">
					  <span class="input-group-text">Nomor Telepon | Alamat Email</span>
					  <input type="text" aria-label="First name" class="form-control" placeholder="08*************">
					  <input type="text" aria-label="Last name" class="form-control" placeholder="example@your.com">
					</div>
					<div class="input-group mb-3 isian">
  						<span class="input-group-text" id="basic-addon1">Nama Tamu</span>
  						<input type="text" class="form-control" aria-label="nama" aria-describedby="basic-addon1">
					</div>
					<input type="submit" name="" class="isian bg-success">
				</form>
			</div>
		
	</div>
</div>

<div class="laman" id="coba5">
	
	<div class="card latar top-50 start-50 translate-middle">
		
			<div class="konten">
				<h1 class="headlaman">tentang kami</h1>
				<div class="card tentang">
					<img src="logo_owner.png" class="ablogo">
  				<p>Aplikasi Pemesanan Hotel Hebat merupakan sebuah website yang digunakan untuk melakukan
  				pemesanan sebuah kamar hotel. </p>
  				
				</div>
			</div>
		
	</div>
</div>




<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>
</html>