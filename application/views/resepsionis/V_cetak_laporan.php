<html>
<head>
<style>
* {
	margin: 0;
	padding: 0;
}

#textbox {
	width: 90%;
	margin: 90px auto;
	padding: 10px;
}

.alignleft {
	float: left;
}

.alignright {
	float: right;
}

table, td, th {
  border: 1px solid black;
}

table {
  border-collapse: collapse;
  width: 100%;
}

td {
  text-align: center;
}
</style>
</head>
<body id="textbox">
<center>
<h2>W`-Resto</h2>
</center>
    <h3 class="alignleft">|Laporan <?= $title_pdf ?>|</h3>
    <?php date_default_timezone_set('Asia/Jakarta'); ?>
    <h3 class="alignright">|Tanggal Cetak : <?= date('d F Y') ?> | Jam : <?= date('H:i:s') ?>|</h3>

<hr>
<br>
<hr>
<br>
<table>
  <tr>
    <th width="1px">No</th>
    <th>Kasir</th>
    <th>Kode Transaksi</th>
    <th>Tanggal</th>
    <th>Jam</th>
  </tr>
<?php if(!is_null($GetTransaksi)) : ?>
<?php $no=1; foreach($GetTransaksi as $Get) : ?>
  <tr>
    <td><?= $no++; ?></td>
    <td><?= $Get->nama_user ?></td>
    <td><?= $Get->kode_transaksi ?></td>
    <td><?= $Get->tanggal ?></td>
    <td><?= $Get->jam ?></td>
  </tr>
<?php endforeach; ?>
<?php endif; ?>


<?php if(!is_null($TransaksiTangani)) : ?>
    <tr>
        <td colspan="3">Jumlah Terbanyak Transaksi di Tangani oleh User : <?= $TransaksiTangani->nama_user ?></td>
        <td colspan="2">Sebanyak : <?= $TransaksiTangani->total ?></td>
    </tr>    
<?php endif; ?>

<?php if(!is_null($JumlahTransaksi)) : ?>
    <tr>
        <td colspan="3">Jumlah Transaksi  </td>
        <td colspan="2"><?= $JumlahTransaksi->total ?></td>
    </tr>    
<?php endif; ?>


</table>



<!-- 
<div id="textbox">
		<div class="alignleft">
        <h4 >Tanda Tangan,</h4>
        <br>
        <br>
        <br>
        <br>
        <h4 style="margin-bottom:0px;">Manajer <hr style="width:200px"></h4>
        <h4 style="margin-top:0px;">Manajer</h4>
    </div>
		<div class="alignright">
      <h4>Tanda Tangan,</h4>
      <br>
      <br>
      <br>
      <br>
      <h4 style="margin-bottom:0px;">Muhammad Ridwan Surya <hr style="width:200px"></h4>
      <h4 style="margin-top:0px;">Pemilik W`-Resto</h4>
    </div>
		<div style="clear: both;"></div>
	</div>
<div style="clear: both;"> -->

  

</body>
</html>