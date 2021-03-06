<div class="main-sidebar">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <!-- <h1>M4S</h1> -->
            <a href="/">
                <img src="/img/mylogo.png" width="50" height="50" style="border-radius: 50%;" />
            </a>
            <!-- <a href="/">M4S</a> -->
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <!-- <a href="index.html">M4S</a> -->
            <img src="/img/mylogo.png" width="50" height="50" style="border-radius: 50%;" />
        </div>

        <ul class="sidebar-menu">
            <li class="menu-header">Beranda</li>

            <li> <a href="<?= base_url('dashboard/index'); ?>" class="nav-link"><i class="fas fa-home"></i><span>Home</span></a></li>

        </ul>

        <?php if (in_groups('user') || in_groups('admin')) : ?>
            <ul class="sidebar-menu">
                <li class="menu-header">Menu Utama</li>
                <!-- <li class="nav-item dropdown">
                    <a href="#" class="nav-link has-dropdown"><i class="fab fa-dropbox"></i><span>My Archive</span></a>
                    <ul class="dropdown-menu">
                        <li><a class="nav-link" href="/myarchive/images">Images</a></li>
                        <li><a class="nav-link" href="/myarchive/document">Document</a></li>
                    </ul>
                </li> -->
                <?php if (in_groups('admin')) : ?>
                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link has-dropdown"><i class="fas fa-folder"></i><span>Admin Menu</span></a>
                        <ul class="dropdown-menu">
                            <li><a class="nav-link" href="<?= base_url('users/index'); ?>">Manage Users</a></li>
                            <li><a class="nav-link" href="/myarchive/all">All Archives</a></li>
                        </ul>
                    </li>
                <?php endif; ?>
                <li> <a href="/myarchive/document" class="nav-link"><i class="fab fa-dropbox"></i><span>My Archive</span></a></li>
            </ul>
        <?php endif; ?>

    </aside>
</div>