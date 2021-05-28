<?php
	if ($this->session->login_status != True) {
		redirect('login');
	}
?>

    <h1>Input Data Mahasiwa</h1>

    <form action="<?php echo site_url("mahasiswa/add") ?>" method="post">
      Masukkan NIM <br>
      <input type="text" name="nim"> <br>
      Masukkan Nama Mahasiwa <br>
      <input type="text" name="nama"> <br>
      Masukkan Alamat <br>
      <input type="text" name="alamat"> <br>
      Masukkan Tanggal Lahir<br>
      <input type="date" name="tgllhr"> <br>
      Masukkan Gender <br>
      <input type="radio" name="gender" value="Laki-Laki"> Laki-Laki
      <input type="radio" name="gender" value="Perempuan"> Perempuan <br>

      <input type="submit" name="submit" value="Tambah Data">
    </form>
		<button class="btn btn-light" onclick="location.href='<?php echo site_url("mahasiswa/index"); ?>'">Cancel</button>
