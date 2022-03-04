<!-- Topbar -->
<nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

    <!-- Sidebar Toggle (Topbar) -->
    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
        <i class="fa fa-bars"></i>
    </button>

    <!-- Topbar Search -->
    <!--form
        class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
        <div class="input-group">
            <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..."
                aria-label="Search" aria-describedby="basic-addon2">
            <div class="input-group-append">
                <button class="btn btn-primary" type="button">
                    <i class="fas fa-search fa-sm"></i>
                </button>
            </div>
        </div>
    </form-->
    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('admin-front-search', [])->html();
} elseif ($_instance->childHasBeenRendered('xe4gGuo')) {
    $componentId = $_instance->getRenderedChildComponentId('xe4gGuo');
    $componentTag = $_instance->getRenderedChildComponentTagName('xe4gGuo');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('xe4gGuo');
} else {
    $response = \Livewire\Livewire::mount('admin-front-search', []);
    $html = $response->html();
    $_instance->logRenderedChild('xe4gGuo', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>

    <!-- Topbar Navbar -->
    <ul class="navbar-nav ml-auto">

        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
        <li class="nav-item dropdown no-arrow d-sm-none">
            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-search fa-fw"></i>
            </a>
            <!-- Dropdown - Messages -->
            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                aria-labelledby="searchDropdown">
                <form class="form-inline mr-auto w-100 navbar-search">
                    <div class="input-group">
                        <input type="text" class="form-control bg-light border-0 small"
                            placeholder="Search for..." aria-label="Search"
                            aria-describedby="basic-addon2">
                        <div class="input-group-append">
                            <button class="btn btn-primary" type="button">
                                <i class="fas fa-search fa-sm"></i>
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </li>

        <!-- Nav Item - Messages -->
        <li class="nav-item dropdown no-arrow mx-1">
            <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button"
                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-envelope fa-fw"></i>
                <!-- Counter - Messages -->
                <span class="badge badge-danger badge-counter"><?php echo e(count($nav_admin_feedbacks_count)); ?></span>
            </a>
            <!-- Dropdown - Messages -->
            <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                aria-labelledby="messagesDropdown">
                <h6 class="dropdown-header">
                    Feedbacks
                </h6>
                <?php if(count($nav_admin_feedbacks) >= 1): ?>
                    <?php $__currentLoopData = $nav_admin_feedbacks; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $feed_admin): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <a class="dropdown-item d-flex align-items-center" href="<?php echo e(route('product.feedback.show', $feed_admin->id)); ?>">
                            <div class="font-weight-bold">
                                <div class="text-truncate"><?php echo e($feed_admin->product_name); ?></div>
                                <div class="small text-gray-500">By : <?php echo e($feed_admin->username); ?> · <?php echo e($feed_admin->created_at->diffForHumans()); ?></div>
                            </div>
                        </a>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <a class="dropdown-item text-center" href="<?php echo e(route('product.feedback.index')); ?>">
                        <b>View All Feedback</b>
                    </a>
                <?php else: ?>
                <a class="dropdown-item text-center" href="#">
                    <b>No Feedbacks Yet!</b>
                </a>
                <?php endif; ?>
                
            </div>
        </li>

        <div class="topbar-divider d-none d-sm-block"></div>

        <!-- Nav Item - User Information -->
        <li class="nav-item dropdown no-arrow">
            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?php echo e(Auth::user()->name); ?></span>
                <img class="img-profile rounded-circle"
                    src="
                    <?php if(Auth::user()->image <> NULL): ?>
                        <?php echo e(asset(Auth::user()->image)); ?>

                    <?php else: ?>
                        <?php echo e(asset('images/admin/undraw_profile.svg')); ?>

                    <?php endif; ?>">
            </a>
            <!-- Dropdown - User Information -->
            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                aria-labelledby="userDropdown">
                <a class="dropdown-item" href="<?php echo e(route('admin.csv.create')); ?>">
                    <i class="fas fa-list-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                     Upload CSV
                </a>
                <a class="dropdown-item" href="<?php echo e(route('admin_products.create')); ?>">
                    <i class="fas fa-list-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                     Add New Products
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="<?php echo e(route('admin_products.index')); ?>">
                    <i class="fas fa-list-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                    Hot Wheels Products
                </a>
                <a class="dropdown-item" href="<?php echo e(route('lego_minifigures_form.index')); ?>">
                    <i class="fas fa-list-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                    Lego MiniFigures Products
                </a>
                <a class="dropdown-item" href="<?php echo e(route('hotToys.index')); ?>">
                    <i class="fas fa-list-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                    Hot Toys Products
                </a>
                <a class="dropdown-item" href="<?php echo e(route('admin_categories.index')); ?>">
                    <i class="fas fa-stream fa-sm fa-fw mr-2 text-gray-400"></i>
                    Categories
                </a>
                <a class="dropdown-item" href="<?php echo e(route('admin_collections.index')); ?>">
                    <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                    Collections
                </a>
                <a class="dropdown-item" href="<?php echo e(route('admin_series.index')); ?>">
                    <i class="fas fa-layer-group fa-sm fa-fw mr-2 text-gray-400"></i>
                    Subseries
                </a>
                <a class="dropdown-item" href="<?php echo e(route('admin_themes.index')); ?>">
                    <i class="far fa-list-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                    Themes
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="<?php echo e(route('admin.users.index')); ?>">
                    <i class="fas fa-users fa-sm fa-fw mr-2 text-gray-400"></i>
                    All Users
                </a>
                <a class="dropdown-item" href="<?php echo e(route('admin.user.premium')); ?>">
                    <i class="fas fa-user-shield fa-sm fa-fw mr-2 text-gray-400"></i>
                    Premium Users
                </a>
                <a class="dropdown-item" href="<?php echo e(route('admin.user.standard')); ?>">
                    <i class="fas fa-user-tie fa-fw mr-2 text-gray-400"></i>
                    Standard Users
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="<?php echo e(route('admin.users.create')); ?>">
                    <i class="fas fa-user-plus fa-fw mr-2 text-gray-400"></i>
                    Add New User
                </a>
                <a class="dropdown-item" href="<?php echo e(route('admin.users.admin_users')); ?>">
                    <i class="fas fa-user-plus fa-fw mr-2 text-gray-400"></i>
                    Users Added By Admin
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="<?php echo e(route('admin_about.create')); ?>">
                    <i class="fas fa-user-tie fa-fw mr-2 text-gray-400"></i>
                    Update About Page
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                    Logout
                </a>
            </div>
        </li>

    </ul>

</nav>
<!-- End of Topbar --><?php /**PATH C:\xampp\htdocs\ucc\resources\views/admin/partials/nav.blade.php ENDPATH**/ ?>