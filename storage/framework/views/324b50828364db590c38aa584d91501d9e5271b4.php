

<?php $__env->startSection('content'); ?>
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12">
            <div class="row p-2">
                <div class="col-sm-3">
                    <a href="<?php echo e($products->PreviousPageUrl()); ?>">
                        <button class="btn btn-primary btn-sm">Previous</button>
                    </a>
                </div>
                <div class="col-sm-6 text-center">
                    <h3 class="m-0 font-weight-bold text-primary">All Hidden Products</h3>
                    <p>Total <b><?php echo e($products->total()); ?></b> | <b><?php echo e($products->count()); ?></b> In This Page | Current Page <?php echo e($products->currentPage()); ?></p>        
                </div>
                <div class="col-sm-3 text-right">
                    <a href="<?php echo e($products->NextPageUrl()); ?>">
                        <button class="btn btn-primary btn-sm">Next</button>
                    </a>
                </div>
            </div>
        </div>

        <div class="col-lg-12">
            <?php echo $__env->make('admin.partials.alert', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <div class="card shadow mb-4">
                <div class="table-responsive">
                    <table class="table card-body table-hover table-striped table-bordered">
                        <thead>
                            <tr class="text-primary">
                                <th>Action</th>
                                <th>Image_1</th>
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
                                <!--th>Decoration</th-->  
                                <th>Base_Colour</th>  
                                <th>Type</th>  
                                <th>Window_Colour</th>  
                                <th>Interior_Colour</th>  
                                <th>Wheel_Type</th>  
                                <th>Visibility</th>  
                                <th>Country</th>  
                                <th>Class</th>  
                                <th>Notes</th>  
                                <th>Toy#</th>
                                <th>Col#</th>
                                <th>Series#</th>
                                <th>Image_2</th>
                                <th>Image_3</th>
                                <th>Image_4</th>
                                <th>Image_5</th>
                                <th>Created_At</th>  
                            </tr>
                        </thead>
                        <tbody>
                            <?php $__empty_1 = true; $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                            <tr>
                                <td>
                                    <div class="row">
                                        <div class="col-sm-6 text-center">
                                            <a href="<?php echo e(route('admin_products.edit', $product->id)); ?>"><i class="fas fa-edit"></i></a>
                                        </div>
                                        <div class="col-sm-6 text-center p-0 m-0">
                                           <form action="<?php echo e(route('admin_products.destroy', $product->id)); ?>" method="POST">
                                               <?php echo csrf_field(); ?>
                                               <?php echo method_field('DELETE'); ?>
                                               <button type="submit" style="border: none;background:none;" onclick="return confirm('Are you sure you want to delete this product?');">
                                                   <i class="fas fa-trash" style="color:rgb(247, 108, 108)"></i>
                                               </button>
                                           </form>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <?php if($product->image1 <> null): ?>
                                    <img src="<?php echo e(asset($product->image1)); ?>" alt="" style="width:70px;height:50px">                                        
                                    <?php else: ?>
                                        N/A
                                    <?php endif; ?>
                                </td>  
                                <td>
                                    <a href="<?php echo e(route('admin_products.show', $product->id)); ?>">
                                        <?php echo e($product->name); ?>

                                    </a>
                                </td>
                                <td>
                                    <a href="<?php echo e(route('admin.series.show.custom', $product->series)); ?>">
                                        <?php echo e($product->series); ?>

                                    </a>
                                </td>
                                <td>
                                    <a href="<?php echo e(route('admin_categories.show', $product->category_id)); ?>">
                                        <?php echo e($product->category_name); ?>

                                    </a>
                                </td>
                                <td>
                                    <a href="<?php echo e(route('admin_collections.show', $product->collection_id)); ?>">
                                        <?php echo e($product->collection_name); ?>

                                    </a>
                                </td>
                                <td>
                                    <a href="<?php echo e(route('admin.series.show.custom',[ $product->category_name, $product->subseries_name])); ?>">
                                        <?php echo e($product->subseries_name); ?>

                                    </a>
                                </td>
                                <td>
                                    <?php if($product->theme_id <> null): ?>
                                    <a href="<?php echo e(route('admin_themes.show', $product->theme_id)); ?>">
                                        <?php echo e($product->theme); ?>

                                    </a>
                                    <?php else: ?>
                                        <?php echo e($product->theme); ?>

                                    <?php endif; ?>
                                </td>
                                <td><?php echo e($product->model_name); ?></td>
                                <td><?php echo e($product->casting_name); ?></td>  
                                <td><?php echo e($product->year); ?></td>  
                                <td><?php echo e($product->colour); ?></td>  
                                <td><?php echo e($product->tampo); ?></td>  
                                <!--td><?php echo e($product->decoration); ?></td-->  
                                <td><?php echo e($product->base_colour); ?></td>  
                                <td><?php echo e($product->type); ?></td>  
                                <td><?php echo e($product->window_colour); ?></td>  
                                <td><?php echo e($product->interior_colour); ?></td>  
                                <td><?php echo e($product->wheel_type); ?></td>  
                                <td>
                                    <?php if($product->visibility == '0'): ?>
                                        <div class="alert alert-danger">Hidden</div>
                                    <?php else: ?>
                                        Visible
                                    <?php endif; ?>    
                                </td>  
                                <td><?php echo e($product->country); ?></td>  
                                <td><?php echo e($product->class); ?></td>  
                                <td><?php echo e(substr($product->notes , 0, 20)); ?></td>  
                                <td><?php echo e($product->toy_hash); ?></td>
                                <td><?php echo e($product->col_hash); ?></td>
                                <td><?php echo e($product->series_hash); ?></td>
                                <td>
                                    <?php if($product->image2 <> null): ?>
                                    <img src="<?php echo e(asset($product->image2)); ?>" alt="" style="width:70px;height:50px">                                        
                                    <?php else: ?>
                                        N/A
                                    <?php endif; ?>
                                </td> 
                                <td>
                                    <?php if($product->image3 <> null): ?>
                                    <img src="<?php echo e(asset($product->image3)); ?>" alt="" style="width:70px;height:50px">                                        
                                    <?php else: ?>
                                        N/A
                                    <?php endif; ?>
                                </td> 
                                <td>
                                    <?php if($product->image4 <> null): ?>
                                    <img src="<?php echo e(asset($product->image4)); ?>" alt="" style="width:70px;height:50px">                                        
                                    <?php else: ?>
                                        N/A
                                    <?php endif; ?>
                                </td> 
                                <td>
                                    <?php if($product->image5 <> null): ?>
                                    <img src="<?php echo e(asset($product->image5)); ?>" alt="" style="width:70px;height:50px">                                        
                                    <?php else: ?>
                                        N/A
                                    <?php endif; ?>
                                </td> 
                                <td><?php echo e($product->created_at->diffForHumans()); ?></td>  
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
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/customer/www/ultimatecollectionscompany.com/public_html/test123/resources/views/admin/dashboard/hidden_products.blade.php ENDPATH**/ ?>