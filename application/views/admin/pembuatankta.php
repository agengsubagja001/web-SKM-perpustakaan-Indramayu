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
                            <h5 class="m-0 font-weight-bold text-primary">Pembuatan Kartu Tanda Anggota</h5>
                        </div>
                        <div class="card-body">

                            <form method="get" action="">
                                <div class="row">
                                    <div class="col-sm-3 col-md-2">
                                        <div class="form-group">
                                            <label>Filter Berdasarkan</label>
                                            <select name="filter" id="filter" class="form-control">
                                                <option value="">Pilih</option>
                                                <option value="1">Per Tanggal</option>
                                                <option value="2">Per Bulan</option>
                                                <option value="3">Per Tahun</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row" id="form-tanggal">
                                    <div class="col-sm-3 col-md-2">
                                        <div class="form-group">
                                            <label>Tanggal</label>
                                            <input type="text" name="tanggal" class="form-control  datepicker datetimepicker-input" data-toggle="datetimepicker" data-target=".datepicker" autocomplete="off" />
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-3 col-md-2" id="form-bulan">
                                        <div class="form-group">
                                            <label>Bulan</label>
                                            <select name="bulan" class="form-control">
                                                <option value="">Pilih</option>
                                                <option value="1">Januari</option>
                                                <option value="2">Februari</option>
                                                <option value="3">Maret</option>
                                                <option value="4">April</option>
                                                <option value="5">Mei</option>
                                                <option value="6">Juni</option>
                                                <option value="7">Juli</option>
                                                <option value="8">Agustus</option>
                                                <option value="9">September</option>
                                                <option value="10">Oktober</option>
                                                <option value="11">November</option>
                                                <option value="12">Desember</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-3 col-md-2" id="form-tahun">
                                        <div class="form-group">
                                            <label>Tahun</label>
                                            <select name="tahun" class="form-control">
                                                <option value="">Pilih</option>
                                                <?php
                                                foreach ($option_tahun as $data) { // Ambil data tahun dari model yang dikirim dari controller
                                                    echo '<option value="' . $data->tahun . '">' . $data->tahun . '</option>';
                                                }
                                                ?>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <button type="submit" class="btn btn-primary">Tampilkan</button>
                                <a href="<?= base_url('admin/internet') ?>" class="btn btn-default">Reset Filter</a>
                            </form>
                            <hr />

                            <b><?php echo $label; ?></b><br /><br />
                            <a href="<?php echo $url_export; ?>" class="btn btn-success btn-sm">EXPORT EXCEL</a><br /><br />

                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <tr>
                                        <th>Umur</th>
                                        <th>JK</th>
                                        <th>Pendidikan</th>
                                        <th>Pekerjaan</th>
                                        <th>Q1</th>
                                        <th>Q2</th>
                                        <th>Q3</th>
                                        <th>Q4</th>
                                        <th>Q5</th>
                                        <th>Q6</th>
                                        <th>Q7</th>
                                        <th>Q8</th>
                                        <th>Q9</th>
                                        <th>Waktu</th>
                                    </tr>
                                    <?php
                                    if (!empty($transaksi)) {
                                        $no = 1;
                                        foreach ($transaksi as $data) {
                                            $waktu = date('d-m-Y', strtotime($data->waktu));

                                            echo "<tr>";
                                            echo "<td>" . $data->umur . "</td>";
                                            echo "<td>" . $data->jk . "</td>";
                                            echo "<td>" . $data->pendidikan . "</td>";
                                            echo "<td>" . $data->pekerjaan . "</td>";
                                            echo "<td>" . $data->q1 . "</td>";
                                            echo "<td>" . $data->q2 . "</td>";
                                            echo "<td>" . $data->q3 . "</td>";
                                            echo "<td>" . $data->q4 . "</td>";
                                            echo "<td>" . $data->q5 . "</td>";
                                            echo "<td>" . $data->q6 . "</td>";
                                            echo "<td>" . $data->q7 . "</td>";
                                            echo "<td>" . $data->q8 . "</td>";
                                            echo "<td>" . $data->q9 . "</td>";
                                            echo "<td>" . $waktu . "</td>";
                                            echo "</tr>";
                                            $no++;
                                        }
                                    }
                                    ?>
                                </table>

                            </div>
                            <!-- End of Main Content -->

                            <!-- Footer -->
                            <?php $this->load->view('admin/partial/footer') ?>
                            <!-- End of Footer -->

                        </div>
                        <!-- End of Content Wrapper -->

                    </div>
                    <!-- End of Page Wrapper -->

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