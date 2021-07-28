<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="">
        <div class="sidebar-brand-icon rotate-n-15">
        </div>
        <div class="sidebar-brand-text mx-3">SKM-Admin</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item <?php echo $this->uri->segment(2) == 'dashboard' ? 'active' : '' ?>">
        <a class="nav-link" href="<?= base_url('admin/dashboard') ?>">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Data Master
    </div>

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#kta" aria-expanded="true" aria-controls="collapseTwo">
            <i class="fas fa-user"></i>
            <span>Kartu Tanda Anggota</span>
        </a>
        <div id="kta" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Jenis Layanan:</h6>
                <a class="collapse-item" href="<?= base_url('admin/pembuatankta') ?>">Pembuatan KTA</a>
                <a class="collapse-item" href="<?= base_url('admin/perpanjangkta') ?>">Perpanjangan KTA</a>
            </div>
        </div>
    </li>

    <!-- Nav Item - Utilities Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#transaksi" aria-expanded="true" aria-controls="collapseUtilities">
            <i class="fas fa-book"></i>
            <span>Transaksi</span>
        </a>
        <div id="transaksi" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Jenis Layanan:</h6>
                <a class="collapse-item" href="<?= base_url('admin/peminjaman') ?>">Peminjaman</a>
                <a class="collapse-item" href="<?= base_url('admin/pengembalian') ?>">Pengembalian</a>
            </div>
        </div>
    </li>

    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#fasilitas" aria-expanded="true" aria-controls="collapseUtilities">
            <i class="fas fa-home"></i>
            <span>Fasilitas</span>
        </a>
        <div id="fasilitas" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Jenis Layanan:</h6>
                <a class="collapse-item" href="<?= base_url('admin/internet') ?>">Internet</a>
                <a class="collapse-item" href="<?= base_url('admin/sudutbaca') ?>">Sudut Baca</a>
                <a class="collapse-item" href="<?= base_url('admin/bacaditempat') ?>">Baca Di Tempat</a>
                <a class="collapse-item" href="<?= base_url('admin/pusling') ?>">Perpustakaan Keliling</a>
            </div>
        </div>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <li class="nav-item">
        <a class="nav-link collapsed" href="<?= base_url('admin/totaldata') ?>" aria-expanded="true" aria-controls="collapseUtilities">
            <i class="fas fa-calculator"></i>
            <span>Total Data</span>
        </a>        
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>