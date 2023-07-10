<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<!doctype html>
<html lang="en">
  <head>
  	<title>Form Edit Data</title>
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
      */
        <!-- Page Content  -->
      <div id="content" class="p-4 p-md-5 pt-5">
      <h2 class="mb-4"><center>Edit Magister Mitra</h2>
		  
<form action="edit data2.php?no=<?php echo $_GET['no'];?>" method="post">
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">NIK</label>
      <input type="text" class="form-control" id="inputEmail4" placeholder="nik" name="nik" required>
    </div>
  <div class="form-group">
    <label for="inputAddress">Nama</label>
    <input type="text" class="form-control" id="inputAddress" placeholder="nama" name="nama" required>
  </div>
  </div>
  <div class="form-group">
    <label for="inputAddress">Provinsi</label>
    <input type="text" class="form-control" id="inputAddress" placeholder="provinsi" name="provinsi" required>
  </div>
  <div class="form-group">
    <label for="inputAddress2">Kabupaten/kota</label>
    <input type="text" class="form-control" id="inputAddress2" placeholder="kabupaten/kota" name="kabupaten/kota" required>
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputCity">Kec</label>
      <input type="text" class="form-control" id="inputCity" name="kec" required>
    </div>
  </div>
  <div class="form-group">
    <label for="inputAddress">Desa</kel/label>
    <input type="text" class="form-control" id="inputAddress" name="desa/kel" required>
  </div>
  <div class="form-row">
  <div class="form-group col-md-6">
      <label for="inputCity2">Jenis kelamin</label>
      <input type="text" class="form-control" id="inputCity2" name="jenis_kelamin" required>
  </div>
  <div class="form-row">
  <div class="form-group col-md-6">
      <label for="inputCity3">no telpon</label>
      <input type="text" class="form-control" id="inputCity3" placeholder="no_telp" name="no telp" required>
  </div>
</div>
</div>
  <button type="submit" class="btn btn-primary">Simpan</button>
</div>
</div>


</form>

<php
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>
