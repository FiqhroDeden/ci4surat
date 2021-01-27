<div class="main-sidebar">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="index.html">App Surat</a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="index.html">AS</a>
        </div>

        <ul class="sidebar-menu">
            <li class="menu-header">Dashboard</li>

            <li> <a href="<?= base_url('dashboard/index'); ?>" class="nav-link"><i class="fas fa-fire"></i><span>Dashboard</span></a></li>

        </ul>
        <?php if (in_groups('admin')) : ?>

            <ul class="sidebar-menu">
                <li class="menu-header">Master User</li>
                <li class="nav-item dropdown">
                    <a href="#" class="nav-link has-dropdown"><i class="fas fa-folder"></i><span>Master</span></a>
                    <ul class="dropdown-menu">
                        <li><a class="nav-link" href="<?= base_url('golongan/index'); ?>">Golongan</a></li>
                        <li><a class="nav-link" href="<?= base_url('jabatan/index'); ?>">Jabatan</a></li>
                        <li><a class="nav-link" href="<?= base_url('pegawai/index'); ?>">Pegawai</a></li>
                        <li><a class="nav-link" href="<?= base_url('kategori_surat/index'); ?>">Kategori Surat</a></li>
                        <li><a class="nav-link" href="<?= base_url('pengirim_surat/index'); ?>">Pengirim Surat</a></li>
                        <li><a class="nav-link" href="<?= base_url('tujuan_surat/index'); ?>">Tujuan Surat</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a href="#" class="nav-link has-dropdown"><i class="fas fa-file"></i><span>Laporan</span></a>
                    <ul class="dropdown-menu">
                        <li><a class="nav-link" href="<?= base_url('laporan/surat_masuk'); ?>">Surat Masuk</a></li>
                        <li><a class="nav-link" href="<?= base_url('laporan/surat_keluar'); ?>">Surat Keluar</a></li>
                    </ul>
                </li>

            </ul>
        <?php endif; ?>
        <?php if (in_groups('sekertaris')) : ?>
            <ul class="sidebar-menu">
                <li class="menu-header">Menu Utama</li>

                <li> <a href="<?= base_url('agenda/index'); ?>" class="nav-link"><i class="fas fa-calendar"></i><span>Agenda</span></a></li>
                <li> <a href="<?= base_url('surat_masuk/index'); ?>" class="nav-link"><i class="fas fa-envelope"></i><span>Surat Masuk</span></a></li>
                <li> <a href="<?= base_url('surat_keluar/index'); ?>" class="nav-link"><i class="fas fa-folder-open"></i><span>Surat Keluar</span></a></li>
                <li class="nav-item dropdown">
                    <a href="#" class="nav-link has-dropdown"><i class="fas fa-file"></i><span>Laporan</span></a>
                    <ul class="dropdown-menu">
                        <li><a class="nav-link" href="<?= base_url('laporan/surat_masuk'); ?>">Surat Masuk</a></li>
                        <li><a class="nav-link" href="<?= base_url('laporan/surat_keluar'); ?>">Surat Keluar</a></li>
                    </ul>
                </li>
            </ul>

        <?php endif; ?>
        <?php if (in_groups('kepala')) : ?>
            <ul class="sidebar-menu">
                <li class="menu-header">Menu Utama</li>

                <li> <a href="<?= base_url('agenda/index'); ?>" class="nav-link"><i class="fas fa-calendar"></i><span>Agenda</span></a></li>
                <li> <a href="<?= base_url('surat_masuk/index'); ?>" class="nav-link"><i class="fas fa-envelope"></i><span>Surat Masuk</span></a></li>
                <li class="nav-item dropdown">
                    <a href="#" class="nav-link has-dropdown"><i class="fas fa-file"></i><span>Laporan</span></a>
                    <ul class="dropdown-menu">
                        <li><a class="nav-link" href="<?= base_url('laporan/surat_masuk'); ?>">Surat Masuk</a></li>
                        <li><a class="nav-link" href="<?= base_url('laporan/surat_keluar'); ?>">Surat Keluar</a></li>
                    </ul>
                </li>
            </ul>
        <?php endif; ?>

    </aside>
</div>