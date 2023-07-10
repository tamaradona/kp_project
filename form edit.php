<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<h2>Form Edit Data Karyawan</h2>
<form action="edit data.php?no=<?php echo $_GET['no'];?>" method="post">
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">NIP</label>
      <input type="text" class="form-control" id="inputNIP" placeholder="nip" name="nip" required>
    </div>
  <div class="form-group">
    <label for="inputAddress">nama</label>
    <input type="text" class="form-control" id="inputNama" placeholder="" name="nama" required>
  </div>
  </div>
  <div class="form-group">
    <label for="inputAddress">Golongan</label>
    <input type="text" class="form-control" id="inputGolongan" placeholder="golongan" name="golongan" required>
  </div>
  <div class="form-group">
    <label for="inputAddress2">Seksi</label>
    <input type="text" class="form-control" id="inputSeksi" placeholder="seksi" name="seksi" required>
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputCity">Jenis Kelamin</label>
      <input type="text" class="form-control" id="inputJenisKelamin" placeholder="jenis kelamin" name="jenis kelamin" required>
    </div>
  </div>
  <div class="form-group">
    <label for="inputAddress">Jabatan Statistik</label>
    <input type="text" class="form-control" id="inputJabatanStatistik" name="jabatan statistik" required>
  </div>
  <div class="form-row">
  <div class="form-group col-md-6">
      <label for="inputCity2">Username</label>
      <input type="text" class="form-control" id="inputUsername" placeholder="username" name="username" required>
  </div>
</div>

  <button type="submit" class="btn btn-primary">Simpan</button>
</form>

