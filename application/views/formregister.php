<?php

if (isset($errormsg)) {
  echo "<p> Registrasi Gagal : ".$errormsg."</p>";
}

if (isset($successmsg)) {
  echo "<p> Registrasi Gagal, silakan login ".anchor('login', 'login')."</p>";
}
?>
<div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="content-wrapper d-flex align-items-center auth">
        <div class="row w-100">
          <div class="col-lg-4 mx-auto">
            <div class="auth-form-light text-left p-5">
              <div class="brand-logo">
                <img src="<?php echo base_url('assets/images/logo.svg'); ?>">
              </div>
              <h4>Register</h4>
              <h6 class="font-weight-light">Cukup daftar dengan cepat.</h6>
              <form class="pt-3" action="<?php echo site_url('login/simpan');?>" method="post">
                <div class="form-group">
                  <input type="text" class="form-control form-control-lg" name="fullname" id="exampleInputUsername1" placeholder="Full Name">
                </div>
                <div class="form-group">
                  <input type="email" class="form-control form-control-lg" name="username" id="exampleInputEmail1" placeholder="Email">
                </div>
                <div class="form-group">
                  <input type="password" class="form-control form-control-lg" name="pass1" id="exampleInputPassword1" placeholder="Password">
                </div>
                <div class="form-group">
                  <input type="password" class="form-control form-control-lg" name="pass2" id="exampleInputPassword2" placeholder="Ulangi Password">
                </div>
                <div class="mt-3">
                  <button type="submit" name="submit" class="btn btn-block btn-gradient-primary btn-lg font-weight-medium auth-form-btn">SIGN UP</button>
                </div>
                <div class="text-center mt-4 font-weight-light">
                  Sudah Punya Akun? <a href="<?php echo site_url('login/index'); ?>" class="text-primary">Login</a>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
      <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- plugins:js -->
  <script src="assets/vendors/js/vendor.bundle.base.js"></script>
  <script src="assets/vendors/js/vendor.bundle.addons.js"></script>
  <!-- endinject -->
  <!-- inject:js -->
  <script src="assets/js/off-canvas.js"></script>
  <script src="assets/js/misc.js"></script>
  <!-- endinject -->
