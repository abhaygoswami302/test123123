<header class="custHeader">
    <div class="Header_Top">
        <div class="container">
            <div class="row">
                <div class="col-xl-10 col-lg-10 col-md-10 col-sm-9 col-9">
                    <div class="Header_Top_Lft">
                        <ul>
                            <li><a href="mailto:support@ultimatecollectionscompany.com"><img src="<?php echo e(asset('images/mail.svg')); ?>" alt="" /> <span>support@ultimatecollectionscompany.com</span></a></li>
                            <!--li><a href="tel:+1  888-594-8387"><img src="<?php echo e(asset('images/phone.png')); ?>" alt="" /> <span>+1  888-594-8387</span></a></li-->
                        </ul>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-2 col-md-2 col-sm-3 col-12">
                    <div class="Header_Top_Rt">
                        <ul>
                            <li><a target="_blank" href="https://www.facebook.com/ultimatecollectionscompany"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a target="_blank" href="https://twitter.com/ultimatecollco"><i class="fab fa-twitter"></i></a></li>
                            <li><a target="_blank" href="https://www.instagram.com/ultimate_collections_company/?hl=en"><i class="fab fa-instagram"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="Header_Bottom">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-3">
                    <div class="Header_Bottom_Lft">
                        <a href="<?php echo e(route('users.dashboard')); ?>"><img src="<?php echo e(asset('images/logo.png')); ?>" alt="" title="Ultimate Collections Company" /></a>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-9">
                    <!--div class="Header_Bottom_Rt">
                        <div class="search">
                            <span class="SrchHvr">
                                <input type="text" name="search" class="SrchHdr form-control" placeholder="Search Here" />
                                <button type="submit" class="SrcBtn"><img src="<?php echo e(asset('images/search.png')); ?>" alt="" /></button>
                            </span>
                        </div>
                    </div-->
                </div>
            </div>
        </div>
    </div>
</header>
<nav class="Nav_Menu">
    <div class="container">
        <div class="row">
            <div class="col-xl-8 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="Nav_Menu_Lft" id="cssmenu">
                    <div id="head-mobile"></div>
                    <div class="button"></div>
                    <!--ul>
                        <li class="MnLst"><a href='<?php echo e(route('welcome')); ?>'>Home</a></li>
                        <li class="MnLst"><a href='<?php echo e(route('product.index')); ?>'>Products</a></li>
                        <li class="MnLst"><a href='<?php echo e(route('category.index')); ?>'>Categories</a></li>
                        <li class="MnLst"><a href='<?php echo e(route('collection.index')); ?>'>Collections</a></li>
                        
                        <div class="DtpNon">
                            <br><hr>
                            <li class="MnLst"><a href='#'>Settings</a></li>
                            <li class="MnLst">
                                <a href="<?php echo e(route('logout')); ?>"
                                        onclick="event.preventDefault();
                                                    document.getElementById('logout-form').submit();">
                                        <?php echo e(__('Logout')); ?>

                                    </a>
                                    <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" class="d-none">
                                        <?php echo csrf_field(); ?>
                                    </form>
                            </li>
                        </div>
                    </ul-->
                    <ul>
                        <?php if(auth()->guard()->guest()): ?>
                            <div class="DtpNon">
                                <li><a href="<?php echo e(route('login')); ?>">Login</a></li>
                                <li><a href="<?php echo e(route('pricing')); ?>">SignUp</a></li>
                            </div>
                        <?php else: ?>
                        <li class="MnLst"><a href='<?php echo e(route('welcome')); ?>'>Home</a></li>
                        <li class="MnLst"><a href='<?php echo e(route('product.index')); ?>'>Products</a></li>
                        <li class="MnLst"><a href='<?php echo e(route('category.index')); ?>'>Categories</a></li>
                        <li class="MnLst"><a href='<?php echo e(route('collection.index')); ?>'>Collections</a></li>
                            <div class="DtpNon">
                                <li class='active MnLst'><a href="javascript:void(0);"><?php echo e(ucfirst(Auth::user()->name)); ?></a>
                                    <ul>
                                        <li>
                                            <a href="<?php echo e(route('users.dashboard')); ?>">
                                                My Panel
                                            </a>
                                        </li>
                                        <li>
                                            <a href="<?php echo e(route('userproduct.index')); ?>">
                                                My Product
                                            </a>
                                        </li>
                                        <li>
                                            <a href="<?php echo e(route('userproduct.create')); ?>">
                                                Add New Product
                                            </a>
                                        </li>
                                        <li>
                                            <a href="<?php echo e(route('logout')); ?>"
                                            onclick="event.preventDefault();
                                                            document.getElementById('logout-form').submit();">
                                                <?php echo e(__('Logout')); ?>

                                            </a>
                                            <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" class="d-none">
                                                <?php echo csrf_field(); ?>
                                            </form>
                                        </li>
                                    </ul>
                                </li>
                            </div>
                        <?php endif; ?>
                    </ul>
                </div>
            </div>
            <div class="col-xl-4 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="Nav_Menu_Rt">

                      <?php if(auth()->guard()->guest()): ?>
                      <ul>
                        <li><a href="<?php echo e(route('login')); ?>">Login</a></li>
                        <li><a href="<?php echo e(route('pricing')); ?>">SignUp</a></li>
                      </ul>
                      <?php else: ?>
                      <ul class="mycustomdropdown">
                        <li>
                            <span class="dropdown">
                                <a  href="javascript:void(0);" class="dropdown-toggle" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Hi, <?php echo e(ucfirst(Auth::user()->name)); ?>

                                </a>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <a class="dropdown-item" href="<?php echo e(route('users.dashboard')); ?>">My Panel</a>
                                    <a class="dropdown-item" href="<?php echo e(route('userproduct.index')); ?>">My Products Collection</a>
                                    <a class="dropdown-item" href="<?php echo e(route('userproduct.create')); ?>">Add New Product</a>
                                    <!--a class="dropdown-item" href="<?php echo e(route('tempIndex')); ?>">Upload CSV</a-->
                                    <a class="dropdown-item" href="<?php echo e(route('logout')); ?>"
                                        onclick="event.preventDefault();
                                                    document.getElementById('logout-form').submit();">
                                        <?php echo e(__('Logout')); ?>

                                    </a>
                                    <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" class="d-none">
                                        <?php echo csrf_field(); ?>
                                    </form>
                                </div>
                            </span>
                        </li>
                    </ul>
                    
                      <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</nav><?php /**PATH C:\xampp\htdocs\ucc\resources\views/partials/users/nav.blade.php ENDPATH**/ ?>