<!DOCTYPE html>
<html>
<head>
	<title>fasilitas</title>
    <?php include 'partisi/head.php'; ?>
</head>
<body>
    <?php include 'partisi/navbar.php'; ?>
<h1>DATA FASILITAS</h1>
<a href="<?php echo site_url('admin/Fasilitas/Add') ?>">TAMBAH DATA</a><br>



<table class="table">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">ID Fasilitas</th>
      <th scope="col">Nomer Fasilitas</th>
      <th scope="col">Jenis Fasilitas</th>
      <th scope="col">Isi Fasilitas</th>
      <th scope="col">tindakan</th>
    </tr>
  </thead>
  <tbody>
       <?php $no = 1; ?>
        <?php foreach ($GetFasilitas as $Get): ?>
        <tr>
            <td scope="row"><?php echo $no++; ?></td>
            <td width="150">
                <?php echo $Get->id_fasilitas ?>
            </td>
            <td>
                <?php echo $Get->no_fasilitas ?>
            </td>
            <td>
                <?php echo $Get->j_fasilitas ?>
            </td>
            <td>
                <?php echo $Get->isi_fasilitas ?>
            </td>
            <td width="250">
                <a href="<?php echo site_url('admin/fasilitas/DataDetail/'.$Get->id_fasilitas).'/view' ?>"
                 class="btn btn-small"><i class="fas fa-edit"></i> Edit</a>
                <a 
                 href="<?php echo site_url('admin/Fasilitas/DeleteFasilitas/'.$Get->id_fasilitas) ?>" class="btn btn-small text-danger"><i class="fas fa-trash"></i> Hapus</a>
            </td>
        </tr>
        <?php endforeach; ?>

  </tbody>
</table>


<?php include 'partisi/footer.php'; ?>
</body>
</html>