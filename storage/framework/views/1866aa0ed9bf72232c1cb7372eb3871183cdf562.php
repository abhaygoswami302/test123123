

<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row bg-container">
        <div class="col-sm-12 bg-white p-4">
              <div class="ClctMnRt tab-pane fade show active" id="list-home" role="tabpanel" aria-labelledby="list-home-list">
                  <div class="ClctMnRtTp ProductWtBdcrm">
                    <div class="ClctMnRtTpLft">
                        <div class="TitleMn">
                          <h2>My Products Collection</h2>
                          <!--p>Total : <b><?php echo e($products->total()); ?></b> | <b><?php echo e($products->count()); ?></b> in this page | Current Page <b><?php echo e($products->currentPage()); ?></b> </p-->
                        </div>
                    </div>
                    <div class="ClctMnRtTpRt">
                        <ul class="breadcrumb">
                            <li><a class="active" href="<?php echo e(route('users.dashboard')); ?>">Home</a></li>
                            <li><a class="active" href="<?php echo e(route('users.dashboard')); ?>">Products</a></li>
                            <li><a href="<?php echo e(route('userproduct.index')); ?>">All My Products</a></li>
                        </ul>
                    </div>
                </div>
            </div> <!-- Collections -->  
        </div>

        <div class="col-xl-12">
            <div class="row py-1 m-0">
                <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-3 ResponsiveLot1">
                    <a href="<?php echo e($products->previousPageUrl()); ?>">
                        <button class="btn btn-info btn-sm" style="background:rgba(238,2,17,1);border:none; width:auto;color:white">Previous</button>
                    </a>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-3 col-sm-3 col-6 text-center ResponsiveLot2">
                    <p>Total <b><?php echo e($products->total()); ?></b> | <b><?php echo e($products->count()); ?></b> In This Page | Current Page <b><?php echo e($products->currentPage()); ?></b> </p>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-3 ResponsiveLot3">
                    <a href="<?php echo e($products->nextPageUrl()); ?>" style="float: right;">
                        <button class="btn btn-info btn-sm" style="background:rgba(58,0,198,1);border:none;color:white">Next</button>
                    </a>
                </div>
            </div>
        </div>

        <div class="col-sm-12">
            <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('user-products-search', ['products' => $products])->html();
} elseif ($_instance->childHasBeenRendered('Ci6XwMA')) {
    $componentId = $_instance->getRenderedChildComponentId('Ci6XwMA');
    $componentTag = $_instance->getRenderedChildComponentTagName('Ci6XwMA');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('Ci6XwMA');
} else {
    $response = \Livewire\Livewire::mount('user-products-search', ['products' => $products]);
    $html = $response->html();
    $_instance->logRenderedChild('Ci6XwMA', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
        </div>

    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.users', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\ucc\resources\views/user/products/index.blade.php ENDPATH**/ ?>