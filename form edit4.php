<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<head>
  	<title>Penilaian</title>
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
            <a href="#"><span class="fa fa-edit mr-3" href="#!"></span> Penilaian Kinerja</a>
          </li>
          <li>
            <a href="penilaian2.php"><span class="fa fa-edit mr-3" href="#!"></span> Penilaian Pelatihan</a>
          </li>
          <li>
            <a href="honor.php"><span class="fa fa-money mr-3" href="#!"></span> Honor Kegiatan</a>
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
          <li>
            <a href="logout.php"><span class="fa fa-sign-out mr-3"></span> Sign Out</a>
          </li>
        </ul>

    	</nav>
      */
        <!-- Page Content  -->
      <div id="content" class="p-4 p-md-5 pt-5">
      <h2 class="mb-4"><center>Edit Penilaian Kegiatan</h2>
		  
<form action="edit data4.php?no=<?php echo $_GET['no'];?>" method="post">
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Nama Kegiatan</label>
      <input type="text" class="form-control" id="inputEmail4"  name="namakegiatan" required>
    </div>
  <div class="form-group col-md-6">
      <label for="inputEmail4">Unit Kerja</label>
      <input type="text" class="form-control" id="inputEmai15"  name="unitkerja" required>
    </div>
  <div class="form-group">
    <label for="inputAddress">Tanggal Mulai</label>
    <input type="date" class="form-control" id="inputAddress"  name="tanggalmulai" required>
  </div>
  <div class="form-group">
    <label for="inputAddress">Tanggal Selesai</label>
    <input type="date" class="form-control" id="inputAddress2"  name="tanggalselesai" required>
  </div>
</div>
  <div class="form-group">
      <label for="inputCity3">Target</label>
      <input type="int" class="form-control" id="inputCity3" name="target" required>
  </div>
  <div class="form-group">
      <label for="inputCity3">Satuan</label>
      <input type="text" class="form-control" id="inputCity3" name="satuan" required>
  </div>
  <button type="submit" class="btn btn-primary">Simpan</button>
  </div>
</div>

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

