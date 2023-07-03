<h3> Tambah Mitra </h3>
<form action="" method="post">
<table>
    <tr>
        <td width="130">NIP Karyawan</td>
        <td><input type="text" name="nip"></td
    </tr>
    <tr>
        <td > Nama </td>
        <td><input type="text" name="nama"></td
    </tr>
    <tr>
        <td > Golongan </td>
        <td><input type="text" name="golongan"></td
    </tr>
    <tr>
        <td > Seksi </td>
        <td><input type="text" name="seksi"></td
    </tr>
    <tr>
        <td > Jenis Kelamin </td>
        <td><input type="text" name="jenis kelamin"></td
    </tr>
    <tr>
        <td > Jabatan Statistik </td>
        <td><input type="text" name="jabatan statistik"></td
    </tr>
    <tr>
        <td > Username </td>
        <td><input type="text" name="username"></td
    </tr>
    <tr>
        <td></td>
        <td><input type="submit" value="simpan" name="proses"></td>
    </tr>
</table>
</form>
 
<?php
include '../auth/koneksi.php';
if(isset($_POST['proses'])){
    mysqli_query($mysqli,"insert into db_karyawan1 set
    nip = '$_POST[nip]',
    nama = '$_POST[nama]',
    golongan = '$_POST[golongan]',
    seksi = '$_POST[seksi]',
    jenis kelamin = '$_POST[jenis_kelamin]',
    jabatan statistik ='$_POST[jabatan_statistik]',
    username = '$_POST[username]',
   ");

    echo "Data karyawan baru telah disimpan";
}

?>
    