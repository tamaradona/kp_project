<!doctype html>
<html lang="en">
  <head>
  	<title>Magister Karyawan</title>
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
            <a href="DataMitra.php"><span class="fa fa-sticky-note mr-3" ></span> Master Mitra</a>
          </li>
          <li>
            <a href="#"><span class="fa fa-sticky-note mr-3" ></span> Master Kegiatan</a>
          </li>
        </ul>

    	</nav>
*/
        <!-- Page Content  -->
      <div id="content" class="p-4 p-md-5 pt-5">
        <h2 class="mb-4"><center>Magister Karyawan</h2>
           <?php 
            if($_GET['page']=='edit'){
                include 'form edit.php';
            }
            else{
                include 'DataKaryawan.php';
            } ?>
          </div>
		    </div>
*/
<php
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>