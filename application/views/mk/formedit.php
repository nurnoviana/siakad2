
<?php
	if ($this->session->login_status != True) {
		redirect('login');
	}
?>

    <h1>Edit Data Mata Kuliah</h1>
    <br>
    <div class="col-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Edit Data Mata Kuliah</h4>
                  <br>
                  <br>
                  <form class="forms-sample" action="<?php echo site_url("makul/update") ?>" method="post">
                      <label>Kode Mata Kuliah</label>
                      <input type="text" class="form-control" name="kodemakul" value="<?=$makul->kodemakul?>" placeholder="Kode Mata Kuliah">
                      <label>Nama Mata Kuliah</label>
                      <input type="text" class="form-control" name="namamakul" value="<?=$makul->namamakul?>" placeholder="Nama Mata Kuliah">
                      <label>Semester</label>
                      <input type="text" class="form-control" name="smt" value="<?=$makul->smt?>" placeholder="Semester">
                      <label>SKS</label>
                      <input type="text" class="form-control" name="sks" value="<?=$makul->sks?>" placeholder="SKS">
										<input type="submit" name="submit">
                  </form>
									<button class="btn btn-light" onclick="location.href='<?php echo site_url("makul/index"); ?>'">Cancel</button>
                </div>
              </div>
            </div>
