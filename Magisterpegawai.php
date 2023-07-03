<?php
$db_host="localhost";
$db_user ="root";
$db_pass="";
$db_name="dpw_ti_0210048302";
?>
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-0">
            <div class="col-sm2">
                <h1 align="center">Form tamba pasien baru</h1>
                </div>
</div>
</div>
</section>
<!-- skrip simpan data baru-->
<?php
if(isset($_POST['tambah_pasien'])) {
    $no_pasien=$_POST['no_pasien'];
    $nm_pasien=$_POST['nm_pasien'];
    $tempat_lahir=$_POST['tempat_lahir'];
    $tgl_lahir=$_POST['tgl_lahir'];
    $alamat=$_POST['alamat']

    if($no_pasien==empty)){
    echo '<div class="warning ">Data pasien tidak boleh kosong</div>';
    }else{
    $insert=*mysqli_query($koneksi, "insert into pasien (no_pasien,nm_pasien,tempat_lahir,tgl_lahir,alamat)
    values ('$no_pasien','$nm_pasien', '$tempat_lahir','$tgl_lahir', '$alamat')");  

        if($insert){
            echo '<div class="alert alert-succes alert-dismissible">Berhasil Disimpan</div';
            echo "<meta http-equiv='refresh' content='0 url=index.php?page=pasien'>";
        }else{
            echo '<div class="error">Pasien gagal disimpan</div>';
        }
    }
}
?>
<!-- batas simpan data baru-->
<!--maincontent-->
<section class="content">
<div class="cpntainer-fluid">
<div class="card">
<div class="card-body p-2">
<form method="post" action="">
<br>no_pasien
<input type="text" name="no_pasien" placeholder="no_pasien" class="form control">
<br>Nama pasien
<input type="text" name="nm_pasien" placeholder="Nama pasien" class="form control">
<br>tempat_lahir
<input type="text" name="tempat_lahir" placeholder="tempat lahir" class="form control">
<br>tanggal lahir
<input type="text" name="tgl_lahir" placeholder="tanggal lahir" class="form control">
<br>alamat
<input type="text" name="alamat" placeholder="alamat" class="form control">
<br>
<input type="text" name="tambah_pasien" value="SIMPAN" class="submit btn btn-md btn-success">
</form>
</div>
</div>
</div>
</section