    <?php
    include '../auth/koneksi4.php';
    $no = $_GET['no'];
    $query = mysqli_query($mysqli,"DELETE FROM penilaian WHERE no='$no' ");
    
    header('location:penilaian.php');
    ?>