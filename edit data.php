
<?php
include '../auth/koneksi.php';
$no                 =$_GET['no'];
$nip                =$_POST['nip'];
$nama               =$_POST['nama'];
$golongan           =$_POST['golongan'];
$seksi              =$_POST['seksi'];
$jenis kelamin      =$_POST['jenis kelamin'];
$jabatan statistik  =$_POST['jabatan statistik'];
$username           =$_POST['username'];
$query = mysqli_query($mysqli,"update db_karyawan1 set nip='$nip',nama='$nama',golongan='$golongan' where no='$no' ");

header('location:Home.php');
?>
    