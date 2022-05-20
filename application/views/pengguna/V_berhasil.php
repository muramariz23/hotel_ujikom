


<!DOCTYPE html>
<html>
<head>
	<title>Berhasil</title>
	<?php include 'partisi/head.php'; ?>
	
</head>
<body>
<!-- <?php include 'partisi/navbar.php'; ?> -->

<div class="card wadah bg-light mt-3">

	<?php foreach ($GetPengguna as $Get) :?>
	
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
	<a href="<?php echo site_url('pengguna/Pengguna/LengkapiData/'.$Get->id_login).'/view' ?>"><button>LENGKAPI DATA</button></a>
	<?php endforeach; ?>


</div>


<?php include 'partisi/footer.php'; ?>
</body>
</html>