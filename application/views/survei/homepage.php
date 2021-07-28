<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Homepage SKM</title>
    <meta content="" name="description">

    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="template_member/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="<?php echo base_url('template_member/vendor/bootstrap/css/bootstrap.min.css') ?>" rel="stylesheet">
    <link href="<?php echo base_url('template_member/vendor/bootstrap-icons/bootstrap-icons.css') ?>" rel="stylesheet">
    <link href="<?php echo base_url('template_member/vendor/aos/aos.css') ?>" rel="stylesheet">
    <link href="<?php echo base_url('template_member/vendor/remixicon/remixicon.css') ?>" rel="stylesheet">
    <link href="<?php echo base_url('template_member/vendor/swiper/swiper-bundle.min.css') ?>" rel="stylesheet">
    <link href="<?php echo base_url('template_member/vendor/glightbox/css/glightbox.min.css') ?>" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="<?php echo base_url('template_member/css/style.css') ?>" rel="stylesheet">

    <!-- =======================================================
  * Template Name: FlexStart - v1.1.1
  * Template URL: https://bootstrapmade.com/flexstart-bootstrap-startup-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="header fixed-top">
        <div class="container-fluid container-xl d-flex align-items-center ">

            <a href="" class="logo d-flex align-items-center">
                <span>DISARPUS Indramayu</span>                            
            </a>
            <br>

            <nav id="navbar" class="navbar">
                <i class="mobile-nav-toggle"></i>
            </nav><!-- .navbar -->

        </div>
    </header><!-- End Header -->


    <main id="main">


        <!-- ======= Features Section ======= -->
        <section id="features" class="features">

            <!-- ======= Hero Section ======= -->
            <section id="hero" class="hero d-flex align-items-center">

                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 d-flex flex-column justify-content-center">
                            <h1 data-aos="fade-down">Bantu kami untuk memperbaiki pelayanan</h1>
                            <h2 data-aos="fade-down" data-aos-delay="400">Pilih Jenis Layanan</h2>
                            <br>
                            <div data-aos="fade-down" data-aos-delay="600">
                                <div class="text-center text-lg-start">
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                            Kartu Tanda Anggota
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="<?= base_url('survei/pembuatankta') ?>">Pembuatan KTA</a></li>
                                            <li><a class="dropdown-item" href="<?= base_url('survei/perpanjangkta') ?>">Perpanjangan KTA</a></li>
                                        </ul>
                                    </div>
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                            Transaksi
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="<?= base_url('survei/peminjaman') ?>">Peminjaman</a></li>
                                            <li><a class="dropdown-item" href="<?= base_url('survei/pengembalian') ?>">Pengembalian</a></li>
                                        </ul>
                                    </div>
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                            Fasilitas
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="<?= base_url('survei/internet') ?>">Internet</a></li>
                                            <li><a class="dropdown-item" href="<?= base_url('survei/bacaditempat') ?>">Baca Di Tempat</a></li>
                                            <li><a class="dropdown-item" href="<?= base_url('survei/sudutbaca') ?>">Sudut Baca</a></li>
                                            <li><a class="dropdown-item" href="<?= base_url('survei/pusling') ?>">Perpustakaan Keliling</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 hero-img" data-aos="fade-down" data-aos-delay="200">
                            <img src="<?php echo base_url('template_member/img/hero-img.png') ?>" class="img-fluid" alt="">
                        </div>
                    </div>
                </div>

            </section><!-- End Hero -->

            <!-- Vendor JS Files -->
            <script src="<?php echo base_url('template_member/vendor/bootstrap/js/bootstrap.bundle.js') ?>"></script>
            <script src="<?php echo base_url('template_member/vendor/aos/aos.js') ?>"></script>
            <script src="<?php echo base_url('template_member/vendor/php-email-form/validate.js') ?>"></script>
            <script src="<?php echo base_url('template_member/vendor/swiper/swiper-bundle.min.js') ?>"></script>
            <script src="<?php echo base_url('template_member/vendor/purecounter/purecounter.js') ?>"></script>
            <script src="<?php echo base_url('template_member/vendor/isotope-layout/isotope.pkgd.min.js') ?>"></script>
            <script src="<?php echo base_url('template_member/vendor/glightbox/js/glightbox.min.js') ?>"></script>
            <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

            <!-- Template Main JS File -->
            <script src="<?php echo base_url('template_member/js/main.js') ?>"></script>

            <?php if ($this->session->flashdata('hasil')) : ?>
                <script>
                    Swal.fire({
                        icon: 'success',
                        title: 'Berhasil',
                        text: "<?php echo $this->session->flashdata('hasil'); ?>",
                    });
                </script>
            <?php endif; ?>

</body>

</html>