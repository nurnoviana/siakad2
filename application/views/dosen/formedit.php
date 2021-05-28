dosen
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
                  <form class="forms-sample" action="<?php echo site_url("dosen/update") ?>" method="post">
                      <label>ID Dosen</label>
                      <input type="text" class="form-control" name="iddosen" value="<?=$dosen->iddosen?>" placeholder="ID Dosen">
                      <label>Nama Dosen</label>
                      <input type="text" class="form-control" name="namadosen" value="<?=$dosen->namadosen?>" placeholder="Nama">
                      <label>Alamat Dosen</label>
                      <input type="text" class="form-control" name="alamatdosen" value="<?=$dosen->alamatdosen?>" placeholder="Alamat">
                      <label>Nomor Telepon</label>
                      <input type="text" class="form-control" name="notlpdosen" value="<?=$dosen->notlpdosen?>" placeholder="Nomor Telepon">
                          <label>Gender</label> <br>
                                <?php if ($dosen->genderdosen == "Laki-Laki") {
                                 ?>
                                <input type="radio" name="genderdosen" value="Laki-laki" checked="checked">
                                Laki-laki <br>
                                <input type="radio" name="genderdosen" value="Perempuan">
                                Perempuan <br>
                                <?php }else { ?>
                                  <input type="radio" name="genderdosen" value="Laki-laki">
                                  Laki-laki <br>
                                  <input type="radio" name="genderdosen" value="Perempuan" checked="checked">
                                  Perempuan <br>
                              <?php } ?>
                    <input type="submit" name="submit">
                  </form>
									<button class="btn btn-light" onclick="location.href='<?php echo site_url("mahasiswa/index"); ?>'">Cancel</button>
                </div>
              </div>
            </div>
