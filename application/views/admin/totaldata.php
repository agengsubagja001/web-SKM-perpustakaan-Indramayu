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

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h5 class="m-0 font-weight-bold text-primary">Total Data</h5>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Internet</th>
                                            <th>Sudut Baca</th>
                                            <th>Baca Di Tempat</th>
                                            <th>Perpustakaan Keliling</th>
                                            <th>Peminjaman</th>
                                            <th>Pengembalian</th>
                                            <th>Pembuatan KTA</th>
                                            <th>Perpanjangan KTA</th>
                                            <th>Total</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td><?php echo $internet ?></td>
                                            <td><?php echo $sudutbaca ?></td>
                                            <td><?php echo $bacaditempat ?></td>
                                            <td><?php echo $pusling ?></td>
                                            <td><?php echo $peminjaman ?></td>
                                            <td><?php echo $pengembalian ?></td>
                                            <td><?php echo $pembuatankta ?></td>
                                            <td><?php echo $perpanjangkta ?></td>
                                            <td><?php echo $totaldata ?></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
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

            <script src="<?php echo base_url('template_ekspor/js/bootstrap.min.js') ?>"></script> <!-- Include file boootstrap.min.js -->
            <script src="<?php echo base_url('template_ekspor/libraries/moment/moment.min.js') ?>"></script> <!-- Include library Moment JS -->
            <script src="<?php echo base_url('template_ekspor/libraries/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js') ?>"></script> <!-- Include library Datepicker Tempus Dominus -->

            <script>
                $(document).ready(function() { // Ketika halaman selesai di load
                    setDatePicker() // Panggil fungsi setDatePicker

                    $('#form-tanggal, #form-bulan, #form-tahun').hide(); // Sebagai default kita sembunyikan form filter tanggal, bulan & tahunnya

                    $('#filter').change(function() { // Ketika user memilih filter
                        if ($(this).val() == '1') { // Jika filter nya 1 (per tanggal)
                            $('#form-bulan, #form-tahun').hide(); // Sembunyikan form bulan dan tahun
                            $('#form-tanggal').show(); // Tampilkan form tanggal
                        } else if ($(this).val() == '2') { // Jika filter nya 2 (per bulan)
                            $('#form-tanggal').hide(); // Sembunyikan form tanggal
                            $('#form-bulan, #form-tahun').show(); // Tampilkan form bulan dan tahun
                        } else { // Jika filternya 3 (per tahun)
                            $('#form-tanggal, #form-bulan').hide(); // Sembunyikan form tanggal dan bulan
                            $('#form-tahun').show(); // Tampilkan form tahun
                        }

                        $('#form-tanggal input, #form-bulan select, #form-tahun select').val(''); // Clear data pada textbox tanggal, combobox bulan & tahun
                    })
                })

                function setDatePicker() {
                    $(".datepicker").datetimepicker({
                        format: "YYYY-MM-DD",
                        useCurrent: false
                    })
                }
            </script>

</body>

</html>