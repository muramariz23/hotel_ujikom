



<nav class="navbar navbar-expand-lg navbar-light bg-secondary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">HOTEL HEBAT</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#"><button class="btn btn-outline-light">Dashboard</button></a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#"><button class="btn btn-outline-light">Fasilitas</button></a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#"><button class="btn btn-outline-light">Kamar</button></a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#"><button class="btn btn-outline-light">Pegawai</button></a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#"><button class="btn btn-outline-light">Reservasi</button></a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            <button class="btn btn-outline-light">Tambah Data</button>
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#">Fasilitas</a></li>
            <li><a class="dropdown-item" href="#">Kamar</a></li>
            <li><a class="dropdown-item" href="#">Pegawai</a></li>
            </ul>
        </li>
      </ul>
      <a href="<?php echo site_url('Login/logout') ?>"><button class="btn btn-outline-light">LOG OUT</button></a>
        
    </div>
  </div>
</nav>