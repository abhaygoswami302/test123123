<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?php echo e(route('admin.dashboard')); ?>">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-car animate-bounce"></i>
        </div>
        <div class="sidebar-brand-text mx-3 ">UCC Admin <!--<sup>2</sup>--></div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <a class="nav-link" href="<?php echo e(route('admin.dashboard')); ?>">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span>
        </a>
    </li>

    <hr class="sidebar-divider">

    <div class="sidebar-heading">
        CSV Upload
    </div>

    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseCSVs"
            aria-expanded="true" aria-controls="collapseCSVs">
            <i class="fas fa-fw fa-file-csv"></i>
            <span>CSVs</span>
        </a>
        <div id="collapseCSVs" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Add Products Using CSV:</h6>
                <a class="collapse-item text-wrap" href="<?php echo e(route('admin.csv.create')); ?>">Hot Wheels CSV Upload</a>
                <a class="collapse-item text-wrap" href="<?php echo e(route('lego_minifigures.create')); ?>">Lego Minifigures CSV Upload</a>
                <a class="collapse-item text-wrap" href="<?php echo e(route('hotToysCsv.create')); ?>">Hot Toys CSV Upload</a>
            </div>
        </div>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Interface
    </div>

    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseProducts1"
            aria-expanded="true" aria-controls="collapseProducts1">
            <i class="fas fa-fw fa-list-alt"></i>
            <span>View Products</span>
        </a>
        <div id="collapseProducts1" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">My Products:</h6>
                <a class="collapse-item text-wrap" href="<?php echo e(route('admin_products.index')); ?>">View Hot Wheels Products</a>
                <a class="collapse-item text-wrap" href="<?php echo e(route('lego_minifigures_form.index')); ?>">View Lego Minifigures Products</a>
                <a class="collapse-item text-wrap" href="<?php echo e(route('hotToys.index')); ?>">View Hot Toys Products</a>
            </div>
        </div>
    </li>

    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseProducts2"
            aria-expanded="true" aria-controls="collapseProducts2">
            <i class="far fa-fw fa-list-alt"></i>
            <span>Add Products</span>
        </a>
        <div id="collapseProducts2" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">My Products:</h6>
                <a class="collapse-item text-wrap" href="<?php echo e(route('admin_products.create')); ?>">Add New Hot Wheels Product</a>
                <a class="collapse-item text-wrap" href="<?php echo e(route('lego_minifigures_form.create')); ?>">Add New Lego MiniFigures Product</a>
                <a class="collapse-item text-wrap" href="<?php echo e(route('hotToys.create')); ?>">Add New Hot Toys Product</a>
            </div>
        </div>
    </li>

    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
            aria-expanded="true" aria-controls="collapseTwo">
            <i class="fas fa-fw fa-list"></i>
            <span>Collections</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">All Collections:</h6>
                <a class="collapse-item text-wrap" href="<?php echo e(route('admin_collections.index')); ?>">View Collections</a>
                <a class="collapse-item text-wrap" href="<?php echo e(route('admin_collections.create')); ?>">Add New Collection</a>
            </div>
        </div>
    </li>

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseCategory"
            aria-expanded="true" aria-controls="collapseCategory">
            <i class="fas fa-fw fa-stream"></i>
            <span>Categories</span>
        </a>
        <div id="collapseCategory" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">All Categories:</h6>
                <a class="collapse-item text-wrap" href="<?php echo e(route('admin_categories.index')); ?>">View Categories</a>
                <a class="collapse-item text-wrap" href="<?php echo e(route('admin_categories.create')); ?>">Add New Category</a>
            </div>
        </div>
    </li>

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseSeries"
            aria-expanded="true" aria-controls="collapseSeries">
            <i class="fas fa-fw fa-layer-group"></i>
            <span>Subseries</span>
        </a>
        <div id="collapseSeries" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">All Subseries:</h6>
                <a class="collapse-item text-wrap" href="<?php echo e(route('admin_series.index')); ?>">View Subseries</a>
                <a class="collapse-item text-wrap" href="<?php echo e(route('admin_series.create')); ?>">Add New Subseries</a>
            </div>
        </div>
    </li>

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseMainlineseries"
            aria-expanded="true" aria-controls="collapseMainlineseries">
            <i class="fas fa-fw fa-align-center"></i>
            <span>Mainline Series</span>
        </a>
        <div id="collapseMainlineseries" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header text-wrap">All Mainline Series:</h6>
                <a class="collapse-item text-wrap" href="<?php echo e(route('admin_mainline.index')); ?>">View Mainline Series</a>
                <a class="collapse-item text-wrap" href="<?php echo e(route('admin_mainline.create')); ?>">Add New Mainline Series</a>
            </div>
        </div>
    </li>

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseCasting"
            aria-expanded="true" aria-controls="collapseCasting">
            <i class="far fa-fw fa-list-alt"></i>
            <span>Castings</span>
        </a>
        <div id="collapseCasting" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">All Castings:</h6>
                <a class="collapse-item text-wrap" href="<?php echo e(route('admin_castings.index')); ?>">View Castings</a>
                <a class="collapse-item text-wrap" href="<?php echo e(route('admin_castings.create')); ?>">Add New Casting</a>
            </div>
        </div>
    </li>

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTheme"
            aria-expanded="true" aria-controls="collapseTheme">
            <i class="far fa-fw fa-list-alt"></i>
            <span>Themes</span>
        </a>
        <div id="collapseTheme" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header text-wrap">All Themes:</h6>
                <a class="collapse-item text-wrap" href="<?php echo e(route('admin_themes.index')); ?>">View Theme</a>
                <a class="collapse-item text-wrap" href="<?php echo e(route('admin_themes.create')); ?>">Add New Theme</a>
            </div>
        </div>
    </li>

    <hr class="sidebar-divider">

    <div class="sidebar-heading">
        All Members
    </div>

    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages"
            aria-expanded="true" aria-controls="collapsePages">
            <i class="fas fa-fw fa-users"></i>
            <span>Users</span>
        </a>
        <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header text-wrap">All Users:</h6>
                <a class="collapse-item text-wrap" href="<?php echo e(route('admin.users.index')); ?>">All Users</a>
                <a class="collapse-item text-wrap" href="<?php echo e(route('admin.users.create')); ?>">Add New User</a>
            </div>
        </div>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="<?php echo e(route('admin.user.premium')); ?>">
            <i class="fas fa-fw fa-user-shield"></i>
            <span>Premium Users</span></a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="<?php echo e(route('admin.user.standard')); ?>">
            <i class="fas fa-fw fa-user-tie"></i>
            <span>Standard Users</span></a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="<?php echo e(route('admin_editor.index')); ?>">
            <i class="fas fa-fw fa-user-tie"></i>
            <span>Editors</span></a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="<?php echo e(route('admin_contributor.index')); ?>">
            <i class="fas fa-fw fa-user-tie"></i>
            <span>Contributors</span></a>
    </li>

    <!--hr class="sidebar-divider d-none d-md-block "-->
    <div class="text-center d-none d-md-inline pt-2">
        <a href="<?php echo e(route('clearProducts.index')); ?>" onclick="return confirm('Are You Sure You Want To Clear Products Database?');">
            <button class="btn btn-outline-danger btn-sm">Clear Products Database</button>
        </a>
    </div>

    <div class="text-center d-none d-md-inline pt-2">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

    <!-- Sidebar Message -->
    <!--div class="sidebar-card d-none d-lg-flex">
        <img class="sidebar-card-illustration mb-2" src="<?php echo e(asset('admin/img/undraw_rocket.svg')); ?>" alt="...">
        <p class="text-center mb-2"><strong>SB Admin Pro</strong> is packed with premium features, components, and more!</p>
        <a class="btn btn-success btn-sm" href="#">Upgrade to Pro!</a>
    </div-->

</ul>
<?php /**PATH /home/customer/www/ultimatecollectionscompany.com/public_html/test123/resources/views/admin/partials/sidebar.blade.php ENDPATH**/ ?>