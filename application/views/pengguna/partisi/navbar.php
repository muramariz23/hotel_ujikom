

<nav class="navbar navbar-expand-lg navbar-light bg-secondary position-relative">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">HOTEL HEBAT</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="<?php echo site_url('pengguna/Pengguna') ?>"><button class="btn btn-outline-light">Home</button></a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="<?php echo site_url('pengguna/Pemesanan') ?>"><button class="btn btn-outline-light">Reservasi</button></a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="<?php echo site_url('pengguna/Pemesanan/dataPesanan/'.$detail['id_pengguna']) ?>"><button class="btn btn-outline-light">Riwayat</button></a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="<?php echo site_url('pengguna/Pengguna/Profile/'.$detail['id_pengguna']) ?>"><button class="btn btn-outline-light">Profile</button></a>
        </li>
      </ul>
      <a href="<?php echo site_url('Login/logout') ?>"><button class="btn btn-outline-light">LOG OUT</button></a>
        
    </div>
  </div>
</nav>