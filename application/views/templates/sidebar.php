<!-- Sidebar -->
<ul class="navbar-nav  sidebar sidebar-dark accordion toggled" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-phone"></i>
        </div>
        <div class="sidebar-brand-text mx-3">KLephone</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Nav Item - Navigasi -->
    <!-- <div class="sidebar-heading">
        Navigasi
    </div> -->

    <!-- Dashboard -->
    <li class="nav-item <?= ($title == 'Dashboard') ? 'active' : '' ?>">
        <a class="nav-link" href="dashboard  ">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span>
        </a>
    </li>



    <!-- Brand  -->
    <li class="nav-item <?= ($title == 'Kategori') ? 'active' : '' ?>">
        <a class="nav-link" href="index.html">
            <i class="fas fa-fw fa-star"></i>
            <span>Brand</span>
        </a>
    </li>





    <!-- Divider -->
    <!-- <hr class="sidebar-divider"> -->


    <!-- Heading -->
    <!-- <div class="sidebar-heading">
                Management
            </div> -->

    <li class="nav-item <?= ($title == 'Produk') ? 'active' : '' ?>">
        <a class="nav-link" href=" <?= base_url('produk') ?>">
            <i class="fas fa-fw fa-box"></i>
            <span>Produk</span>
        </a>
    </li>
    <li class="nav-item <?= ($title == 'Suplay') ? 'active' : '' ?>">
        <a class="nav-link" href=" <?= base_url('suplay') ?>">
            <i class="fas fa-fw fa-box"></i>
            <span>Suplay</span>
        </a>
    </li>
    <li class="nav-item ">
        <a class="nav-link" href="index.html">
            <i class="fas fa-fw fa-book"></i>
            <span>Costumer</span>
        </a>
    </li>
    <li class="nav-item <?= ($title == 'Explore') ? 'active' : '' ?>">
        <a class="nav-link collapsed" href="index.html" data-toggle="collapse" data-target="#users" aria-expanded="true" aria-controls="users">
            <i class="fas fa-fw fa-user"></i>
            <span>Account</span>
        </a>
        <div id="users" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="buttons.html">Admin</a>
                <a class="collapse-item" href="cards.html">Member</a>
            </div>
        </div>
    </li>

    <!-- Home -->
    <li class="nav-item <?= ($title == 'Home') ? 'active' : '' ?>">
        <a class="nav-link" href="<?= base_url() ?>">
            <i class="fas fa-fw fa-home"></i>
            <span>Home</span>
        </a>
    </li>

    <?php if (isset($user['name'])) : ?>
        <!-- Logout -->
        <li class="nav-item ">
            <a class="nav-link" href="" href="#" data-toggle="modal" data-target="#logoutModal">
                <i class="fas fa-fw fa-sign-out-alt"></i>
                <span>Logout</span>
            </a>
        </li>
    <?php endif; ?>

    <!-- Nav Item - Utilities Collapse Menu -->

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">




    <!-- Divider -->
    <!-- <hr class="sidebar-divider"> -->




    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
<!-- End of Sidebar -->