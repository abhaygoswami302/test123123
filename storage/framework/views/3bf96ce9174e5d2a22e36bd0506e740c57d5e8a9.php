

<?php $__env->startSection('content'); ?>
    <div class="container-fluid">
            <!-- Content Row -->
    <div class="row">

        <div class="col-lg-8 mb-4 offset-2">
            <?php echo $__env->make('admin.partials.alert', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

            <!-- Illustrations -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Edit Category</h6>
                </div>
                <div class="card-body">
                    <form action="<?php echo e(route('admin_categories.update', $category->id)); ?>" method="POST" class="user" enctype="multipart/form-data">
                        <?php echo csrf_field(); ?>
                        <?php echo method_field('PATCH'); ?>
                        <div class="row">
                            <div class="form-group col-lg-12">
                                <label for="">Category Name</label>
                                <input type="text" name="name" class="form-control" placeholder="Enter Category Name" value="<?php echo e($category->name); ?>" readonly required>
                            </div>
                            <div class="form-group col-lg-12">
                                <label for="">Collection Name</label>
                                <input type="text" name="collection_name" class="form-control" placeholder="Enter Collection Name" value="<?php echo e($category->collection_name); ?>" readonly required>
                            </div>
                            <div class="form-group col-lg-12">
                                <label for="">Description</label>
                                <textarea name="description" id="description" cols="30" rows="4" class="form-control" placeholder="Enter Description"  required><?php echo e($category->description); ?></textarea>
                            </div>
                            <div class="form-group col-lg-4">
                                <label for="image">Add Category Image</label>
                            </div>
                            <div class="form-group col-sm-8">
                                <input type="file" name="image" id="image" >
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-lg-12">
                                <input type="submit" value="Edit Category" class="btn btn-primary btn-user btn-block">
                            </div>
                        </div> 
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/customer/www/ultimatecollectionscompany.com/public_html/test123/resources/views/admin/categories/edit.blade.php ENDPATH**/ ?>