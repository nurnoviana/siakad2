
<?php
if (isset($errormsg)) {
  echo "<p>Login Gagal ".$errormsg."</p>";
}

 ?>
   <div class="container-scroller">
     <div class="container-fluid page-body-wrapper full-page-wrapper">
       <div class="content-wrapper d-flex align-items-center auth">
         <div class="row w-100">
           <div class="col-lg-4 mx-auto">
             <div class="auth-form-light text-left p-5">
               <div class="brand-logo">
                 <img src="<?php echo base_url('assets/images/logo.svg')?>">
               </div>
               <h4>Hai! Silakan masuk terlebih dahulu</h4>
               <h6 class="font-weight-light">Masuk dulu untuk melanjutkan.</h6>
               <form class="pt-3" action="<?php echo site_url('login/proses');?>" method="post">
                 <div class="form-group">
                   <input type="text" name="username" class="form-control form-control-lg" placeholder="Username">
                 </div>
                 <div class="form-group">
                   <input type="password" name="password" class="form-control form-control-lg" placeholder="Password">
                 </div>
                 <div class="mt-3">
                   <button type="submit" name="submit" class="btn btn-block btn-gradient-primary btn-lg font-weight-medium auth-form-btn">SIGN IN</button>
                 </div>
                 <div class="text-center mt-4 font-weight-light">
                   Belum punya akun? <a href="<?php echo site_url('login/adduser');?>" class="text-primary">Buat akun sekarang juga!</a>
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
