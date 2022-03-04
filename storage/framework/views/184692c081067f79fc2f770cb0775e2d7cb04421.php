

<?php $__env->startSection('content'); ?>
<div class="container-fluid">
    <div class="row">
        <div class="col-xl-8 p-4">
            <h3 class="m-0 font-weight-bold text-primary">Hot Toys CSV Upload </h3>
        </div>
        <div class="col-xl-4 text-right p-4">
            <a href="<?php echo e(route('lego_minifigures.create')); ?>">
                <button class="btn btn-primary">Upload Lego MiniFigures CSV</button>
            </a>
        </div>

        <div class="col-xl-12">
            <div class="card shadow mb-4">
                <div class="card-header text-primary font-weight-bold">Hot Toys CSV UPLOAD</div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-3 pt-3">
                            <?php if(count($temporaries) > 0): ?>
                                <a href="<?php echo e(route('hotToysCsv.index')); ?>">
                                    <button class="btn btn-primary">Upload Products</button>
                                </a>
                            <?php endif; ?>
                        </div>
                        <div class="col-sm-9">
                            <form action="<?php echo e(route('hotToysCsv.store')); ?>" method="POST" enctype="multipart/form-data">
                                <?php echo csrf_field(); ?>
                                <div class="row">
                                    <div class="col-sm-5 offset-1">
                                        <label for="file"> Upload Hot Toys CSV File</label>
                                        <input type="file" name="file" id="" class="my-2 text-center" required>
                                    </div>
                                    <div class="col-sm-6 pt-2">
                                        <div class="VwBtn">
                                            <button class="btn btn-primary text-white mb-2" 
                                            type="submit" >Upload Hot Toys CSV</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
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
        <div class="col-xl-12 py-4">     
            <?php if(count($temporaries) > 0): ?>
           
            <div class="col-sm-12">
                <div class="row p-2">
                    <div class="col-sm-2">
                        <a href="<?php echo e($temporaries->PreviousPageUrl()); ?>">
                            <button class="btn btn-primary btn-sm">Previous</button>
                        </a>
                    </div>
                    <div class="col-sm-8 text-center">
                        <h3 class="m-0 font-weight-bold text-primary">Temporary Hot Toys Products</h3>
                        <p>Total <b><?php echo e($temporaries->total()); ?></b> | <b><?php echo e($temporaries->count()); ?></b> In This Page | Current Page <b> <?php echo e($temporaries->currentPage()); ?> </b> </p>        
                    </div>
                    <div class="col-sm-2 text-right">
                        <a href="<?php echo e($temporaries->NextPageUrl()); ?>">
                            <button class="btn btn-primary btn-sm">Next</button>
                        </a>
                    </div>
                </div>
            </div>

            <div class="card shadow table-responsive">
                <div class="card-header">
                    <div class="row">
                        <div class="col-sm-8">Temporary Products Uploaded By ADMIN</div>
                        <div class="col-sm-4 text-right">
                            <form action="<?php echo e(route('admin.destroy_temp_products')); ?>" method="POST">
                                <?php echo csrf_field(); ?>
                                <?php echo method_field('DELETE'); ?>
                                <button type="submit"  class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete all temporary products?');">
                                    <i class="fas fa-trash" style="color:white"></i> Delete All Temporary Products
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
                <table class="card-body table table-hover table-striped table-bordered ">
                    <thead>
                        <tr class="text-primary">
                            <th>Action</th>
                            <th>Name</th>
                            <th>Category</th>
                            <th>Collection</th>
                            <th>Subseries</th>
                            <th>Year</th>
                            <th>Model_Name</th>
                            <th>Toy_Hash</th>
                            <th>Notes</th>
                            <th>Visibility</th>
                            <th>Created_At</th>  
                        </tr>
                    </thead>
                    <tbody>
                        <?php $__empty_1 = true; $__currentLoopData = $temporaries; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $temp): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                        <tr>
                            <td>
                                <div class="row">
                                    <div class="col-sm-6 text-center">
                                        <a href="<?php echo e(route('hotToysCsv.edit', $temp->id)); ?>"><i class="fas fa-edit"></i></a>
                                    </div>
                                    <div class="col-sm-6 text-center p-0 m-0">
                                       <form action="<?php echo e(route('hotToysCsv.destroy', $temp->id)); ?>" method="POST">
                                           <?php echo csrf_field(); ?>
                                           <?php echo method_field('DELETE'); ?>
                                           <button type="submit" style="border: none;background:none;" onclick="return confirm('Are you sure you want to delete this product?');">
                                               <i class="fas fa-trash" style="color:rgb(247, 108, 108)"></i>
                                           </button>
                                       </form>
                                    </div>
                                </div>
                            </td>
                            <td style="word-wrap: break-word;min-width: 160px;max-width: 160px;">
                                <a href="<?php echo e(route('admin_products.show', $temp->id)); ?>">
                                    <?php echo e($temp->name); ?>

                                </a>
                            </td>
                            <td><?php echo e($temp->category_name); ?></td>
                            <td><?php echo e($temp->collection_name); ?></td>
                            <td><?php echo e($temp->subseries_name); ?></td>
                            <td><?php echo e($temp->year); ?></td>
                            <td><?php echo e($temp->model_name); ?></td>
                            <td><?php echo e($temp->toy_hash); ?></td>
                            <td><?php echo e(substr($temp->notes, 0,180)); ?>...</td>
                            <td>
                                <?php if($temp->visibility == '0'): ?>
                                    Hidden
                                <?php else: ?>
                                    Visible
                                <?php endif; ?>    
                            </td> 
                           
                            <td><?php echo e($temp->created_at->diffForHumans()); ?></td>  
                        </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                        <div class="row">
                            <div class="col-sm-12">
                                <p>
                                    <h4 class="alert alert-info text-center">No Products Added By You Yet!</h4>
                                </p>
                            </div>
                        </div>                       
                        <?php endif; ?>

                        
                    </tbody>
                </table>
            </div>
            
            <?php else: ?>
            <div class="row">
                <div class="col-sm-12">
                    <p>
                        <h4 class="alert alert-info text-center">No Temporary Product Here</h4>
                    </p>
                </div>
            </div>
            <?php endif; ?>
           
            </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\ucc\resources\views/admin/hottoys/csv/create.blade.php ENDPATH**/ ?>