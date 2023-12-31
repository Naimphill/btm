<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Kominfo Pati</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="<?php echo base_url('assets/vendors/ti-icons/css/themify-icons.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/vendors/base/vendor.bundle.base.css'); ?>">
    <!-- endinject -->
    <!-- plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="<?php echo base_url('assets/css/style.css'); ?>">
    <!-- endinject -->
    <link rel="shortcut icon" href="<?php echo base_url('assets/images/komlog1.png'); ?>" />
</head>

<body>
    <div class="container-scroller">
        <div class="container-fluid page-body-wrapper full-page-wrapper">
            <div class="content-wrapper d-flex align-items-center auth px-0">
                <div class="row w-100 mx-0">
                    <div class="col-lg-4 mx-auto">
                        <div class="auth-form-light text-left py-5 px-4 px-sm-5">
                            <div class="brand-logo">
                                <img src="<?php echo base_url('assets/images/logo.svg'); ?>">
                            </div>
                            <h4>Halo! Selamat Datang!</h4>
                            <h6 class="font-weight-light">Silahkan Masuk untuk Melanjutkan</h6>
                            <form class="pt-3" method="POST" action="<?php echo site_url('login/aksi_login') ?>">
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-lg" id="exampleInputEmail1"
                                        name="username" placeholder="Username">
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control form-control-lg"
                                        id="exampleInputPassword1" name="password" placeholder="Password">
                                </div>
                                <div class="mt-3">
                                    <button type="submit"
                                        class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn">Login</button>
                                    <!-- <a class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn" href="../../index.html">SIGN IN</a> -->
                                </div>
                                <!-- <div class="my-2 d-flex justify-content-between align-items-center">
                                    <div class="form-check">
                                        <label class="form-check-label text-muted">
                                            <input type="checkbox" class="form-check-input">
                                            Tetap Masuk
                                        </label>
                                    </div>
                                    <a href="#" class="auth-link text-black">Lupa Password?</a>
                                </div> -->
                                <!-- <div class="mb-2">
                  <button type="button" class="btn btn-block btn-facebook auth-form-btn">
                    <i class="ti-facebook mr-2"></i>Connect using facebook
                  </button>
                </div> -->
                                <!-- <div class="text-center mt-4 font-weight-light">
                                    Belum punya Akun? <a href="<?php //echo site_url('login/register') ?>"
                                        class="text-primary">Buat</a>
                                </div> -->
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
    <script src="<?php echo base_url('assets/template/vendors/base/vendor.bundle.base.js'); ?>"></script>
    <!-- endinject -->
    <!-- inject:js -->
    <script src="<?php echo base_url('assets/js/off-canvas.js'); ?>"></script>
    <script src="<?php echo base_url('assets/js/hoverable-collapse.js'); ?>"></script>
    <script src="<?php echo base_url('assets/js/template.js'); ?>"></script>
    <script src="<?php echo base_url('assets/js/todolist.js'); ?>"></script>
    <!-- endinject -->
</body>

</html>