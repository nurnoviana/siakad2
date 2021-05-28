<?php
	if ($this->session->login_status != True) {
		redirect('login');
	}
?>

    <h1>Input Data Dosen</h1>

    <form action="<?php echo site_url("dosen/add") ?>" method="post">
      Masukkan ID Dosen <br>
      <input type="text" name="iddosen"> <br>
      Masukkan Nama Dosen <br>
      <input type="text" name="namadosen"> <br>
      Masukkan Alamat <br>
      <input type="text" name="alamatdosen"> <br>
      Masukkan Nomor Telepon<br>
      <input type="text" name="notlpdosen"> <br>
      Masukkan Gender <br>
      <input type="radio" name="genderdosen" value="Laki-Laki"> Laki-Laki
      <input type="radio" name="genderdosen" value="Perempuan"> Perempuan <br>

      <input type="submit" name="submit" value="Tambah Data">
    </form>
		<button class="btn btn-light" onclick="location.href='<?php echo site_url("dosen/index"); ?>'">Cancel</button>
