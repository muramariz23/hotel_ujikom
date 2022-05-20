<!DOCTYPE html>
<html>
<head>
	<title>fasilitas</title>
    <?php include 'partisi/head.php'; ?>
</head>
<body>


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
                 class="btn btn-small btn-primary"> Lengkapi</a>
            </td>
        </tr>
        <?php endforeach; ?>

  </tbody>
</table>


<?php include 'partisi/footer.php'; ?>
</body>
</html>