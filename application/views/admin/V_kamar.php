<!DOCTYPE html>
<html>
<head>
	<title>Kamar</title>
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

<h1>DATA KAMAR</h1>
<a href="<?php echo site_url('admin/Kamar/Add') ?>">TAMBAH DATA</a><br>


<div class="card-header">
      
        <div class="table-responsive"> 
            <table id="myTable" class="table  table-striped table-bordered" style="width:100%;">
                <thead class="bg-secondary text-white">
                  <tr>
                    <th>No</th>
                    <th>ID Kamar</th>
                    <th>Jumlah Kamar Tersedia</th>
                    <th>Tipe Kasur</th>
                    <th>Tipe Kamar</th>
                    <th>No Fasilitas</th>
                    <th>Gambar Kamar</th>
                    <th>Harga Kamar</th>
                    <th>tindakan</th>
                  </tr>
                </thead>
                <tbody>
                           <?php $no = 1; ?>
                    <?php foreach ($GetKamar as $Get): ?>
                    <tr>
                        <td ><?php echo $no++; ?></td>
                        <td width="150">
                           <?php echo $Get->id_kamar ?>
                        </td>
                        <td>
                            <?php echo $Get->jml_kamar ?>
                       </td>
                        <td>
                           <?php echo $Get->tipe_kasur ?>
                        </td>
                        <td>
                            <?php echo $Get->tipe_kamar ?>
                        </td>
                        <td>
                            <?php echo $Get->no_fasilitas ?>
                        </td>
                        <td>
                            <img style="width: 100px; height: 100px;" src="<?php echo base_url('assets/img/') . $Get->gambar_kamar ?>">
                        </td>
                        <td><?php echo $Get->harga_kamar; ?></td>
                        <td width="250">
                            <a href="<?php echo site_url('admin/Kamar/DataDetail/'.$Get->id_kamar).'/view' ?>" class="btn btn-small"><i class="fas fa-edit"></i> Edit</a>
                            <a href="<?php echo site_url('admin/Kamar/DeleteKamar/'.$Get->id_kamar.'/'.$Get->gambar_kamar) ?>" class="btn btn-small text-danger"><i class="fas fa-trash"></i> Hapus</a>
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