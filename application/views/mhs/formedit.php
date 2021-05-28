
<?php
	if ($this->session->login_status != True) {
		redirect('login');
	}
?>

    <h1>Edit Data Mahasiwa</h1>
    <br>
    <br>
    <br>
    <div class="col-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Edit Data Mahasiwa</h4>
                  <br>
                  <br>
                  <form class="forms-sample" action="<?php echo site_url("mahasiswa/update") ?>" method="post">
                      <label>NIM</label>
                      <input type="text" class="form-control" name="nim" value="<?=$mahasiswa->nim?>" placeholder="NIM">
                      <label>Nama Mahasiswa</label>
                      <input type="text" class="form-control" name="nama" value="<?=$mahasiswa->nama?>" placeholder="Nama">
                      <label>Alamat</label>
                      <input type="text" class="form-control" name="alamat" value="<?=$mahasiswa->alamat?>" placeholder="Alamat">
                      <label>Tanggal Lahir</label>
                      <input type="date" class="form-control" name="tgllhr" value="<?=$mahasiswa->tgllhr?>" placeholder="Tanggal Lahir">
                          <label>Gender</label> <br>
                                <?php if ($mahasiswa->gender == "Laki-Laki") {
                                 ?>
                                <input type="radio" name="gender" value="Laki-laki" checked="checked">
                                Laki-laki <br>
                                <input type="radio" name="gender" value="Perempuan">
                                Perempuan <br>
                                <?php }else { ?>
                                  <input type="radio" name="gender" value="Laki-laki">
                                  Laki-laki <br>
                                  <input type="radio" name="gender" value="Perempuan" checked="checked">
                                  Perempuan <br>
                              <?php } ?>
                    <input type="submit" name="submit">
                  </form>
									<button class="btn btn-light" onclick="location.href='<?php echo site_url("mahasiswa/index"); ?>'">Cancel</button>
                </div>
              </div>
            </div>
