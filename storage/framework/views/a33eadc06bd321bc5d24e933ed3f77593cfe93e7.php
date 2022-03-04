<div class="col-xl-12">
    <div class="CollectionGrd">
            <div class="row pb-1">
                <div class="col-sm-12">
                    <div class="row">
                        <div class="col-sm-12">  
                            <?php if($count_exceeded == 1): ?>
                            <div class="alert alert-danger">
                                Limit Exceeded , switch to premium
                            </div>
                            <?php endif; ?>                           
                            <?php if($flag == 1): ?>
                            <div class="alert alert-success">
                                Products Added To Your Collection
                            </div>
                            <?php endif; ?>
                            <?php if($duplicate_flag == 1): ?>
                                <div class="alert alert-danger">
                                    Product Already In Your Collection
                                </div>
                            <?php endif; ?>
                            <?php echo $__env->make('partials.alert', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-check py-1 px-0">
                                <button wire:click="updateSelected" 
                                class="<?php if($bulkDisabled): ?> disabled <?php endif; ?> btn btn-info btn-sm" style="background:rgba(238,2,17,1);border:none; width:auto;">
                                    Add Selected To My Collection
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="table-responsive">
                <table class="table table-hover  table-striped table-bordered">
                    <thead>
                        <tr>
                            <th>
                                <input type="checkbox" wire:model="selectAll" >
                            </th>
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
                    <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>      
                    <tr>
                        <td class="text-center">
                            <input type="checkbox" wire:model="selectedProducts" value="<?php echo e($product->id); ?>">
                        </td> 
                        <td>
                            <?php if($product->image1 <> null): ?>
                                <img src="<?php echo e(asset($product->image1)); ?>" alt="" style="width:70px;height:50px">                                        
                            <?php else: ?>
                                <img src="<?php echo e(asset('images/car_not_found.jpg')); ?>" alt=""  style="width:70px;height:50px">
                            <?php endif; ?>
                        </td>  
                        <td>
                            <a href="<?php echo e(route('product.show', $product->id)); ?>">
                                <?php echo e($product->name); ?>

                            </a>
                        </td>
                        <td>
                            <?php if($product->series <> null): ?>
                            <a href="<?php echo e(route('byseries',$product->series)); ?>">
                                <?php echo e($product->series); ?>

                            </a>
                            <?php else: ?>
                            N/A
                            <?php endif; ?>
                        </td>
                        <td>
                            <?php if($product->casting_name <> null): ?>
                            <a href="<?php echo e(route('category.show', $product->category_id)); ?>">
                                <?php echo e($product->category_name); ?>

                            </a>    
                            <?php else: ?>
                                N/A
                            <?php endif; ?>                                    
                        </td>
                        <td>
                            <?php if($product->collection_id <> null): ?>
                            <a href="<?php echo e(route('collection.show', $product->collection_id)); ?>">
                                <?php echo e($product->collection_name); ?>

                            </a>                                        
                            <?php else: ?>
                                N/A
                            <?php endif; ?>
                        </td>
                        <td>
                            <?php if($product->series): ?>
                            <a href="<?php echo e(route('byseries',$product->series)); ?>">
                                <?php echo e($product->subseries_name); ?>

                            </a>
                            <?php else: ?>
                                N/A
                            <?php endif; ?>
                        </td>
                        <td>
                            <?php if($product->theme_id <> null): ?>
                            <a href="<?php echo e(route('bytheme', $product->theme_id)); ?>">
                                <?php echo e($product->theme); ?>

                            </a>
                            <?php else: ?>
                                N/A
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
                        <td><?php echo substr($product->notes , 0, 20); ?></td>  
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
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                  </table>
            </div> 
    </div>
</div><?php /**PATH /home/customer/www/ultimatecollectionscompany.com/public_html/test123/resources/views/livewire/by-series-select.blade.php ENDPATH**/ ?>