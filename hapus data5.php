    <?php
    include '../auth/koneksi5.php';
    $no = $_GET['no'];
    $query = mysqli_query($mysqli,"DELETE FROM penilaian2 WHERE no='$no' ");
    
    header('location:penilaian2.php');
    ?>