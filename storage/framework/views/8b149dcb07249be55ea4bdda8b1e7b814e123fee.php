<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?php echo e(route('contributor.index')); ?>">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-car animate-bounce"></i>
        </div>
        <div class="sidebar-brand-text mx-3 "> CONTRIBUTOR <!--<sup>2</sup>--></div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <a class="nav-link" href="<?php echo e(route('contributor.index')); ?>">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <hr class="sidebar-divider">
   
    <li class="nav-item">
        <a class="nav-link text-wrap" href="<?php echo e(route('contributor.index')); ?>">
            <i class="fas fa-fw fa-th-list"></i>
            <span>View All Hot Wheels Product</span></a>
    </li>

    <li class="nav-item">
        <a class="nav-link text-wrap" href="<?php echo e(route('contributor_lego_minifigures.index')); ?>">
            <i class="fas fa-fw fa-th-list"></i>
            <span>View All Lego MiniFigures Product</span></a>
    </li>

    <li class="nav-item">
        <a class="nav-link text-wrap" href="<?php echo e(route('contributor_hottoys.index')); ?>">
            <i class="fas fa-fw fa-th-list"></i>
            <span>View All Hot Toys Product</span></a>
    </li>



</ul>
<?php /**PATH C:\xampp\htdocs\ucc\resources\views/contributor/partials/sidebar.blade.php ENDPATH**/ ?>