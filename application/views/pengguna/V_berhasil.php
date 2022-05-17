<h1>anda berhasil</h1>
<?php foreach ($GetPengguna as $Get) :?>
	<h2><?php echo $Get->id_login; ?></h2>
	<?php endforeach; ?>

	<a href="<?php echo site_url('pengguna/Pengguna/LengkapiData/'.$Get->id_login).'/view' ?>"><button>LENGKAPI DATA</button></a>