<!DOCTYPE html>
<html>
<head>
	<title>Pegawai</title>
    <?php include 'partisi/head.php'; ?>
</head>
<body>
   
<?php include 'partisi/navbar.php'; ?>

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

<h1>DATA PEGAWAI</h1>
<a href="<?php echo site_url('admin/Pegawai/AddUser') ?>">TAMBAH DATA</a><br>


<div class="card-header">
      
        <div class="table-responsive"> 
            <table id="myTable" class="table  table-striped table-bordered" style="width:100%;">
                <thead class="bg-secondary text-white">
                  <tr>
                    <th>No</th>
                    <th>ID Pegawai</th>
                    <th>Username</th>
                    <th>Nama Pegawai</th>
                    <th>Alamat</th>
                    <th>Status Pegawai</th>
                    <th>tindakan</th>
                  </tr>
                </thead>
                <tbody>
                           <?php $no = 1; ?>
                    <?php foreach ($GetPegawai as $Get): ?>
                    <tr>
                        <td ><?php echo $no++; ?></td>
                        <td width="150">
                           <?php echo $Get->id_pegawai ?>
                        </td>
                        <td>
                            <?php echo $Get->username ?>
                       </td>
                        <td>
                           <?php echo $Get->nama_pegawai ?>
                        </td>
                        <td>
                            <?php echo $Get->alamat ?>
                        </td>
                        <td>
                            <?php echo $Get->stat_pegawai ?>
                        </td>
                        <td width="250">
                            <a href="<?php echo site_url('admin/Pegawai/DataDetail/'.$Get->id_pegawai).'/view' ?>" class="btn btn-outline-info"> Edit</a>
                            <a href="<?php echo site_url('admin/Pegawai/DeletePegawai/'.$Get->id_pegawai.'/'.$Get->id_login) ?>" class="btn btn-outline-danger"> Hapus</a>
                       </td>
                    </tr>
                    <?php endforeach; ?>
                    
                </tbody>
            
            </table>

        </div>
    </div>






<script>
        $(document).ready(function() {
         $('#myTable').DataTable({
            "scrollY": "250px",
            "scrollCollapse": true,
                    "paging":   false,

         });
        });
    </script>
<?php include 'partisi/footer.php'; ?>
</body>
</html>