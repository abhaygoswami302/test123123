

<?php $__env->startSection('content'); ?>
<div class="container-fluid">
            <!-- Content Row -->
    <div class="row">

        <div class="col-sm-6 ">
            <h3 class="m-0 font-weight-bold text-primary">Add New Hot Wheels Products</h3>
        </div>
        <div class="col-sm-6 text-right ">
           <a href="<?php echo e(route('lego_minifigures_form.create')); ?>">
            <button class="btn btn-primary btn-sm">Add New Lego MiniFigures Product</button>
           </a>
        </div>

        <div class="col-lg-12 mb-4">
            <?php echo $__env->make('admin.partials.alert', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>           
        </div>

        <div class="col-xl-12 ">
            <div class="row card shadow mb-4">
                <div class="card-header">
                    <h6 class="m-0 font-weight-bold text-primary">
                                Add New Hot Wheels Product
                    </h6>
                </div>
                <div class="card-body">
                    <div class="col-sm-12">
                        <?php if(Session::get('productform')): ?>
                            <div class="alert alert-success animate__animated animate__slideInRight">
                                <?php echo e(Session::get('productform')); ?>

                            </div>
                        <?php endif; ?> 
                        <?php if(Session::get('csvmessage')): ?>
                        <div class="alert alert-success animate__animated animate__slideInRight">
                            <div class="row">
                                <div class="col-sm-6"><?php echo e(Session::get('csvmessage')); ?></div>
                                <div class="col-sm-6 text-right"><a href="<?php echo e(route('tempIndex')); ?>" class="btn btn-sm btn-danger">View CSV Products</a></div>
                            </div>
                        </div>
                        <?php endif; ?> 
                        <?php if($errors->any()): ?>
                            <div class="alert alert-danger">
                                <ul>
                                    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <li><?php echo e($error); ?></li>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </ul>
                            </div>
                        <?php endif; ?>
                        <?php if(Session::get('admin_product_added')): ?>
                        <div class="alert alert-success animate__animated animate__slideInRight">
                            <div class="row">
                                <div class="col-sm-6"><?php echo e(Session::get('admin_product_added')); ?></div>
                                <div class="col-sm-6 text-right">
                                    <a href="<?php echo e(route('admin_products.show',  Session::get('product_id'))); ?>" class="btn btn-sm btn-danger">View Product</a></div>
                            </div>
                        </div>
                        <?php endif; ?>   
                    </div>  
                 
            <form action="<?php echo e(route('admin_products.store')); ?>" method="POST" enctype="multipart/form-data">
            <?php echo csrf_field(); ?>

            <div class="row">
                <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-12">
                    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('admin-product-name-validation', [])->html();
} elseif ($_instance->childHasBeenRendered('M2rQjsb')) {
    $componentId = $_instance->getRenderedChildComponentId('M2rQjsb');
    $componentTag = $_instance->getRenderedChildComponentTagName('M2rQjsb');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('M2rQjsb');
} else {
    $response = \Livewire\Livewire::mount('admin-product-name-validation', []);
    $html = $response->html();
    $_instance->logRenderedChild('M2rQjsb', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
                </div>
                <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('admin-product-form', [])->html();
} elseif ($_instance->childHasBeenRendered('GtI7uzq')) {
    $componentId = $_instance->getRenderedChildComponentId('GtI7uzq');
    $componentTag = $_instance->getRenderedChildComponentTagName('GtI7uzq');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('GtI7uzq');
} else {
    $response = \Livewire\Livewire::mount('admin-product-form', []);
    $html = $response->html();
    $_instance->logRenderedChild('GtI7uzq', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
            </div>
               
                <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('admin-product-validation-form', [])->html();
} elseif ($_instance->childHasBeenRendered('rJSO5Yq')) {
    $componentId = $_instance->getRenderedChildComponentId('rJSO5Yq');
    $componentTag = $_instance->getRenderedChildComponentTagName('rJSO5Yq');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('rJSO5Yq');
} else {
    $response = \Livewire\Livewire::mount('admin-product-validation-form', []);
    $html = $response->html();
    $_instance->logRenderedChild('rJSO5Yq', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
        
               
                <div class="row p-2"></div>
            </form>
        </div>
    </div>
</div>

    </div>

    
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/customer/www/ultimatecollectionscompany.com/public_html/test123/resources/views/admin/products/create.blade.php ENDPATH**/ ?>