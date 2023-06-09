<?php

?>

<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

<!-- Sidebar - Brand -->
<a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
    <div class="sidebar-brand-icon rotate-n-15">
        <i class="fas fa-laugh-wink"></i>
    </div>
    <div class="sidebar-brand-text mx-3">E-SPP</div>
</a>

<!-- Divider -->
<hr class="sidebar-divider my-0">

<!-- Nav Item - Dashboard -->
<li class="nav-item active">
    <a class="nav-link" href="dashboard.php">
        <i class="fas fa-fw fa-tachometer-alt"></i>
        <span>Dashboard</span></a>
</li>


<!-- Heading -->
    <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
        data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Custom Utilities:</h6>
            <a class="collapse-item" href="utilities-color.html">Colors</a>
            <a class="collapse-item" href="utilities-border.html">Borders</a>
            <a class="collapse-item" href="utilities-animation.html">Animations</a>
            <a class="collapse-item" href="utilities-other.html">Other</a>
        </div>
    </div>
</li>

<!-- Divider -->
<?php if ($_SESSION['role'] == 'admin' || $_SESSION['role'] == 'staff') { ?>
<hr class="sidebar-divider">
    <li class="nav-item">
        <a class="nav-link" href="spp.php">
            <i class="fas fa-fw fa-money-bill"></i>
            <span>Spp</span></a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="siswa.php">
            <i class="fas fa-fw fa-school"></i>
            <span>Siswa</span></a>
    </li>

<?php } ?>
<?php  if ($_SESSION['role'] == 'admin') { ?>
    <li class="nav-item">
        <a class="nav-link" href="tagihan.php">
            <i class="fas fa-fw fa-file-invoice-dollar"></i>
            <span>Tagihan</span></a>
    </li>

<!-- Divider -->
<hr class="sidebar-divider d-none d-md-block">
<?php } ?>
<!-- Sidebar Toggler (Sidebar) -->
<div class="text-center d-none d-md-inline">
    <button class="rounded-circle border-0" id="sidebarToggle"></button>
</div>

</ul>
<!-- End of Sidebar -->