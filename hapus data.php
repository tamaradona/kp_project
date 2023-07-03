    <?php
    include '../auth/koneksi.php';
    $no = $_GET['no'];
    $query = mysqli_query($mysqli,"delete from db_karyawan1 where no='$no' ");
    
    header('location:home.php');
    ?>