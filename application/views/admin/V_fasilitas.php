<!DOCTYPE html>
<html>
<head>
	<title>fasilitas</title>
</head>
<body>
<h1>TAMPILAN FASILITAS</h1>
<a href="<?php echo site_url('admin/Fasilitas/Add') ?>">TAMBAH DATA</a><br>
<table>
	<thead>
		<tr>
		<td>No</td>
		<td>ID Fasilitas</td>
		<td>Nomer Fasilitas</td>
		<td>Jenis Fasilitas</td>
		<td>Isi Fasilitas</td>
		<td>tindakan</td>
		</tr>
	</thead>
	<tbody>
        <?php $no = 1; ?>
        <?php foreach ($GetFasilitas as $Get): ?>
        <tr>
            <td><?php echo $no++; ?></td>
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
                <a href="<?php echo site_url('admin/fasilitas/edit/'.$Get->id_fasilitas) ?>"
                 class="btn btn-small"><i class="fas fa-edit"></i> Edit</a>
                <a 
                 href="<?php echo site_url('admin/Fasilitas/DeleteFasilitas/'.$Get->id_fasilitas) ?>" class="btn btn-small text-danger"><i class="fas fa-trash"></i> Hapus</a>
            </td>
        </tr>
        <?php endforeach; ?>

        </tbody>

</table>
</body>
</html>