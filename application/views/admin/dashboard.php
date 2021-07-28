<?php $this->load->view('admin/partial/head') ?>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <?php $this->load->view('admin/partial/sidebar') ?>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
                    <?php $this->load->view('admin/partial/topbar')  ?>
                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h5 class="m-0 font-weight-bold text-primary">Dashboard</h5>
                        </div>
                        <div class="card-body">


                            <!-- Content Row -->
                            <div class="row">

                                <!-- Earnings (Monthly) Card Example -->
                                <div class="col-xl-3 col-md-6 mb-4">
                                    <div class="card border-left-primary shadow h-100 py-2">
                                        <div class="card-body">
                                            <div class="row no-gutters align-items-center">
                                                <div class="col mr-2">
                                                    <a href="<?= base_url('admin/internet') ?>" class="font-weight-bold text-primary text-uppercase mb-1">Internet</a>
                                                    <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $internet ?></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Earnings (Monthly) Card Example -->
                                <div class="col-xl-3 col-md-6 mb-4">
                                    <div class="card border-left-primary shadow h-100 py-2">
                                        <div class="card-body">
                                            <div class="row no-gutters align-items-center">
                                                <div class="col mr-2">
                                                    <a href="<?= base_url('admin/sudutbaca') ?>" class="font-weight-bold text-primary text-uppercase mb-1">Sudut Baca</a>
                                                    <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $sudutbaca ?></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Earnings (Monthly) Card Example -->
                                <div class="col-xl-3 col-md-6 mb-4">
                                    <div class="card border-left-primary shadow h-100 py-2">
                                        <div class="card-body">
                                            <div class="row no-gutters align-items-center">
                                                <div class="col mr-2">
                                                    <a href="<?= base_url('admin/bacaditempat') ?>" class="font-weight-bold text-primary text-uppercase mb-1">Baca Di Tempat</a>
                                                    <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $bacaditempat ?></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Pending Requests Card Example -->
                                <div class="col-xl-3 col-md-6 mb-4">
                                    <div class="card border-left-primary shadow h-100 py-2">
                                        <div class="card-body">
                                            <div class="row no-gutters align-items-center">
                                                <div class="col mr-2">
                                                    <a href="<?= base_url('admin/pusling') ?>" class="font-weight-bold text-primary text-uppercase mb-1">Perpustakaan Keliling</a>
                                                    <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $pusling ?></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Earnings (Monthly) Card Example -->
                                <div class="col-xl-3 col-md-6 mb-4">
                                    <div class="card border-left-success shadow h-100 py-2">
                                        <div class="card-body">
                                            <div class="row no-gutters align-items-center">
                                                <div class="col mr-2">
                                                    <a href="<?= base_url('admin/peminjaman') ?>" class="font-weight-bold text-success text-uppercase mb-1">Peminjaman</a>
                                                    <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $peminjaman ?></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Earnings (Monthly) Card Example -->
                                <div class="col-xl-3 col-md-6 mb-4">
                                    <div class="card border-left-success shadow h-100 py-2">
                                        <div class="card-body">
                                            <div class="row no-gutters align-items-center">
                                                <div class="col mr-2">
                                                    <a href="<?= base_url('admin/pengembalian') ?>" class="font-weight-bold text-success text-uppercase mb-1">Pengembalian</a>
                                                    <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $pengembalian ?></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Earnings (Monthly) Card Example -->
                                <div class="col-xl-3 col-md-6 mb-4">
                                    <div class="card border-left-warning shadow h-100 py-2">
                                        <div class="card-body">
                                            <div class="row no-gutters align-items-center">
                                                <div class="col mr-2">
                                                    <a href="<?= base_url('admin/pembuatankta') ?>" class="font-weight-bold text-warning text-uppercase mb-1">Pembuatan KTA</a>
                                                    <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $pembuatankta ?></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Pending Requests Card Example -->
                                <div class="col-xl-3 col-md-6 mb-4">
                                    <div class="card border-left-warning shadow h-100 py-2">
                                        <div class="card-body">
                                            <div class="row no-gutters align-items-center">
                                                <div class="col mr-2">
                                                    <a href="<?= base_url('admin/perpanjangkta') ?>" class="font-weight-bold text-warning text-uppercase mb-1">Perpanjangan KTA</a>
                                                    <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $perpanjangkta ?></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Pending Requests Card Example -->
                                <div class="col-xl-3 col-md-6 mb-4">
                                    <div class="card border-left-danger shadow h-100 py-2">
                                        <div class="card-body">
                                            <div class="row no-gutters align-items-center">
                                                <div class="col mr-2">
                                                    <a href="<?= base_url('admin/totaldata') ?>" class="font-weight-bold text-danger text-uppercase mb-1">Total Data</a>
                                                    <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $totaldata ?></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <!-- /.container-fluid -->

                    </div>
                    <!-- End of Main Content -->

                    <!-- Footer -->
                    <?php $this->load->view('admin/partial/footer') ?>
                    <!-- End of Footer -->

                </div>
                <!-- End of Content Wrapper -->

            </div>
            <!-- End of Page Wrapper -->

            <!-- Scroll to Top Button-->
            <a class="scroll-to-top rounded" href="#page-top">
                <i class="fas fa-angle-up"></i>
            </a>

            <!-- Logout Modal-->
            <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">×</span>
                            </button>
                        </div>
                        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                        <div class="modal-footer">
                            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                            <a class="btn btn-primary" href="login.html">Logout</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Bootstrap core JavaScript-->
            <script src="<?= base_url() ?>template_admin/vendor/jquery/jquery.min.js"></script>
            <script src="<?= base_url() ?>template_admin/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

            <!-- Core plugin JavaScript-->
            <script src="<?= base_url() ?>template_admin/vendor/jquery-easing/jquery.easing.min.js"></script>

            <!-- Custom scripts for all pages-->
            <script src="<?= base_url() ?>template_admin/js/sb-admin-2.min.js"></script>

            <!-- Page level plugins -->
            <script src="<?= base_url() ?>template_admin/vendor/chart.js/Chart.min.js"></script>

            <!-- Page level custom scripts -->
            <script src="<?= base_url() ?>template_admin/js/demo/chart-area-demo.js"></script>
            <script src="<?= base_url() ?>template_admin/js/demo/chart-pie-demo.js"></script>

</body>

</html>