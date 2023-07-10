    <?php
    include '../auth/koneksi3.php';
    $no = $_GET['no'];
    $query = mysqli_query($mysqli,"DELETE FROM db_kegiatan WHERE no='$no' ");
    
    header('location:DataKegiatan.php');
    ?>