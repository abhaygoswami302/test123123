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
                        <a href="<?php echo e(route('welcome')); ?>"><img src="<?php echo e(asset('images/logo123.png')); ?>" alt="" title="Ultimate Collections Company" /></a>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-9">
                    <?php if(auth()->guard()->check()): ?>
                    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('front-search', [])->html();
} elseif ($_instance->childHasBeenRendered('DeDgHgS')) {
    $componentId = $_instance->getRenderedChildComponentId('DeDgHgS');
    $componentTag = $_instance->getRenderedChildComponentTagName('DeDgHgS');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('DeDgHgS');
} else {
    $response = \Livewire\Livewire::mount('front-search', []);
    $html = $response->html();
    $_instance->logRenderedChild('DeDgHgS', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
                    <?php endif; ?>

                    <?php if(auth()->guard()->guest()): ?>
                    <div class="Header_Bottom_Rt">
                        <div class="search" style=" overflow: visible !important;">
                            <span class="SrchHvr">
                                <input type="text" name="search" wire:model="searchTerm"  class="SrchHdr form-control" placeholder="Search Products Here" />
                            </span>
                        </div>
                    </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</header>
<nav class="Nav_Menu">
    <div class="container">
        <div class="row">
            <div class="col-xl-9 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="Nav_Menu_Lft" id="cssmenu">
                    <div id="head-mobile"></div>
                    <div class="button"></div>
                    <ul>
                        <?php if(auth()->guard()->guest()): ?>
                            <li class="active MnLst"><a href="<?php echo e(route('my.guest.collections.route')); ?>">Collections</a></li>
                            <li class="MnLst"><a href="<?php echo e(route('pricing')); ?>">Categories</a></li>
                            <li class="MnLst"><a href="<?php echo e(route('pricing')); ?>">Products</a></li>
                            <li class="MnLst"><a href="<?php echo e(route('forum.index')); ?>">Forum</a></li>
                            <li class="MnLst"><a href="<?php echo e(route('marketplace.index')); ?>">Marketplace</a></li>
                            <li class="MnLst"><a href="<?php echo e(route('guest.coming.soon')); ?>">Coming Soon</a></li>
                            <div class="DtpNon">
                                <li><a href="<?php echo e(route('login')); ?>">Login</a></li>
                                <li><a href="<?php echo e(route('pricing')); ?>">SignUp</a></li>
                            </div>
                        <?php else: ?>
                            <li class="active MnLst"><a href="<?php echo e(route('collection.index')); ?>">Collections</a></li>
                            <li class="MnLst"><a href="<?php echo e(route('category.index')); ?>">Categories</a></li>
                            <li class="MnLst"><a href="<?php echo e(route('product.index')); ?>">Products</a></li>
                            <li class="MnLst"><a href="<?php echo e(route('forum.index')); ?>">Forum</a></li>
                            <li class="MnLst"><a href="<?php echo e(route('marketplace.index')); ?>">Marketplace</a></li>
                            <li class="MnLst"><a href="<?php echo e(route('guest.coming.soon')); ?>">Coming Soon</a></li>
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
            <div class="col-xl-3 col-lg-12 col-md-12 col-sm-12 col-12">
                <?php if(auth()->guard()->guest()): ?>
                <div class="Nav_Menu_Rt">
                    <ul>
                        <li><a href="<?php echo e(route('login')); ?>">Login</a></li>
                        <li><a href="<?php echo e(route('pricing')); ?>">SignUp</a></li>
                    </ul>
                </div>
                <?php else: ?>

                <div class="Nav_Menu_Rt" id="cssmenu">
                    <!--div id="head-mobile"></div>
                    <div class="button"></div-->
                    <ul class="mycustomdropdownapp">
                        <li class='active MnLst'><a href="javascript:void(0);"><?php echo e(ucfirst(Auth::user()->name)); ?></a>
                            <ul >
                                <li>
                                    <a href="<?php echo e(route('users.dashboard')); ?>">
                                        My Panel
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php echo e(route('userproduct.index')); ?>">
                                        My Products Collection
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php echo e(route('userproduct.create')); ?>">
                                        Add New Product
                                    </a>
                                </li>
                                <!--
                                <li>
                                    <a href="<?php echo e(route('tempIndex')); ?>">
                                        Upload CSV
                                    </a>
                                </li>
                                -->
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
                    </ul>
                </div>
                
                
              
                
                <?php endif; ?>
            </div>
            </ul>
            </div>
        </div>
    </div>
</nav><?php /**PATH /home/customer/www/ultimatecollectionscompany.com/public_html/test123/resources/views/partials/guest/nav.blade.php ENDPATH**/ ?>