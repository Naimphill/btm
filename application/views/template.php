<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>RoyalUI Admin</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="<?php echo base_url('assets/vendors/ti-icons/css/themify-icons.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/vendors/base/vendor.bundle.base.css') ?>">
    <!-- endinject -->
    <!-- plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="<?php echo base_url('assets/css/style.css') ?>">
    <!-- endinject -->
    <link rel="shortcut icon" href="<?php echo base_url('assets/images/favicon.png') ?>" />
    <!-- DataTables -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap4.min.css">
    <!-- Sweet Alert -->
    <link rel="stylesheet" href="<?php echo base_url('assets/allert/package/dist/sweetalert2.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/allert/package/dist/sweetalert2.min.css'); ?>">
    <!-- end seet allert -->
    <!-- Memuat jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- Memuat jQuery UI Autocomplete dari CDN -->
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>


</head>

<body>
    <div class="container-scroller">
        <!-- partial:partials/_navbar.html -->
        <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
            <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
                <a class="navbar-brand brand-logo mr-5" href="<?php echo site_url('Adminpanel') ?>"><img
                        src="<?php echo base_url('assets/images/logo.svg') ?>" class="mr-2" alt="logo" /></a>
                <a class="navbar-brand brand-logo-mini" href="<?php echo site_url('Adminpanel') ?>"><img
                        src="<?php echo base_url('assets/images/logo-mini.svg') ?>" alt="logo" /></a>
            </div>
            <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
                <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
                    <span class="ti-view-list"></span>
                </button>

                <ul class="navbar-nav navbar-nav-right">

                    <li class="nav-item nav-profile dropdown">
                        <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="profileDropdown">
                            <img src="<?php echo base_url('assets/images/faces/face28.jpg') ?>" alt="profile" />
                        </a>
                        <div class="dropdown-menu dropdown-menu-right navbar-dropdown"
                            aria-labelledby="profileDropdown">
                            <a class="dropdown-item" href="<?php echo site_url('Login/logout') ?>">
                                <i class="ti-power-off text-primary"></i>
                                Logout
                            </a>
                        </div>
                    </li>
                </ul>
                <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button"
                    data-toggle="offcanvas">
                    <span class="ti-view-list"></span>
                </button>
            </div>
        </nav>
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
            <!-- partial:partials/_sidebar.html -->
            <nav class="sidebar sidebar-offcanvas" id="sidebar">
                <ul class="nav">
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo site_url('Adminpanel') ?>">
                            <i class="ti-shield menu-icon"></i>Adminpanel</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo site_url('Adminpanel/admin') ?>">
                            <i class="ti-user menu-icon"></i>Data Admin</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo site_url('Adminpanel/kategori') ?>">
                            <i class="ti-view-list-alt menu-icon"></i>Data Kategori</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo site_url('Adminpanel/barang') ?>">
                            <i class="ti-pie-chart menu-icon"></i>Data Barang</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo site_url('Adminpanel/olah_barang') ?>">
                            <i class="ti-package menu-icon"></i>Olah Data Barang</a>
                    </li>

                </ul>
            </nav>
            <?php if ($this->session->flashdata('flash')): ?>
                <div class="flash-data" data-flashdata="<?= $this->session->flashdata('flash'); ?>"></div>
                <?php unset($_SESSION['flash']); ?>
            <?php endif; ?>
            <?php $this->load->view($content); ?>

            <footer class="footer">
                <div class="d-sm-flex justify-content-center justify-content-sm-between">
                    <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright ©
                        bootstrapdash.com 2020</span>
                    <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center"> Free <a
                            href="https://www.bootstrapdash.com/" target="_blank">Bootstrap dashboard templates</a>
                        from Bootstrapdash.com</span>
                </div>
            </footer>
            <!-- partial -->
        </div>
        <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->

    <!-- plugins:js -->
    <script src="<?php echo base_url('assets/vendors/base/vendor.bundle.base.js') ?>"></script>
    <!-- endinject -->
    <!-- Plugin js for this page-->
    <script src="<?php echo base_url('assets/vendors/chart.js/Chart.min.js') ?>"></script>
    <!-- End plugin js for this page-->
    <!-- inject:js -->
    <script src="<?php echo base_url('assets/js/off-canvas.js') ?>"></script>
    <script src="<?php echo base_url('assets/js/hoverable-collapse.js') ?>"></script>
    <script src="<?php echo base_url('assets/js/template.js') ?>"></script>
    <script src="<?php echo base_url('assets/js/todolist.js') ?>"></script>
    <!-- endinject -->
    <!-- Custom js for this page-->
    <script src="<?php echo base_url('assets/js/dashboard.js') ?>"></script>
    <!-- End custom js for this page-->
    <!-- DataTables -->
    <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap4.min.js"></script>
    <script>
        $(document).ready(function () {
            $('#datatabel').DataTable();
        });
        $(document).ready(function () {
            $('#datatabel2').DataTable();
        });
        $(document).ready(function () {
            $('#datatabel3').DataTable();
        });
    </script>
    <!-- End DataTables -->
    <!-- Sweet Alert Script -->
    <script src="<?php echo base_url('assets/allert/package/dist/sweetalert2.all.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/allert/package/dist/myalert.js'); ?>"></script>
    <script>
        const flashData = $('.flash-data').data('flashdata');
        if (flashData) {
            Swal.fire({
                title: 'Data',
                text: 'Berhasil ' + flashData,
                icon: 'success'
            });
        }
        // Tombol Keluar
        $('.tombolkeluar').on('click', function (e) {
            e.preventDefault();
            const href = $(this).attr('href');

            Swal.fire({
                title: 'Kamu Yakin?',
                text: "Akan Keluar ?",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'keluar !',
            }).then((result) => {
                if (result.isConfirmed) {
                    document.location.href = href;
                }
            })
        });
        // Tombol Hapus
        $('.tombolhapus').on('click', function (e) {
            e.preventDefault();
            const href = $(this).attr('href');

            Swal.fire({
                title: 'Kamu Yakin?',
                text: "Data Akan Dihapus !",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Hapus !',
            }).then((result) => {
                if (result.isConfirmed) {
                    document.location.href = href;
                }
            })
        });
        $('.tombolkirim').on('click', function (e) {
            e.preventDefault();
            const form = $(this).closest('form');

            Swal.fire({
                title: 'Kamu Yakin?',
                text: "Akan Menghapus ?",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Hapus !',
            }).then((result) => {
                if (result.isConfirmed) {
                    form.submit(); // submit form jika tombol "OK" ditekan
                }
            })
        });
    </script>
    <!-- End sweet allert -->
</body>

</html>