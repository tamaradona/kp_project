    <?php
    include '../auth/koneksi2.php';
    $no = $GET_['no'];
    $query = mysqli_query($mysqli,"DELETE FROM db_mitra WHERE no='$no' ");
    
    header('location:DataMitra.php');
    ?>