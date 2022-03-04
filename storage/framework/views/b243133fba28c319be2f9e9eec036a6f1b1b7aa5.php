

<?php $__env->startSection('content'); ?>
<div class="container-fluid">
    <div class="row">

        <div class="col-sm-12 p-2 text-center">
            <h3 class="m-0 font-weight-bold text-primary">All Product Feedbacks</h3>
        </div>

        <div class="col-lg-12 p-2">
            <?php echo $__env->make('admin.partials.alert', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <div class="card shadow mb-4">
                <div class="table-responsive">
                    <table class="table card-body table-hover table-striped table-bordered">
                        <thead>
                            <tr class="text-primary">
                                <th>Action</th>
                                <th>User_Name</th>
                                <th>Product_Name</th>
                                <th>Name</th>
                                <th>Series</th>
                                <th>Category_name</th>
                                <th>Collection_name</th>
                                <th>Subseries_name</th>
                                <th>Theme</th>
                                <th>Model_name</th>
                                <th>Casting_name</th>  
                                <th>Year</th>  
                                <th>Colour</th>  
                                <th>Tampo</th>  
                                <th>Base_Colour</th>  
                                <th>Type</th>  
                                <th>Window_Colour</th>  
                                <th>Interior_Colour</th>  
                                <th>Wheel_Type</th>  
                                <th>Country</th>  
                                <th>Class</th>  
                                <th>Notes</th>  
                                <th>Toy#</th>
                                <th>Col#</th>
                                <th>Series#</th>
                                <th>Image</th>
                                <th>Created_At</th>  
                            </tr>
                        </thead>
                        <tbody>
                            <?php $__empty_1 = true; $__currentLoopData = $feedbacks; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $feedback): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                            <tr>
                                <td class="text-center"> 
                                <div class="row">
                                    <div class="col-sm-6">
                                        <form action="<?php echo e(route('product.feedback.destroy',[$feedback->id, 1])); ?>" method="POST">
                                        <?php echo csrf_field(); ?>
                                        <?php echo method_field('DELETE'); ?>
                                        <button type="submit" class="fa fa-trash" style="color:red;background:none;border:none" ></button>
                                        </form>
                                    </div>
                                    <div class="col-sm-6 text-right">
                                    <a href="<?php echo e(route('product.feedback.show', $feedback->id)); ?>">
                                        <i class="fa fa-eye" aria-hidden="true"></i>
                                    </a> 
                                    </div>
                                </div>
                                </td>
                                <td> 
                                    <a href="<?php echo e(route('admin.user.show', $feedback->user_id)); ?>">
                                        <?php echo e($feedback->username); ?>

                                    </a> 
                                </td>
                                <td> 
                                    <a href="<?php echo e(route('admin_products.show', $feedback->product_id)); ?>">
                                        <?php echo e($feedback->product_name); ?> 
                                    </a>
                                </td>
                                <td> <?php echo e($feedback->name); ?> </td>
                                <td><?php echo e($feedback->series); ?> </td>
                                <td> <?php echo e($feedback->category_name); ?></td>
                                <td> <?php echo e($feedback->collection_name); ?> </td>
                                <td> <?php echo e($feedback->subseries_name); ?> </td>
                                <td> <?php echo e($feedback->theme); ?>  </td>
                                <td><?php echo e($feedback->model_name); ?></td>
                                <td><?php echo e($feedback->casting_name); ?></td>  
                                <td><?php echo e($feedback->year); ?></td>  
                                <td><?php echo e($feedback->colour); ?></td>  
                                <td><?php echo e($feedback->tampo); ?></td>  
                                <td><?php echo e($feedback->base_colour); ?></td>  
                                <td><?php echo e($feedback->type); ?></td>  
                                <td><?php echo e($feedback->window_colour); ?></td>  
                                <td><?php echo e($feedback->interior_colour); ?></td>  
                                <td><?php echo e($feedback->wheel_type); ?></td>  
                                <td><?php echo e($feedback->country); ?></td>  
                                <td><?php echo e($feedback->class); ?></td>  
                                <td><?php echo e(substr($feedback->notes , 0, 20)); ?></td>  
                                <td><?php echo e($feedback->toy_hash); ?></td>
                                <td><?php echo e($feedback->col_hash); ?></td>
                                <td><?php echo e($feedback->series_hash); ?></td> 
                                <td>
                                <?php if($feedback->image == null): ?>
                                    N/A
                                <?php else: ?> 
                                    <img src="<?php echo e(asset($feedback->image)); ?>" style="width:150px;height:100px">
                                <?php endif; ?>
                                </td>
                                <td><?php echo e($feedback->created_at->diffForHumans()); ?></td>  
                            </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                <h3 class="m-0 font-weight-bold text-center">No Products Added Yet!</h3>
                            <?php endif; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>     




          <div class="col-sm-12 p-2 text-center">
            <h3 class="m-0 font-weight-bold text-primary">General Feedback / Collection Suggestions</h3>
        </div>

        <div class="col-lg-12 p-2">
            <?php echo $__env->make('admin.partials.alert', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <div class="card shadow mb-4">
                <div class="table-responsive">
                    <table class="table card-body table-hover table-striped table-bordered">
                        <thead>
                            <tr class="text-primary">
                                <th>Action</th>
                                <th>Email</th>
                                <th>Message</th>
                                <th>Created_At</th>  
                            </tr>
                        </thead>
                        <tbody>
                            <?php $__empty_1 = true; $__currentLoopData = $suggestions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ss): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                            <tr>
                                <td class="text-center">
                                    <form action="<?php echo e(route('product.feedback.destroy',[$ss->id, 2])); ?>" method="POST">
                                        <?php echo csrf_field(); ?>
                                        <?php echo method_field('DELETE'); ?>
                                        <button type="submit" class="fa fa-trash" style="color:red;background:none;border:none" ></button>
                                    </form>
                                </td>
                                <td> <?php echo e($ss->email); ?> </td>
                                <td> <?php echo e($ss->collection); ?> </td>
                               <td><?php echo e($ss->created_at->diffForHumans()); ?></td>  
                            </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                <h3 class="m-0 font-weight-bold text-center">No Products Added Yet!</h3>
                            <?php endif; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>    
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/customer/www/ultimatecollectionscompany.com/public_html/test123/resources/views/admin/feedback/index.blade.php ENDPATH**/ ?>