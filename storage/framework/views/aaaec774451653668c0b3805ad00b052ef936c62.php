

<?php $__env->startSection('content'); ?>
    <div class="container-fluid">
            <!-- Content Row -->
    <div class="row">

        <div class="col-lg-8 mb-4 offset-2">
            <?php echo $__env->make('admin.partials.alert', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

            <!-- Illustrations -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Add New Casting</h6>
                </div>
                <div class="card-body">
                    <form action="<?php echo e(route('admin_castings.store')); ?>" method="POST" class="user" enctype="multipart/form-data">
                        <?php echo csrf_field(); ?>
                        <div class="row">
                            <div class="col-sm-12">
                              <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('admin-casting-form', [])->html();
} elseif ($_instance->childHasBeenRendered('GQMs5kq')) {
    $componentId = $_instance->getRenderedChildComponentId('GQMs5kq');
    $componentTag = $_instance->getRenderedChildComponentTagName('GQMs5kq');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('GQMs5kq');
} else {
    $response = \Livewire\Livewire::mount('admin-casting-form', []);
    $html = $response->html();
    $_instance->logRenderedChild('GQMs5kq', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
                            </div>
                            <div class="form-group col-lg-12">
                                <input type="text" name="name" class="form-control" placeholder="Enter casting Name" required>
                            </div>
                            <div class="form-group col-lg-12">
                                <textarea name="description" id="description" cols="30" rows="4" class="form-control" placeholder="Enter Description" required></textarea>
                            </div>
                            <div class="form-group col-lg-4">
                                <label for="image">Add casting Image</label>
                            </div>
                            <div class="form-group col-sm-8">
                                <input type="file" name="image" id="image" >
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-lg-12">
                                <input type="submit" value="Add New Casting" class="btn btn-primary btn-user btn-block">
                            </div>
                        </div> 
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\ucc\resources\views/admin/castings/create.blade.php ENDPATH**/ ?>