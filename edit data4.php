
<?php
include '../auth/koneksi4.php';
$no                 =$_GET['no'];
$namakegiatan       =$_POST['namakegiatan'];
$unitkerja          =$_POST['unitkerja'];
$tanggalmulai       =$_POST['tanggalmulai'];
$tanggalselesai     =$_POST['tanggalselesai'];
$target             =$_POST['target'];
$satuan             =$_POST['satuan'];
$query = mysqli_query($mysqli,"UPDATE `penilaian` SET `no`='$no',`namakegiatan`='$namakegiatan',`unitkerja`='$unitkerja',`tanggalmulai`='$tanggalmulai',`tanggalselesai`='$tanggalselesai',`satuan`='$satuan',`target`='$target' WHERE no='$no'");

header('location:penilaian.php');
?>
    