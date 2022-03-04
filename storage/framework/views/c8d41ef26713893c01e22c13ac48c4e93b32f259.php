

<?php $__env->startSection('content'); ?>
<div class="container">
  <div class="row WtBg">
    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-12 col-12">
      <div class="ClctMnLft">
        <div class="Fltr1 box-shadows-products">
          <div class="Fltr1Ttl">
            <h4>Browse Collection</h4>
          </div>
          <div class="Fltr1Lst">
            <div class="list-group" id="list-tab" role="tablist">
              <a class="list-group-item list-group-item-action " id="list-home-list" data-toggle="list" href="#list-home" role="tab" aria-controls="home">My Collections</a>
              <a class="list-group-item list-group-item-action" id="list-category-list" data-toggle="list" href="#list-category" role="tab" aria-controls="category">My Categories</a>
              <a class="list-group-item list-group-item-action" id="list-products-list" data-toggle="list" href="#list-products" role="tab" aria-controls="products">My Products</a>
              <a class="list-group-item list-group-item-action" id="list-group-divider" href="#">User Details</a>
              <!--a class="list-group-item list-group-item-action" href="<?php echo e(route('userliked.products')); ?>">My Wishlist</a-->
              <a class="list-group-item list-group-item-action" href="<?php echo e(route('visibleProducts')); ?>">Visible Products</a>
              <a class="list-group-item list-group-item-action" href="<?php echo e(route('hiddenProducts')); ?>">Hidden Products</a>
              <a class="list-group-item list-group-item-action" href="<?php echo e(route('user_profile_settings')); ?>">Profile Settings</a>
              <a class="list-group-item list-group-item-action" href="<?php echo e(route('user_upgradePlan.index')); ?>">Upgrade Plan</a>
              <a class="list-group-item list-group-item-action" href="<?php echo e(route('logout')); ?>"
                  onclick="event.preventDefault();
                              document.getElementById('logout-form').submit();">
                  <?php echo e(__('Logout')); ?>

              </a>
              <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" class="d-none">
                  <?php echo csrf_field(); ?>
              </form>
            </div>
          </div>
          
        </div>
      </div>
    </div>
    <div class="col-xl-9 col-lg-9 col-md-8 col-sm-12 col-12 ">
      <div class="tab-content" id="nav-tabContent">
        <div class="ClctMnRt tab-pane fade show active" id="list-home" role="tabpanel" aria-labelledby="list-home-list">
        <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('guest-collections', ['totalProducts' => $total_products,'collections' => $collections,'total_products' => $total_products])->html();
} elseif ($_instance->childHasBeenRendered('91IoLCf')) {
    $componentId = $_instance->getRenderedChildComponentId('91IoLCf');
    $componentTag = $_instance->getRenderedChildComponentTagName('91IoLCf');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('91IoLCf');
} else {
    $response = \Livewire\Livewire::mount('guest-collections', ['totalProducts' => $total_products,'collections' => $collections,'total_products' => $total_products]);
    $html = $response->html();
    $_instance->logRenderedChild('91IoLCf', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
        </div>

        <div class="ClctMnRt tab-pane fade px-4" id="list-category" role="tabpanel" aria-labelledby="list-category-list">
        <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('guest-categories', ['categories' => $categories])->html();
} elseif ($_instance->childHasBeenRendered('8b80nPB')) {
    $componentId = $_instance->getRenderedChildComponentId('8b80nPB');
    $componentTag = $_instance->getRenderedChildComponentTagName('8b80nPB');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('8b80nPB');
} else {
    $response = \Livewire\Livewire::mount('guest-categories', ['categories' => $categories]);
    $html = $response->html();
    $_instance->logRenderedChild('8b80nPB', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
        </div>

        <div class="ClctMnRt tab-pane fade px-4" id="list-products" role="tabpanel" aria-labelledby="list-products-list">
        <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('guest-products', ['products' => $products])->html();
} elseif ($_instance->childHasBeenRendered('magb9fA')) {
    $componentId = $_instance->getRenderedChildComponentId('magb9fA');
    $componentTag = $_instance->getRenderedChildComponentTagName('magb9fA');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('magb9fA');
} else {
    $response = \Livewire\Livewire::mount('guest-products', ['products' => $products]);
    $html = $response->html();
    $_instance->logRenderedChild('magb9fA', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
        </div>
      </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.users', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\ucc\resources\views/user/dashboard.blade.php ENDPATH**/ ?>