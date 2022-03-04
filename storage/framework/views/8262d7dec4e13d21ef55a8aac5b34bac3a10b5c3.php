

<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center p-4">
                <div class="row">
                    <div class="col-sm-2">
                        <?php if(count($products) > 0): ?>
                        <a href="<?php echo e(route('admin.tempLoadProducts')); ?>">
                            <button class="btn btn-primary">Upload Products</button>
                        </a>
                        <?php endif; ?>
                    </div>
                    <div class="col-sm-8">
                        <h3 class="m-0 font-weight-bold text-primary">Temporary Products Uploaded By ADMIN</h3>
                    </div>
                    <div class="col-sm-2">
                        <a href="<?php echo e(route('admin.csv.create')); ?>">
                            <button class="btn btn-primary">Go Back</button>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-xl-12 py-4">     
                <?php echo $__env->make('admin.partials.alert', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                <?php if(count($products) > 0): ?>
               
                <div class="card shadow table-responsive">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-sm-8 text-primary font-weight-bold">Temporary Products Uploaded By ADMIN</div>
                            <div class="col-sm-4 text-right">
                                <!--button class="btn btn-danger btn-sm" data-toggle="modal" data-target="#exampleModal">Help</button-->
                            </div>
                        </div>
                    </div>
                    <table class="table card-body table-hover table-striped table-bordered">
                        <thead>
                            <tr class="text-primary">
                                <th>Action</th>
                                <th>Image 1</th>
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
                                <th>Image 2</th>
                                <th>Image 3</th>
                                <th>Image 4</th>
                                <th>Image 5</th>
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
                                        <b><?php echo e($product->category_name); ?></b>
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
                                        Hidden
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
                
                <?php else: ?>
                <div class="row">
                    <div class="col-sm-12">
                        <p>
                            <h4 class="alert alert-info text-center">No Temporary Products Added Yet!</h4>
                        </p>
                    </div>
                </div>
                <?php endif; ?>
               
                </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\ucc\resources\views/admin/csvs/index.blade.php ENDPATH**/ ?>