

<?php $__env->startSection('content'); ?>
<div class="container-fluid">
    <div class="row">
        <div class="col-xl-8  p-4">
            <h3 class="m-0 font-weight-bold text-primary">Upload Hot Wheels CSV</h3>
        </div>
        <div class="col-xl-4 text-right p-4">
            <a href="<?php echo e(route('lego_minifigures.create')); ?>">
                <button class="btn btn-primary">Upload Lego MiniFigures CSV</button>
            </a>
        </div>

        <div class="col-xl-12">
            <div class="card shadow mb-4">
                <div class="card-header text-primary font-weight-bold">Hot Wheels CSV UPLOAD</div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-3 pt-3">
                            <?php if(count($temporaries) > 0): ?>
                                <a href="<?php echo e(route('admin.tempLoadProducts')); ?>">
                                    <button class="btn btn-primary">Upload Products</button>
                                </a>
                            <?php endif; ?>
                        </div>
                        <div class="col-sm-9">
                            <form action="<?php echo e(route('admin.tempImport')); ?>" method="POST" enctype="multipart/form-data">
                                <?php echo csrf_field(); ?>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <label for="file"> Upload Hot Wheels CSV File</label>
                                        <input type="file" name="file" id="" class="my-2 text-center" required>
                                    </div>
                                    <!--div class="col-sm-4">
                                        <label for="photos"> Upload Product Images</label>
                                        <input type="file" name="photos[]" id=""  multiple  class="my-2 text-center">
                                    </div-->
                                    <div class="col-sm-6 pt-2">
                                        <div class="VwBtn">
                                            <button class="btn btn-primary text-white mb-2" 
                                            type="submit" >Upload Hot Wheels CSV</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
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
                        <h3 class="m-0 font-weight-bold text-primary">Temporary Hot Wheels Products</h3>
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
                        <tr>
                            <!--th>user_id</th>
                            <th>collection_id</th>
                            <th>category_id</th>
                            <th>subseries_id</th>
                            <th>theme_id</th--> 
                            <th>Action</th>
                            <th>Name</th>
                            <th>Series</th>
                            <th>Category_name</th>
                            <th>Collection_name</th>
                            <th>Subseries_name</th>
                            <th>Theme</th>
                            <th>Casting_name</th>  
                            <th>Model_name</th>
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
                            <th>Notes</th>  
                            <th>Toy#</th>  
                            <th>Col#</th>  
                            <th>Series#</th>  
                            <th>Class</th>  
                            <th>Image1</th>  
                            <th>Image2</th>  
                            <th>Image3</th>  
                            <th>Image4</th>  
                            <th>Image5</th>  
                            <th>Created_At</th>  
                        </tr>
                    </thead>
                    <tbody>
                        <?php $__empty_1 = true; $__currentLoopData = $temporaries; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $temp): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                        <tr>
                            <!--td><?php echo e($temp->user_id); ?></td>
                            <td><?php echo e($temp->collection_id); ?></td>
                            <td><?php echo e($temp->category_id); ?></td>
                            <td><?php echo e($temp->subseries_id); ?></td>
                            <td><?php echo e($temp->theme_id); ?></td--> 
                            <td>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <a href="<?php echo e(route('admin.tempEdit', $temp->id)); ?>">
                                            <i class="fas fa-edit"></i>
                                        </a>
                                    </div>
                                    <div class="col-sm-6">
                                        <form action="<?php echo e(route('admin.tempDelete', $temp->id)); ?>" method="POST">
                                            <?php echo csrf_field(); ?>
                                            <?php echo method_field('DELETE'); ?>
                                            <button type="submit" class="p-1" style="border:none;background:transparent" onclick="return confirm('Are you sure you want to delete this product?')"><i class="fas fa-trash" style="color:rgb(253, 129, 129)"></i></button>
                                        </form>
                                        </div>
                                </div>
                            </td>
                            <td><?php echo e($temp->name); ?></td>
                            <td><?php echo e($temp->series); ?></td>
                            <td><?php echo e($temp->category_name); ?></td>
                            <td><?php echo e($temp->collection_name); ?></td>
                            <td><?php echo e($temp->subseries_name); ?></td>
                            <td><?php echo e($temp->theme); ?></td>
                            <td><?php echo e($temp->casting_name); ?></td>  
                            <td><?php echo e($temp->model_name); ?></td>
                            <td><?php echo e($temp->year); ?></td>  
                            <td><?php echo e($temp->colour); ?></td>  
                            <td><?php echo e($temp->tampo); ?></td>  
                            <!--td><?php echo e($temp->decoration); ?></td-->  
                            <td><?php echo e($temp->base_colour); ?></td>  
                            <td><?php echo e($temp->type); ?></td>  
                            <td><?php echo e($temp->window_colour); ?></td>  
                            <td><?php echo e($temp->interior_colour); ?></td>  
                            <td><?php echo e($temp->wheel_type); ?></td>  
                            <td>
                                <?php if($temp->visibility == '0'): ?>
                                    Hidden
                                <?php else: ?>
                                    Visible
                                <?php endif; ?>    
                            </td>  
                            <td><?php echo e($temp->country); ?></td>  
                            <td><?php echo e(substr($temp->notes , 0, 20)); ?></td>  
                            <td><?php echo e($temp->toy_hash); ?></td>
                            <td><?php echo e($temp->col_hash); ?></td>
                            <th><?php echo e($temp->series_hash); ?></th>  
                            <th><?php echo e($temp->class); ?></th>  
                            <th>
                                <?php if($temp->image1 <> null): ?>
                                <img src="<?php echo e(asset($temp->image1)); ?>" alt="" style="width:70px;height:50px">
                                <?php endif; ?>
                            </th>  
                            <th>
                                <?php if($temp->image2 <> null): ?>
                                <img src="<?php echo e(asset($temp->image2)); ?>" alt="" style="width:70px;height:50px">
                                <?php endif; ?>
                            </th>  
                            <th>
                                <?php if($temp->image3 <> null): ?>
                                <img src="<?php echo e(asset($temp->image3)); ?>" alt="" style="width:70px;height:50px">
                                <?php endif; ?>
                            </th>  
                            <th>
                                <?php if($temp->image4 <> null): ?>
                                <img src="<?php echo e(asset($temp->image4)); ?>" alt="" style="width:70px;height:50px">
                                <?php endif; ?>    
                            </th>  
                            <th>
                                <?php if($temp->image5 <> null): ?>
                                <img src="<?php echo e(asset($temp->image5)); ?>" alt="" style="width:70px;height:50px">
                                <?php endif; ?>
                            </th>  
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
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/customer/www/ultimatecollectionscompany.com/public_html/test123/resources/views/admin/csvs/create.blade.php ENDPATH**/ ?>