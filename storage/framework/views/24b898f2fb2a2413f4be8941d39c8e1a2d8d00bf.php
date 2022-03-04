

<?php $__env->startSection('content'); ?>
<div class="container-fluid">
            <!-- Content Row -->
    <div class="row">

        <div class="col-sm-6 ">
            <h3 class="m-0 font-weight-bold text-primary">Edit Lego MiniFigures Products</h3>
        </div>
        <div class="col-sm-6 text-right pb-4 ">
           <a href="<?php echo e(route('admin_products.create')); ?>">
            <button class="btn btn-primary btn-sm">Add New Hot Wheels Product</button>
           </a>
        </div>

        <div class="col-lg-12 mb-2">
            <?php if(Session::get('lego_minifigures_products_edit')): ?>
            <div class="alert alert-success animate__animated animate__flash">
            <div class="row">
                <div class="col-sm-6"><?php echo e(Session::get('lego_minifigures_products_edit')); ?></div> 
                <div class="col-sm-6 text-right">
                    <a class="btn btn-danger" href="<?php echo e(route('admin_products.show', Session::get('product_id'))); ?>">View Product</a>
                </div>
            </div>
            </div>
            <?php endif; ?> 
            <?php echo $__env->make('admin.partials.alert', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>           
        </div>

        <div class="col-xl-12 ">
            <div class="row card shadow mb-4">
                <div class="card-header">
                    <h6 class="m-0 font-weight-bold text-primary">
                        Edit Lego MiniFigures Product
                    </h6>
                </div>
                <div class="card-body">
                    <div class="col-sm-12">
                        <form action="<?php echo e(route('lego_minifigures_form.update', $product->id)); ?>" method="POST" enctype="multipart/form-data">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('PATCH'); ?>
                            <div class="row px-4">
                                <div class="col-sm-4 p-1">
                                    <input type="text" name="name"  value="<?php echo e($product->name); ?>" class="form-control" required placeholder="Enter Product Name">
                                </div>
                                <div class="col-sm-4 p-1">
                                    <input type="text" name="fig_num"  value="<?php echo e($product->lego_mf_fig_num); ?>" class="form-control" required placeholder="Enter Fig Num">
                                </div>
                                <div class="col-sm-4 p-1">
                                    <input type="text" name="num_parts" value="<?php echo e($product->lego_mf_num_parts); ?>" class="form-control" required placeholder="Enter Num Parts">
                                </div>
                                <div class="col-sm-12 py-2"></div>
                                <div class="col-sm-4 p-0">
                                    <select name="visibility" id="" class="form-control">
                                        <option value="0">Select Visibility</option>
                                        <option value="1"  <?php echo e($product->visibility == '1' ? 'selected' : ''); ?>>Visible</option>
                                        <option value="0"  <?php echo e($product->visibility == '0' ? 'selected' : ''); ?>>Hidden</option>
                                    </select><br>
                                </div>
                                <div class="col-sm-4">
                                    <input type="file" name="image1" id="">
                                </div>
                                <div class="col-sm-4">
                                    <input type="file" name="image2" id="">
                                </div>
                                <div class="col-sm-4">
                                    <input type="file" name="image3" id="">
                                </div>
                                <div class="col-sm-4">
                                    <input type="file" name="image4" id="">
                                </div>
                                <div class="col-sm-4">
                                    <input type="file" name="image5" id="">
                                </div>
                                <div class="col-sm-12 py-2"></div>
                                <div class="col-sm-12">
                                    <div class="">
                                        <button type="submit" class="btn-block btn btn-primary text-white mb-2" >Edit Lego MiniFigures Product</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>  
        </div>
    </div>
</div>

    </div>

    
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\ucc\resources\views/admin/lego_minifigures/edit.blade.php ENDPATH**/ ?>