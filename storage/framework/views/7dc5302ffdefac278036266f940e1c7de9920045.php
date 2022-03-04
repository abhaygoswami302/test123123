

<?php $__env->startSection('content'); ?>
<div class="container-fluid">
            <!-- Content Row -->
    <div class="row">

        <div class="col-sm-6 ">
            <h3 class="m-0 font-weight-bold text-primary">Edit New Hot Toys Products</h3>
        </div>
        <div class="col-sm-6 text-right pb-4 ">
           <a href="<?php echo e(route('editor_products.create')); ?>">
            <button class="btn btn-primary btn-sm">Add New Hot Wheels Product</button>
           </a>
        </div>

        <div class="col-lg-12 mb-2">
            <?php if(Session::get('hot_toys_products_edit')): ?>
            <div class="alert alert-success animate__animated animate__flash">
            <div class="row">
                <div class="col-sm-6"><?php echo e(Session::get('hot_toys_products_edit')); ?></div> 
                <!--div class="col-sm-6 text-right">
                    <a class="btn btn-danger" href="<?php echo e(route('hotToysCsv.show', Session::get('product_id'))); ?>">View Product</a>
                </div-->
            </div>
            </div>
            <?php endif; ?> 
            <?php echo $__env->make('admin.partials.alert', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>           
        </div>

        <div class="col-xl-12 ">
            <div class="row card shadow mb-4">
                <div class="card-header">
                    <h6 class="m-0 font-weight-bold text-primary">
                        Edit New Hot Toys Product
                    </h6>
                </div>
                <div class="card-body">
                    <div class="col-sm-12">
                        <form action="<?php echo e(route('hotToysCsv.update', $product->id)); ?>" method="POST">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('PATCH'); ?>
                            <div class="row px-4">
                                <div class="col-sm-6 p-1">
                                    <label for="name">Toy Name</label>
                                    <input type="text" name="name"  value="<?php echo e($product->name); ?>" class="form-control" required placeholder="Enter Product Name">
                                </div>
                                <div class="col-sm-6 p-1">
                                    <label for="category_name">Category Name</label>
                                    <select name="category_name" id="category_name" class="form-control">
                                        <option value="">Select Category</option>
                                        <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option value="<?php echo e($category->name); ?>" <?php echo e($product->category_name == $category->name  ? 'selected' : ''); ?>><?php echo e($category->name); ?></option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </select>
                                </div>
                                <div class="col-sm-6 p-1">
                                    <label for="toy_hash">Toy Hash</label>
                                    <input type="text" name="toy_hash" readonly value="<?php echo e($product->toy_hash); ?>" class="form-control" required placeholder="Enter Fig Num">
                                </div>
                                <div class="col-sm-6 p-1">
                                    <label for="visibility">Visibility</label>
                                    <select name="visibility" id="" class="form-control">
                                        <option value="0">Select Visibility</option>
                                        <option value="1"  <?php echo e($product->visibility == '1' ? 'selected' : ''); ?>>Visible</option>
                                        <option value="0"  <?php echo e($product->visibility == '0' ? 'selected' : ''); ?>>Hidden</option>
                                    </select><br>
                                </div>
                                <div class="col-sm-12 p-0">
                                    <label for="notes">Notes</label>
                                    <textarea name="notes" id="notes" cols="30" rows="10" class="form-control">
                                        <?php echo e($product->notes); ?>

                                    </textarea>
                                </div>
                                <div class="col-sm-12 py-4 px-0">
                                    <div class="">
                                        <button type="submit" class="btn-block btn btn-primary text-white mb-2" >Edit Hot Toys Product</button>
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
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\ucc\resources\views/admin/hottoys/csv/edit.blade.php ENDPATH**/ ?>