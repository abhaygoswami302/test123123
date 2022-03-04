<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?php echo e(route('editor.index')); ?>">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-car animate-bounce"></i>
        </div>
        <div class="sidebar-brand-text mx-3 ">UCC EDITOR <!--<sup>2</sup>--></div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <a class="nav-link" href="<?php echo e(route('editor.index')); ?>">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <hr class="sidebar-divider">
   
    <li class="nav-item">
        <a class="nav-link" href="<?php echo e(route('editor_products.index')); ?>">
            <i class="fas fa-fw fa-th-list"></i>
            <span>View All Hot Wheels Product</span>
        </a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="<?php echo e(route('editor_lego_minifigures_form.index')); ?>">
            <i class="fas fa-fw fa-th-list"></i>
            <span>View All Lego MiniFigures Product</span>
        </a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="<?php echo e(route('editor_hot_toys.index')); ?>">
            <i class="fas fa-fw fa-th-list"></i>
            <span>View All Hot Toys Product</span>
        </a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="<?php echo e(route('editor_products.create')); ?>">
            <i class="fas fa-fw fa-indent"></i>
            <span>Add New Hot Wheels Products</span>
        </a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="<?php echo e(route('editor_lego_minifigures_form.create')); ?>">
            <i class="fas fa-fw fa-list-alt"></i>
            <span>Add Lego MiniFigures Product</span>
        </a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="<?php echo e(route('editor_hot_toys.create')); ?>">
            <i class="fas fa-fw fa-list-alt"></i>
            <span>Add Hot Toys Product</span>
        </a>
    </li>
   
</ul>
<?php /**PATH C:\xampp\htdocs\ucc\resources\views/editor/partials/sidebar.blade.php ENDPATH**/ ?>