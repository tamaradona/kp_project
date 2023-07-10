<?php
include '../auth/koneksi.php';

$query = mysqli_query($mysqli, "SELECT * from db_karyawan1");


?>
<center>
<form method="GET" action="DataKaryawan.php" >
    
    <label>pencarian kata kunci</label>
    <input type="text" name="cari" value="<?php if(isset($_GET['cari'])){echo $_GET['cari'];}?>">
    <button type="submit">cari</button>
    <br>
</form>
<td><a href="tambah data.php"class="btn btn-sm btn-info"<left>Tambah Karyawan</a>
<table class="table-bordered table-responsive"width="100%" >
</td>
    <thead>
        <tr>
            <th>No</th><th>NIP</th><th>Nama</th><th>Golongan</th><th>Seksi</th><th>Jenis Kelamin</th><th>Jabatan Statistik</th><th>Username</th>
        </tr>
    </thead>
    <tbody>
        <?php
        
        $no=0;
        while($result = mysqli_fetch_array($query)){
            $no++;
            ?>
        <tr>
            <td><?php echo $result['no'];?></td>
            <td><?php echo $result['nip'];?></td>
            <td><?php echo $result['nama'];?></td>
            <td><?php echo $result['golongan'];?></td>
            <td><?php echo $result['seksi'];?></td>
            <td><?php echo $result['jenis kelamin'];?></td>
            <td><?php echo $result['jabatan statistik'];?></td>
            <td><?php echo $result['username'];?></td>
            <td>
                <a href="hapus data.php?no=<?php echo $result['no'];?>" class="btn btn-sm btn-danger">Hapus</a>
                <a href="home.php?no=<?php echo $result['no'];?>&&page=edit" class="btn btn-sm btn-warning">Edit</a>
            </td>
        </tr>
        <?php }?>
</tbody>
</table>
</center>
