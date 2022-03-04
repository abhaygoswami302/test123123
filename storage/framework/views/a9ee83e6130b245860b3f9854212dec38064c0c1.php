

<?php $__env->startSection('content'); ?>
<div class="container-fluid">
    <div class="row">
        <div class="col-xl-12 text-center p-4">
            <h3 class="m-0 font-weight-bold text-primary">About</h3>
        </div>

        <div class="col-xl-12">
            <?php echo $__env->make('admin.partials.alert', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <div class="card shadow mb-4">
                <div class="card-header text-primary font-weight-bold">About Page Form</div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-12">
                            <form action="<?php echo e(route('admin_about.store')); ?>" method="POST" enctype="multipart/form-data">
                                <?php echo csrf_field(); ?>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <label for="">Page Text</label>
                                       <textarea name="description" id="editor" cols="30" rows="10" class="form-control">
                                           <?php echo $about->description; ?>

                                       </textarea>
                                    </div>

                                    <div class="col-sm-12 pt-2">
                                        <button class="btn btn-primary text-white mb-2" 
                                            type="submit" >Update Page</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <?php echo $__env->make('admin.partials.alert', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        </div>      
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/customer/www/ultimatecollectionscompany.com/public_html/test123/resources/views/admin/about/create.blade.php ENDPATH**/ ?>