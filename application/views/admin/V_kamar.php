<!DOCTYPE html>
<html>
<head>
	<title>fasilitas</title>
    <?php include 'partisi/head.php'; ?>
</head>
<body>
    <?php include 'partisi/navbar.php'; ?>
<h1>DATA KAMAR</h1>
<a href="<?php echo site_url('admin/Kamar/Add') ?>">TAMBAH DATA</a><br>


<div class="card-header">
      
        <div class="table-responsive"> 
            <table id="myTable" class="table  table-striped table-bordered" style="width:100%;">
                <thead class="bg-secondary text-white">
                  <tr>
                    <th>No</th>
                    <th>ID Kamar</th>
                    <th>No Kamar</th>
                    <th>Tipe Kasur</th>
                    <th>Tipe Kamar</th>
                    <th>No Fasilitas</th>
                    <th>Gambar Kamar</th>
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
                            <?php echo $Get->no_kamar ?>
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
                        <td width="250">
                            <a href="<?php echo site_url('admin/Kamar/DataDetail/'.$Get->id_kamar).'/view' ?>" class="btn btn-small"><i class="fas fa-edit"></i> Edit</a>
                            <a href="<?php echo site_url('admin/Kamar/DeleteKamar/'.$Get->id_kamar.'/'.$Get->gambar_kamar) ?>" class="btn btn-small text-danger"><i class="fas fa-trash"></i> Hapus</a>
                       </td>
                    </tr>
                    <?php endforeach; ?>
                    <tr>
                        <td>Garrett Winters</td>
                        <td>Accountant</td>
                        <td>Tokyo</td>
                        <td>63</td>
                        <td>2011/07/25</td>
                        <td>$170,750</td>
                        <td>2011/04/25</td>
                        <td>$320,800</td>
                    </tr>
                    <tr>
                        <td>Ashton Cox</td>
                        <td>Junior Technical Author</td>
                        <td>San Francisco</td>
                        <td>66</td>
                        <td>2009/01/12</td>
                        <td>$86,000</td>
                        <td>2011/04/25</td>
                        <td>$320,800</td>
                    </tr>
                    <tr>
                        <td>Cedric Kelly</td>
                        <td>Senior Javascript Developer</td>
                        <td>Edinburgh</td>
                        <td>22</td>
                        <td>2012/03/29</td>
                        <td>$433,060</td>
                        <td>2011/04/25</td>
                        <td>$320,800</td>
                    </tr>
                    <tr>
                        <td>Airi Satou</td>
                        <td>Accountant</td>
                        <td>Tokyo</td>
                        <td>33</td>
                        <td>2008/11/28</td>
                        <td>$162,700</td>
                        <td>2011/04/25</td>
                        <td>$320,800</td>
                    </tr>
                    <tr>
                        <td>Brielle Williamson</td>
                        <td>Integration Specialist</td>
                        <td>New York</td>
                        <td>61</td>
                        <td>2012/12/02</td>
                        <td>$372,000</td>
                        <td>2011/04/25</td>
                        <td>$320,800</td>
                    </tr>
                    <tr>
                        <td>Herrod Chandler</td>
                        <td>Sales Assistant</td>
                        <td>San Francisco</td>
                        <td>59</td>
                        <td>2012/08/06</td>
                        <td>$137,500</td>
                        <td>2011/04/25</td>
                        <td>$320,800</td>
                    </tr>
                    <tr>
                        <td>Rhona Davidson</td>
                        <td>Integration Specialist</td>
                        <td>Tokyo</td>
                        <td>55</td>
                        <td>2010/10/14</td>
                        <td>$327,900</td>
                        <td>2011/04/25</td>
                        <td>$320,800</td>
                    </tr>
                    <tr>
                        <td>Colleen Hurst</td>
                        <td>Javascript Developer</td>
                        <td>San Francisco</td>
                        <td>39</td>
                        <td>2009/09/15</td>
                        <td>$205,500</td>
                        <td>2011/04/25</td>
                        <td>$320,800</td>
                    </tr>
                    <tr>
                        <td>Sonya Frost</td>
                        <td>Software Engineer</td>
                        <td>Edinburgh</td>
                        <td>23</td>
                        <td>2008/12/13</td>
                        <td>$103,600</td>
                        <td>2011/04/25</td>
                        <td>$320,800</td>
                    </tr>
                    <tr>
                        <td>Jena Gaines</td>
                        <td>Office Manager</td>
                        <td>London</td>
                        <td>30</td>
                        <td>2008/12/19</td>
                        <td>$90,560</td>
                        <td>2011/04/25</td>
                        <td>$320,800</td>
                    </tr>
                    <tr>
                        <td>Quinn Flynn</td>
                        <td>Support Lead</td>
                        <td>Edinburgh</td>
                        <td>22</td>
                        <td>2013/03/03</td>
                        <td>$342,000</td>
                        <td>2011/04/25</td>
                        <td>$320,800</td>
                    </tr>
                    <tr>
                        <td>Charde Marshall</td>
                        <td>Regional Director</td>
                        <td>San Francisco</td>
                        <td>36</td>
                        <td>2008/10/16</td>
                        <td>$470,600</td>
                        <td>2011/04/25</td>
                        <td>$320,800</td>
                    </tr>
                    <tr>
                        <td>Haley Kennedy</td>
                        <td>Senior Marketing Designer</td>
                        <td>London</td>
                        <td>43</td>
                        <td>2012/12/18</td>
                        <td>$313,500</td>
                        <td>2011/04/25</td>
                        <td>$320,800</td>
                    </tr>

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