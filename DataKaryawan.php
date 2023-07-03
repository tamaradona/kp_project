<?php
include '../auth/koneksi.php';

$query = mysqli_query($mysqli, "SELECT * from db_karyawan1");


?>
<td><a href="tambah data.php"class="btn btn-sm btn-info"style "center">Tambah Karyawan</a>
<table class="table-bordered table-responsive"width="100%" >
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
                <a href="form edit.php?no=<?php echo $result['no'];?>&&page=edit" class="btn btn-sm btn-warning">Edit</a>
            </td>
        </tr>
        <?php }?>
</tbody>
</table>