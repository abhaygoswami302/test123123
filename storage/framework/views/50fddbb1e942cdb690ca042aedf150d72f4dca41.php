

<?php $__env->startSection('content'); ?>
    <div class="container-fluid">
        <!-- Content Row -->
<div class="row">

    <div class="col-lg-10 offset-1 mb-4">

        <!-- Illustrations -->
        <div class="card shadow mb-4" style="box-shadow: rgba(50, 50, 93, 0.25) 0px 50px 100px -20px, rgba(0, 0, 0, 0.3) 0px 30px 60px -30px, rgba(10, 37, 64, 0.35) 0px -2px 6px 0px inset;">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">
                    <div class="row">
                        <div class="col-sm-6">
                            Product <b><?php echo e($product->name); ?></b> Details
                        </div>
                        <div class="col-sm-6 text-right">
                            <?php if($product->collection_name == 'Hot Wheels'): ?>
                            <a href="<?php echo e(route('admin_products.edit', $product->id)); ?>">
                                <button class="btn btn-primary btn-sm">Edit <?php echo e($product->name); ?></button>
                            </a>    
                            <?php endif; ?>
                            <?php if($product->collection_name == 'Lego MiniFigures'): ?>
                            <a href="<?php echo e(route('lego_minifigures_form.edit', $product->id)); ?>">
                                <button class="btn btn-primary btn-sm">Edit <?php echo e($product->name); ?></button>
                            </a> 
                            <?php endif; ?>
                            <?php if($product->collection_name == 'Hot Toys'): ?>
                            <a href="<?php echo e(route('hotToys.edit', $product->id)); ?>">
                                <button class="btn btn-primary btn-sm">Edit <?php echo e($product->name); ?></button>
                            </a> 
                            <?php endif; ?>
                           
                        </div>
                    </div>
                </h6>
            </div>
            <div class="card-body table-responsive">
                <?php if($product->collection_name == 'Lego MiniFigures'): ?>
                <div class="row">
                    <div class="col-sm-6">
                        <?php if($product->image1 <> null): ?>
                        <img class="img-fluid px-3 px-sm-4 mt-3 mb-4" style="width: 25rem;"
                        src="<?php echo e(asset($product->image1)); ?>" alt="...">                            
                        <?php else: ?>
                        <img class="img-fluid px-3 px-sm-4 mt-3 mb-4" style="width: 25rem;"
                        src="<?php echo e(asset('images/noimage.png')); ?>" alt="...">
                        <?php endif; ?>
                    </div>
                    <div class="col-sm-6">
                        <div class="row py-2">
                            <div class="col-sm-6">
                                <b> Name :</b>
                            </div>
                            <div class="col-sm-6">
                                <?php echo e($product->name); ?>

                            </div>
                            <div class="col-sm-6">
                                    <b>Fig Num :</b>
                            </div>
                            <div class="col-sm-6">
                                <?php echo e($product->lego_mf_fig_num); ?>

                            </div>
                        </div>
                        <div class="row py-2">
                            <div class="col-sm-6">
                                <b>  Num Parts : </b>
                            </div>
                            <div class="col-sm-6">
                                <?php echo e($product->lego_mf_num_parts); ?>

                            </div>
                            <div class="col-sm-6">
                                <b>Collection Name :</b>
                            </div>
                            <div class="col-sm-6">
                                <?php echo e($product->collection_name); ?>

                            </div>
                        </div>
                        <div class="row py-2">
                            <div class="col-sm-6">
                                <b>  Visibility : </b>
                            </div>
                            <div class="col-sm-6">
                                <?php if($product->visibility == '0'): ?>
                                    Hidden
                                <?php else: ?>
                                    Visible
                                <?php endif; ?>    
                            </div>
                            <div class="col-sm-6">
                                <b>Created At :</b>
                            </div>
                            <div class="col-sm-6">
                                <?php echo e($product->created_at->diffForHumans()); ?>

                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <div class="row p-2 mt-2">
                            <div class="col-sm-3">
                                <?php if($product->image2 <> null): ?>
                                <img src="<?php echo e(asset($product->image2)); ?>" alt="" style="width:200px;height:200px"> 
                                <?php endif; ?>
                            </div>
                            <div class="col-sm-3">
                                <?php if($product->image3 <> null): ?>
                                <img src="<?php echo e(asset($product->image3)); ?>" alt="" style="width:200px;height:200px"> 
                                <?php endif; ?>
                            </div>
                            <div class="col-sm-3">
                                <?php if($product->image4 <> null): ?>
                                <img src="<?php echo e(asset($product->image4)); ?>" alt="" style="width:200px;height:200px"> 
                                <?php endif; ?>
                            </div>
                            <div class="col-sm-3">
                                <?php if($product->image5 <> null): ?>
                                <img src="<?php echo e(asset($product->image5)); ?>" alt="" style="width:200px;height:200px"> 
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>   
                <?php elseif($product->collection_name == 'Hot Toys'): ?> 
                <div class="row">
                    <div class="col-sm-6">
                        <?php if($product->image1 <> null): ?>
                        <img class="img-fluid px-3 px-sm-4 mt-3 mb-4" style="width: 25rem;"
                        src="<?php echo e(asset($product->image1)); ?>" alt="...">                            
                        <?php else: ?>
                        <img class="img-fluid px-3 px-sm-4 mt-3 mb-4" style="width: 25rem;"
                        src="<?php echo e(asset('images/noimage.png')); ?>" alt="...">
                        <?php endif; ?>
                    </div>
                    <div class="col-sm-6">
                        <div class="row py-2">
                            <div class="col-sm-6">
                                <b> Name :</b>
                            </div>
                            <div class="col-sm-6">
                                <?php echo e($product->name); ?>

                            </div>
                            <div class="col-sm-6">
                                    <b>Category Name :</b>
                            </div>
                            <div class="col-sm-6">
                                <?php echo e($product->category_name); ?>

                            </div>
                        </div>
                        <div class="row py-2">
                            <div class="col-sm-6">
                                <b>  Toy Hash : </b>
                            </div>
                            <div class="col-sm-6">
                                <?php echo e($product->toy_hash); ?>

                            </div>
                            <div class="col-sm-6">
                                <b>Collection Name :</b>
                            </div>
                            <div class="col-sm-6">
                                <?php echo e($product->collection_name); ?>

                            </div>
                        </div>
                        <div class="row py-2">
                            <div class="col-sm-6">
                                <b>  Year : </b>
                            </div>
                            <div class="col-sm-6">
                                <?php echo e($product->year); ?>

                            </div>
                            <div class="col-sm-6">
                                <b>Model Name :</b>
                            </div>
                            <div class="col-sm-6">
                                <?php echo e($product->model_name); ?>

                            </div>
                        </div>
                        <div class="row py-2">
                            <div class="col-sm-6">
                                <b>  Visibility : </b>
                            </div>
                            <div class="col-sm-6">
                                <?php if($product->visibility == '0'): ?>
                                    Hidden
                                <?php else: ?>
                                    Visible
                                <?php endif; ?>    
                            </div>
                            <div class="col-sm-6">
                                <b>Subseries Name :</b>
                            </div>
                            <div class="col-sm-6">
                                <?php echo e($product->subseries_name); ?>

                            </div>
                        </div>
                        <div class="row py-2">
                            <div class="col-sm-6">
                                <b>Created At :</b>
                            </div>
                            <div class="col-sm-6">
                                <?php echo e($product->created_at->diffForHumans()); ?>

                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <div class="row py-2">
                            <div class="col-sm-2">
                                <b>Notes :</b>
                            </div>
                            <div class="col-sm-10">
                                <?php echo $product->notes; ?>

                            </div>
                        </div>
                    </div>
                    <div class="row p-2 mt-2">
                        <div class="col-sm-3">
                            <?php if($product->image2 <> null): ?>
                            <img src="<?php echo e(asset($product->image2)); ?>" alt="" style="width:200px;height:200px"> 
                            <?php endif; ?>
                        </div>
                        <div class="col-sm-3">
                            <?php if($product->image3 <> null): ?>
                            <img src="<?php echo e(asset($product->image3)); ?>" alt="" style="width:200px;height:200px"> 
                            <?php endif; ?>
                        </div>
                        <div class="col-sm-3">
                            <?php if($product->image4 <> null): ?>
                            <img src="<?php echo e(asset($product->image4)); ?>" alt="" style="width:200px;height:200px"> 
                            <?php endif; ?>
                        </div>
                        <div class="col-sm-3">
                            <?php if($product->image5 <> null): ?>
                            <img src="<?php echo e(asset($product->image5)); ?>" alt="" style="width:200px;height:200px"> 
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="row p-2 mt-2">
                        <div class="col-sm-3">
                            <?php if($product->productImage->image6 <> null): ?>
                            <img src="<?php echo e(asset($product->productImage->image6)); ?>" alt="" style="width:200px;height:200px"> 
                            <?php endif; ?>
                        </div>
                        <div class="col-sm-3">
                            <?php if($product->productImage->image7 <> null): ?>
                            <img src="<?php echo e(asset($product->productImage->image7)); ?>" alt="" style="width:200px;height:200px"> 
                            <?php endif; ?>
                        </div>
                        <div class="col-sm-3">
                            <?php if($product->productImage->image8 <> null): ?>
                            <img src="<?php echo e(asset($product->productImage->image8)); ?>" alt="" style="width:200px;height:200px"> 
                            <?php endif; ?>
                        </div>
                        <div class="col-sm-3">
                            <?php if($product->productImage->image9 <> null): ?>
                            <img src="<?php echo e(asset($product->productImage->image9)); ?>" alt="" style="width:200px;height:200px"> 
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="row p-2 mt-2">
                        <div class="col-sm-3">
                            <?php if($product->productImage->image10 <> null): ?>
                            <img src="<?php echo e(asset($product->productImage->image10)); ?>" alt="" style="width:200px;height:200px"> 
                            <?php endif; ?>
                        </div>
                        <div class="col-sm-3">
                            <?php if($product->productImage->image11 <> null): ?>
                            <img src="<?php echo e(asset($product->productImage->image11)); ?>" alt="" style="width:200px;height:200px"> 
                            <?php endif; ?>
                        </div>
                        <div class="col-sm-3">
                            <?php if($product->productImage->image12 <> null): ?>
                            <img src="<?php echo e(asset($product->productImage->image12)); ?>" alt="" style="width:200px;height:200px"> 
                            <?php endif; ?>
                        </div>
                        <div class="col-sm-3">
                            <?php if($product->productImage->image13 <> null): ?>
                            <img src="<?php echo e(asset($product->productImage->image13)); ?>" alt="" style="width:200px;height:200px"> 
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="row p-2 mt-2">
                        <div class="col-sm-3">
                            <?php if($product->productImage->image14 <> null): ?>
                            <img src="<?php echo e(asset($product->productImage->image14)); ?>" alt="" style="width:200px;height:200px"> 
                            <?php endif; ?>
                        </div>
                        <div class="col-sm-3">
                            <?php if($product->productImage->image15 <> null): ?>
                            <img src="<?php echo e(asset($product->productImage->image15)); ?>" alt="" style="width:200px;height:200px"> 
                            <?php endif; ?>
                        </div>
                        <div class="col-sm-3">
                            <?php if($product->productImage->image16 <> null): ?>
                            <img src="<?php echo e(asset($product->productImage->image16)); ?>" alt="" style="width:200px;height:200px"> 
                            <?php endif; ?>
                        </div>
                        <div class="col-sm-3">
                            <?php if($product->productImage->image17 <> null): ?>
                            <img src="<?php echo e(asset($product->productImage->image17)); ?>" alt="" style="width:200px;height:200px"> 
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="row p-2 mt-2">
                        <div class="col-sm-3">
                            <?php if($product->productImage->image18 <> null): ?>
                            <img src="<?php echo e(asset($product->productImage->image18)); ?>" alt="" style="width:200px;height:200px"> 
                            <?php endif; ?>
                        </div>
                        <div class="col-sm-3">
                            <?php if($product->productImage->image19 <> null): ?>
                            <img src="<?php echo e(asset($product->productImage->image19)); ?>" alt="" style="width:200px;height:200px"> 
                            <?php endif; ?>
                        </div>
                        <div class="col-sm-3">
                            <?php if($product->productImage->image20 <> null): ?>
                            <img src="<?php echo e(asset($product->productImage->image20)); ?>" alt="" style="width:200px;height:200px"> 
                            <?php endif; ?>
                        </div>
                        <div class="col-sm-3">
                            <?php if($product->productImage->image21 <> null): ?>
                            <img src="<?php echo e(asset($product->productImage->image21)); ?>" alt="" style="width:200px;height:200px"> 
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="row p-2 mt-2">
                        <div class="col-sm-3">
                            <?php if($product->productImage->image22 <> null): ?>
                            <img src="<?php echo e(asset($product->productImage->image22)); ?>" alt="" style="width:200px;height:200px"> 
                            <?php endif; ?>
                        </div>
                        <div class="col-sm-3">
                            <?php if($product->productImage->image23 <> null): ?>
                            <img src="<?php echo e(asset($product->productImage->image23)); ?>" alt="" style="width:200px;height:200px"> 
                            <?php endif; ?>
                        </div>
                        <div class="col-sm-3">
                            <?php if($product->productImage->image24 <> null): ?>
                            <img src="<?php echo e(asset($product->productImage->image24)); ?>" alt="" style="width:200px;height:200px"> 
                            <?php endif; ?>
                        </div>
                        <div class="col-sm-3">
                            <?php if($product->productImage->image25 <> null): ?>
                            <img src="<?php echo e(asset($product->productImage->image25)); ?>" alt="" style="width:200px;height:200px"> 
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="row p-2 mt-2">
                        <div class="col-sm-3">
                            <?php if($product->productImage->image26 <> null): ?>
                            <img src="<?php echo e(asset($product->productImage->image26)); ?>" alt="" style="width:200px;height:200px"> 
                            <?php endif; ?>
                        </div>
                        <div class="col-sm-3">
                            <?php if($product->productImage->image27 <> null): ?>
                            <img src="<?php echo e(asset($product->productImage->image27)); ?>" alt="" style="width:200px;height:200px"> 
                            <?php endif; ?>
                        </div>
                        <div class="col-sm-3">
                            <?php if($product->productImage->image28 <> null): ?>
                            <img src="<?php echo e(asset($product->productImage->image28)); ?>" alt="" style="width:200px;height:200px"> 
                            <?php endif; ?>
                        </div>
                        <div class="col-sm-3">
                            <?php if($product->productImage->image29 <> null): ?>
                            <img src="<?php echo e(asset($product->productImage->image29)); ?>" alt="" style="width:200px;height:200px"> 
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="row p-2 mt-2">
                        <div class="col-sm-3">
                            <?php if($product->productImage->image30 <> null): ?>
                            <img src="<?php echo e(asset($product->productImage->image30)); ?>" alt="" style="width:200px;height:200px"> 
                            <?php endif; ?>
                        </div>
                        <div class="col-sm-3">
                            <?php if($product->productImage->image31 <> null): ?>
                            <img src="<?php echo e(asset($product->productImage->image31)); ?>" alt="" style="width:200px;height:200px"> 
                            <?php endif; ?>
                        </div>
                        <div class="col-sm-3">
                            <?php if($product->productImage->image32 <> null): ?>
                            <img src="<?php echo e(asset($product->productImage->image32)); ?>" alt="" style="width:200px;height:200px"> 
                            <?php endif; ?>
                        </div>
                        <div class="col-sm-3">
                            <?php if($product->productImage->image33 <> null): ?>
                            <img src="<?php echo e(asset($product->productImage->image33)); ?>" alt="" style="width:200px;height:200px"> 
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="row p-2 mt-2">
                        <div class="col-sm-3">
                            <?php if($product->productImage->image34 <> null): ?>
                            <img src="<?php echo e(asset($product->productImage->image34)); ?>" alt="" style="width:200px;height:200px"> 
                            <?php endif; ?>
                        </div>
                        <div class="col-sm-3">
                            <?php if($product->productImage->image35 <> null): ?>
                            <img src="<?php echo e(asset($product->productImage->image35)); ?>" alt="" style="width:200px;height:200px"> 
                            <?php endif; ?>
                        </div>
                        <div class="col-sm-3">
                            <?php if($product->productImage->image36 <> null): ?>
                            <img src="<?php echo e(asset($product->productImage->image36)); ?>" alt="" style="width:200px;height:200px"> 
                            <?php endif; ?>
                        </div>
                        <div class="col-sm-3">
                            <?php if($product->productImage->image37 <> null): ?>
                            <img src="<?php echo e(asset($product->productImage->image37)); ?>" alt="" style="width:200px;height:200px"> 
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="row p-2 mt-2">
                        <div class="col-sm-3">
                            <?php if($product->productImage->image38 <> null): ?>
                            <img src="<?php echo e(asset($product->productImage->image38)); ?>" alt="" style="width:200px;height:200px"> 
                            <?php endif; ?>
                        </div>
                    </div>
                </div>   
                <?php else: ?>
                <div class="row">
                    <div class="col-sm-6">
                        <?php if($product->image1 <> null): ?>
                        <img class="img-fluid px-3 px-sm-4 mt-3 mb-4" style="width: 25rem;"
                        src="<?php echo e(asset($product->image1)); ?>" alt="...">                            
                        <?php else: ?>
                        <img class="img-fluid px-3 px-sm-4 mt-3 mb-4" style="width: 25rem;"
                        src="<?php echo e(asset('images/noimage.png')); ?>" alt="...">
                        <?php endif; ?>
                    </div>
                    <div class="col-sm-6">
                        <div class="row py-2">
                            <div class="col-sm-6">
                                    <b> Name :</b>
                            </div>
                            <div class="col-sm-6">
                                <?php echo e($product->name); ?>

                            </div>
                            <div class="col-sm-6">
                                    <b>Series :</b>
                            </div>
                            <div class="col-sm-6">
                                <?php echo e($product->series); ?>

                            </div>
                        </div>
                        <div class="row py-2">
                            <div class="col-sm-6">
                                <b>  Category Name : </b>
                            </div>
                            <div class="col-sm-6">
                                <?php echo e($product->category_name); ?>

                            </div>
                            <div class="col-sm-6">
                                <b>Collection Name :</b>
                            </div>
                            <div class="col-sm-6">
                                <?php echo e($product->collection_name); ?>

                            </div>
                        </div>
                        <div class="row py-2">
                            <div class="col-sm-6">
                                 <b>Subseries_name : </b>
                            </div>
                            <div class="col-sm-6">
                                <?php echo e($product->subseries_name); ?>

                            </div>
                            <div class="col-sm-6">
                                 <b> Theme :</b>
                            </div>
                            <div class="col-sm-6">
                                <?php echo e($product->theme); ?>

                            </div>
                        </div>
                        <div class="row py-2">
                            <div class="col-sm-6">
                                 <b>Model Name : </b>
                            </div>
                            <div class="col-sm-6">
                                <?php echo e($product->model_name); ?>

                            </div>
                            <div class="col-sm-6">
                                 <b> Casting Name :</b>
                            </div>
                            <div class="col-sm-6">
                                <?php echo e($product->casting_name); ?>

                            </div>
                        </div>
                        <div class="row py-2">
                            <div class="col-sm-6">
                                 <b>Year :  </b>
                            </div>
                            <div class="col-sm-6">
                                <?php echo e($product->year); ?>

                            </div>
                            <div class="col-sm-6">
                                 <b> Colour :</b>
                            </div>
                            <div class="col-sm-6">
                                <?php echo e($product->colour); ?> 
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12">   
                           
                        <div class="row p-2">
                            <div class="col-sm-3">
                                 <b>     Tampo : </b>
                            </div>
                            <div class="col-sm-3">
                                <?php echo e($product->tampo); ?>  
                            </div>
                            <div class="col-sm-3">
                                 <b>Base Colour : </b>
                            </div>
                            <div class="col-sm-3">
                                <?php echo e($product->base_colour); ?>

                            </div>
                        </div>
                        
                        <div class="row p-2">
                            <div class="col-sm-3">
                                 <b>   Type : </b>
                            </div>
                            <div class="col-sm-3">
                                <?php echo e($product->type); ?> 
                            </div>
                            <div class="col-sm-3">
                                 <b>Window_Colour : </b>
                            </div>
                            <div class="col-sm-3">
                                <?php echo e($product->window_colour); ?> 
                            </div>
                        </div>
                        
                        <div class="row p-2">
                            <div class="col-sm-3">
                                 <b>Interior_Colour :</b>
                            </div>
                            <div class="col-sm-3">
                                <?php echo e($product->interior_colour); ?> 
                            </div>
                            <div class="col-sm-3">
                                 <b> Wheel_Type : </b>
                            </div>
                            <div class="col-sm-3">
                                <?php echo e($product->wheel_type); ?>

                            </div>
                        </div>
                           
                        <div class="row p-2">
                            <div class="col-sm-3">
                                 <b>Visibility :</b>
                            </div>
                            <div class="col-sm-3">
                                <?php if($product->visibility == 0): ?>
                                    Hidden
                                <?php else: ?>
                                    Visible
                                <?php endif; ?> 
                            </div>
                            <div class="col-sm-3">
                                 <b> Country : </b>
                            </div>
                            <div class="col-sm-3">
                                <?php echo e($product->country); ?> 
                            </div>
                        </div>

                        <div class="row p-2">
                            <div class="col-sm-3">
                                 <b>Class : </b>
                            </div>
                            <div class="col-sm-3">
                                <?php echo e($product->class); ?> 
                            </div>
                            <div class="col-sm-3">
                                 <b>  Series# : </b>
                            </div>
                            <div class="col-sm-3">
                                <?php echo e($product->series_hash); ?>

                            </div>
                        </div>   
                        
                        <div class="row p-2">
                            <div class="col-sm-3">
                                 <b>Toy# : </b>
                            </div>
                            <div class="col-sm-3">
                                <b><?php echo e($product->toy_hash); ?></b>
                            </div>
                            <div class="col-sm-3">
                                 <b>  Col# : </b>
                            </div>
                            <div class="col-sm-3">
                                <?php echo e($product->col_hash); ?>

                            </div>
                        </div>
                        
                        <div class="row p-2">
                            <div class="col-sm-3">
                                 <b>  Created At :  </b>
                            </div>
                            <div class="col-sm-9">
                             <b><?php echo e($product->created_at->diffForHumans()); ?> </b>
                            </div>
                        </div>
                            
                        <div class="row py-2 alert alert-primary">
                            <div class="col-sm-3">
                                 <b> Notes : </b>
                            </div>
                            <div class="col-sm-9">
                                <?php echo e($product->notes); ?> 
                            </div>
                        </div>
                        
                        
                        <div class="row p-2 mt-2">
                            <div class="col-sm-3">
                                <?php if($product->image2 <> null): ?>
                                <img src="<?php echo e(asset($product->image2)); ?>" alt="" style="width:200px;height:200px"> 
                                <?php endif; ?>
                            </div>
                            <div class="col-sm-3">
                                <?php if($product->image3 <> null): ?>
                                <img src="<?php echo e(asset($product->image3)); ?>" alt="" style="width:200px;height:200px"> 
                                <?php endif; ?>
                            </div>
                            <div class="col-sm-3">
                                <?php if($product->image4 <> null): ?>
                                <img src="<?php echo e(asset($product->image4)); ?>" alt="" style="width:200px;height:200px"> 
                                <?php endif; ?>
                            </div>
                            <div class="col-sm-3">
                                <?php if($product->image5 <> null): ?>
                                <img src="<?php echo e(asset($product->image5)); ?>" alt="" style="width:200px;height:200px"> 
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\ucc\resources\views/admin/products/show.blade.php ENDPATH**/ ?>