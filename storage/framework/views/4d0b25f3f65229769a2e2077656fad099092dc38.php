

<?php $__env->startSection('content'); ?>
<div class="container-fluid">
            <!-- Content Row -->
    <div class="row">

        <div class="col-sm-6">
            <h3 class="m-0 font-weight-bold text-primary">Add New Hot Wheels Products</h3>
        </div>
        <div class="col-sm-6 text-right pb-4">
           <a href="<?php echo e(route('editor_lego_minifigures_form.create')); ?>">
            <button class="btn btn-primary btn-sm">Add New Lego MiniFigures Product</button>
           </a>
        </div>

        <div class="col-lg-12 mb-2">
            <?php echo $__env->make('editor.partials.alert', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>           
        </div>

        <div class="col-xl-12 ">
            <div class="row card shadow mb-4">
                <div class="card-header">
                    <h6 class="m-0 font-weight-bold text-primary">
                        Add New Hot Wheels Product
                    </h6>
                </div>
                <div class="card-body">
                    
                 
            <form action="<?php echo e(route('editor_products.store')); ?>" method="POST" enctype="multipart/form-data">
            <?php echo csrf_field(); ?>

            <div class="row">
                <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-12">
                    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('editor-product-name-validation', [])->html();
} elseif ($_instance->childHasBeenRendered('abTA4G5')) {
    $componentId = $_instance->getRenderedChildComponentId('abTA4G5');
    $componentTag = $_instance->getRenderedChildComponentTagName('abTA4G5');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('abTA4G5');
} else {
    $response = \Livewire\Livewire::mount('editor-product-name-validation', []);
    $html = $response->html();
    $_instance->logRenderedChild('abTA4G5', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
                </div>
                <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('editor-product-form', [])->html();
} elseif ($_instance->childHasBeenRendered('4tY3L05')) {
    $componentId = $_instance->getRenderedChildComponentId('4tY3L05');
    $componentTag = $_instance->getRenderedChildComponentTagName('4tY3L05');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('4tY3L05');
} else {
    $response = \Livewire\Livewire::mount('editor-product-form', []);
    $html = $response->html();
    $_instance->logRenderedChild('4tY3L05', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
            </div>
               
                <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('editor-product-validation-form', [])->html();
} elseif ($_instance->childHasBeenRendered('FdZbZPQ')) {
    $componentId = $_instance->getRenderedChildComponentId('FdZbZPQ');
    $componentTag = $_instance->getRenderedChildComponentTagName('FdZbZPQ');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('FdZbZPQ');
} else {
    $response = \Livewire\Livewire::mount('editor-product-validation-form', []);
    $html = $response->html();
    $_instance->logRenderedChild('FdZbZPQ', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
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
<?php echo $__env->make('layouts.editor', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\ucc\resources\views/editor/products/create.blade.php ENDPATH**/ ?>