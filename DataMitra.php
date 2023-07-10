<?php
include '../auth/koneksi2.php';

$query = mysqli_query($mysqli, "SELECT * from db_mitra");


?>
<!doctype html>
<html lang="en">
  <head>
  	<title>Magister Mitra</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
		
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="css/style.css">
    </head>
  <body>
		
		<div class="wrapper d-flex align-items-stretch">
			<nav id="sidebar">
				<div class="custom-menu">
					<button type="button" id="sidebarCollapse" class="btn btn-primary">
	          <i class="fa fa-bars"></i>
	          <span class="sr-only">Toggle Menu</span>
	        </button>
        </div>
	  		<h1><a href="index.html" class="logo">Project Name</a></h1>
        <ul class="list-unstyled components mb-5">
          <li class="active">
            <a href="homepage.php"><span class="fa fa-home mr-3"></span> Homepage</a>
          </li>
          <li>
              <a href="#"><span class="fa fa-user mr-3" href="#!"></span> Dashboard</a>
          </li>
          <li>
            <a href="#"><span class="fa fa-sticky-note mr-3" href="#!"></span> Penilaian Kinerja</a>
          </li>
          <li>
            <a href="Home.php?page=DataKaryawan"><span class="fa fa-sticky-note mr-3" ></span> Master Pegawai</a>
          </li>
          <li>
            <a href="#"><span class="fa fa-sticky-note mr-3" ></span> Master Mitra</a>
          </li>
          <li>
            <a href="#"><span class="fa fa-sticky-note mr-3" ></span> Master Kegiatan</a>
          </li>
        </ul>

    	</nav>


<!-- Page Content  -->
<center>
<h2>Magister Mitra</h2>

<td><a href="tambah data2.php"class="btn btn-sm btn-info" ><left>Tambah Mitra</a>
<table class="table-bordered table-responsive"width="100%" >
</td>
    <thead>
        <tr>
        <th>No</th><th>NIK</th><th>Nama</th><th>Provinsi</th><th>Kab/kota</th><th>Kec</th><th>Desa/kel</th><th>Jenis Kelamin</th><th>No telp</th><th>action</th>
        </tr>
    </thead>
    <tbody>
    <?php
        $no=0;
        while($result = mysqli_fetch_array($query)){
            $no++;
            ?>
        <tr>
            <td><?php echo $result['no'];?></td>
            <td><?php echo $result['nik'];?></td>
            <td><?php echo $result['nama'];?></td>
            <td><?php echo $result['provinsi'];?></td>
            <td><?php echo $result['kabupaten/kota'];?></td>
            <td><?php echo $result['kec'];?></td>
            <td><?php echo $result['desa/kel'];?></td>
            <td><?php echo $result['jenis_kelamin'];?></td>
            <td><?php echo $result['no_telp'];?></td>
            <td>
            <a href="hapus data2.php?no=<?php echo $result['no'];?> "class="btn btn-sm btn-danger">Hapus</a>
            <a href="form edit2.php?no=<?php  echo $result['no'];?>&&page=edit "class="btn btn-sm btn-warning">Edit</a>
        </tr>
        <?php }?>
</tbody>
</table>
</center>

<?php 
            if($_GET['page']=='edit'){
                include 'form edit2.php';
            }
            else{
                echo 'data mitra';
            } ?>
<php

    <script src="js/jquery.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>
