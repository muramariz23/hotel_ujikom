<!DOCTYPE html>
<html>
<head>
	<title>fasilitas</title>
    <?php include 'partisi/head.php'; ?>
</head>
<body>
    <?php include 'partisi/navbar.php'; ?>
<h1>DATA USER</h1>



<table class="table">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">ID Login</th>
      <th scope="col">Username</th>
      <th scope="col">Password</th>
      <th scope="col">Status</th>
      <th scope="col">tindakan</th>
    </tr>
  </thead>
  <tbody>
       <?php $no = 1; ?>
        <?php foreach ($GetUser as $Get): ?>
        <tr>
            <td scope="row"><?php echo $no++; ?></td>
            <td width="150">
                <?php echo $Get->id_login ?>
            </td>
            <td>
                <?php echo $Get->username ?>
            </td>
            <td>
                <?php echo $Get->password ?>
            </td>
            <td>
                <?php echo $Get->status ?>
            </td>
            <td width="250">
                <a href="<?php echo site_url('admin/Pegawai/Add/'.$Get->id_login).'/view' ?>"
                 class="btn btn-small"><i class="fas fa-edit"></i> Lengkapi</a>
            </td>
        </tr>
        <?php endforeach; ?>

  </tbody>
</table>


<?php include 'partisi/footer.php'; ?>
</body>
</html>