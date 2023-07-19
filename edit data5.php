
<?php
include '../auth/koneksi5.php';
$no                 =$_GET['no'];
$namakegiatan       =$_POST['namakegiatan'];
$unitkerja          =$_POST['unitkerja'];
$tanggalmulai       =$_POST['tanggalmulai'];
$tanggalselesai     =$_POST['tanggalselesai'];
$target             =$_POST['target'];
$satuan             =$_POST['satuan'];
$query = mysqli_query($mysqli,"UPDATE `penilaian2` SET `no`='$no',`namakegiatan`='$namakegiatan',`unitkerja`='$unitkerja',`tanggalmulai`='$tanggalmulai',`tanggalselesai`='$tanggalselesai',`satuan`='$satuan',`target`='$target' WHERE no='$no'");

header('location:penilaian2.php');
?>
    