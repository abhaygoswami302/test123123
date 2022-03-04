

<?php $__env->startSection('content'); ?>
    <div class="container-fluid">
            <!-- Content Row -->
    <div class="row">

        <div class="col-lg-10 mb-4 offset-1">
            <?php echo $__env->make('admin.partials.alert', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

            <!-- Illustrations -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Add New Subseries</h6>
                </div>
                <div class="card-body">
                    <form action="<?php echo e(route('admin_series.store')); ?>" method="POST" class="user" enctype="multipart/form-data">
                        <?php echo csrf_field(); ?>
                        <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('admin-subseries', [])->html();
} elseif ($_instance->childHasBeenRendered('SYM2ibs')) {
    $componentId = $_instance->getRenderedChildComponentId('SYM2ibs');
    $componentTag = $_instance->getRenderedChildComponentTagName('SYM2ibs');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('SYM2ibs');
} else {
    $response = \Livewire\Livewire::mount('admin-subseries', []);
    $html = $response->html();
    $_instance->logRenderedChild('SYM2ibs', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
                        <div class="row">
                            <div class="form-group col-lg-12">
                                <input type="submit" value="Add New Subseries" class="btn btn-primary btn-user btn-block">
                            </div>
                        </div> 
                    </form>
                </div>
            </div>

        </div>
    </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\ucc\resources\views/admin/series/create.blade.php ENDPATH**/ ?>