<?php
	if ($this->session->login_status != True) {
		redirect('login');
	}
?>

    <h1>Input Data Mata Kuliah</h1>

    <form action="<?php echo site_url("makul/add") ?>" method="post">
      Masukkan Kode makul <br>
      <input type="text" name="kodemakul"> <br>
      Masukkan Nama makul <br>
      <input type="text" name="namamakul"> <br>
      Masukkan Semester <br>
      <input type="text" name="smt"> <br>
      Masukkan SKS<br>
      <input type="text" name="sks"> <br>
      <input type="submit" name="submit" value="Tambah Data">
    </form>
		<button class="btn btn-light" onclick="location.href='<?php echo site_url("makul/index"); ?>'">Cancel</button>
