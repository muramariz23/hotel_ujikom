<!DOCTYPE html>
<html>
<head>
	<title>Tambah Data</title>
</head>
<body>
<h1>TAMBAH DATA FASILITAS</h1>
<form action="<?php echo site_url('admin/Fasilitas/AddFasilitas'); ?>" method="post">
	NOMER FASILITAS<input type="text" name="txt_no_fasilitas"><br>
	<label for="j_fasilitas">JENIS FASILITAS</label>
	<select id="j_fasilitas" name="txt_j_fasilitas">
    <option value="umum">UMUM</option>
    <option value="standar">STANDAR</option>
    <option value="khusus">KHUSUS</option>
     </select>
	ISI FASILITAS<input type="text" name="txt_isi_fasilitas"><br>
	<input type="submit" value="Simpan">
</form>
</body>
</html>