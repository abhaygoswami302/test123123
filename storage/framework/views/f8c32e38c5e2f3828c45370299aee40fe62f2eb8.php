

<?php $__env->startSection('content'); ?>
		
    <section class="InnerBanner" style="background-image: url(<?php echo e(asset('images/banner.png')); ?>);">
		<div class="container">
			<div class="row">
				<div class="col-xl-12">
                    
			 		<div class="InnerBannerTxt">
						<div class="TitleMn">
							<h2>All Products</h2>
						</div>
						<!--p>Total <b>2</b> products | <b>2</b>  in this page</p-->
                    
                            <div class="col-xl-12 text-center">
                                <ul class="breadcrumb">
                                    <li><a class="active" href="<?php echo e(route('welcome')); ?>">Home</a></li>
                                    <li><a href="<?php echo e(route('product.index')); ?>">Products</a></li>
                                </ul>
                                <ul class="breadcrumb">
                                    <li>Total <b><?php echo e($products->total()); ?></b> Products | <b><?php echo e($products->count()); ?></b> In This Page | Current Page <b> <?php echo e($products->currentPage()); ?> </b> </li>    
                                </ul>
                            </div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="Plain_First GuestGrid " style="background-image: url(<?php echo e(asset('images/patteren.png')); ?>);">
        <div class="container">
            <div class="row">
                <?php if(Session('message')): ?>
                    <div class="col-sm-12">
                        <div class="alert alert-success">
                            <?php echo e(Session::get('message')); ?>

                        </div>
                    </div>
                <?php endif; ?>
            </div>

            <div class="row cstProFltr">
                <div class="col-sm-12" style="font-size: 12px!important">
                    <form action="<?php echo e(route('product.filter.post')); ?>" method="POST" enctype="multipart/form-data">
                        <?php echo csrf_field(); ?>
                        <div class="row">
                            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12 p-1">
                                <input type="text" wire:model.debounce.350ms="search" name="name" id="name" placeholder="Search Product Name" class="form-control">
                            </div>
                            <div class="col-xl-2 col-lg-2 col-md-6 col-sm-12 col-12 p-1">
                                <select name="category_name" wire:model="category_name" class="form-control">
                                    <option value="">Category Name</option>
                                    <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $categories): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($categories->category_name); ?>"><?php echo e($categories->category_name); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                            </div>
                            <div class="col-xl-2 col-lg-2 col-md-6 col-sm-12 col-12 p-1">
                                <select name="series" wire:model="series" class="form-control">
                                    <option value="">Series Name</option>
                                    <?php $__currentLoopData = $series; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $s): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <?php if($s->series <> null): ?>
                                        <option value="<?php echo e($s->series); ?>"><?php echo e($s->series); ?></option>                                            
                                        <?php endif; ?>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                            </div>
                            <div class="col-xl-2 col-lg-2 col-md-6 col-sm-12 col-12 p-1">
                                <select name="casting_name" wire:model="casting_name" class="form-control">
                                    <option value="">Casting Name</option>
                                    <?php $__currentLoopData = $casting_name; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $casting): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <?php if($casting->casting_name <> null): ?>
                                        <option value="<?php echo e($casting->casting_name); ?>"><?php echo e($casting->casting_name); ?></option>                                            
                                        <?php endif; ?>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                            </div>
                            <div class="col-xl-2 col-lg-2 col-md-6 col-sm-12 col-12 p-1">
                                <select name="year" wire:model="year" class="form-control">
                                    <option value="">Select Year</option>
                                    <?php $__currentLoopData = $year; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $y): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <?php if($y->year <> null): ?>
                                        <option value="<?php echo e($y->year); ?>"><?php echo e($y->year); ?></option>                                            
                                        <?php endif; ?>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                            </div>
                            <div class="col-xl-1 col-lg-1 col-md-6 col-sm-12 col-12 p-1">
                                <button type="submit" class="btn btn-outline-secondary my_show_product_filter_button px-2 py-2"
                                 style="padding-top: 0%;margin-top: 0%; color:black;">Filter</button>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12 pt-4"> 
                                <?php if($requestName || $requestCategoryName || $requestSeries || $requestCastingName || $requestYear): ?>                                                
                                    <nav aria-label="breadcrumb">
                                        <div class="row">
                                            <div class="col-sm-9">
                                                <ol class="breadcrumb">
                                                <?php if($requestName): ?>
                                                <li class="breadcrumb-item"><a href="#"><?php echo e($requestName); ?></a></li>
                                                <?php endif; ?> 
                                                <?php if($requestCategoryName): ?>
                                                <li class="breadcrumb-item"><a href="#"><?php echo e($requestCategoryName); ?></a></li>
                                                <?php endif; ?> 
                                                <?php if($requestSeries): ?>
                                                <li class="breadcrumb-item"><a href="#"><?php echo e($requestSeries); ?></a></li>
                                                <?php endif; ?> 
                                                <?php if($requestCastingName): ?>
                                                <li class="breadcrumb-item"><a href="#"><?php echo e($requestCastingName); ?></a></li>
                                                <?php endif; ?> 
                                                <?php if($requestYear): ?>
                                                <li class="breadcrumb-item"><a href="#"><?php echo e($requestYear); ?></a></li>
                                                <?php endif; ?>                                                
                                                </ol>
                                            </div>
                                            <div class="col-sm-3 text-right p-0 m-0">
                                                <a href="<?php echo e(route('product.index')); ?>">
                                                    <button class="btn btn-outline-secondary my_show_product_filter_button px-2 py-2" 
                                                    style="padding-top: 0%;margin-top: 0%; 
                                                    background:rgba(58,0,198,1);border:none">Go Back</button>
                                                </a>
                                            </div>
                                        </div>
                                    </nav>                                          
                                <?php endif; ?>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-sm-12">
                    <div class="row">
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6">
                            <a href="<?php echo e($products->previousPageUrl()); ?>">
                                <button class="btn btn-info" style="background:rgba(238,2,17,1);border:none; width:auto;">Previous</button>
                            </a>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6">
                            <a href="<?php echo e($products->nextPageUrl()); ?>" style="float: right;">
                                <button class="btn btn-info" style="background:rgba(58,0,198,1);border:none">Next</button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        
            <div class="row mt-4 cstProHvr">
                
                    <?php $__empty_1 = true; $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                        <div class="col-sm-4 col-lg-4 col-md-6 col-sm-6 col-12">
                            <div class="product">
                                <div class="imgbox"> 
                                    <?php if($product->image1 == NULL): ?>
                                    <img src="<?php echo e(asset('images/car_not_found.jpg')); ?>" alt="">
                                    <?php else: ?>
                                    <img src="<?php echo e(asset($product->image1)); ?>" >                                        
                                    <?php endif; ?>
                                </div>
                                <div class="specifies">
                                    <div class="row">
                                        <div class="col-sm-9 col-9">
                                            <h2> <?php echo e($product->name); ?> </h2>
                                        </div>
                                           <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('bookmark', ['product' => $product])->html();
} elseif ($_instance->childHasBeenRendered('bxjDHvl')) {
    $componentId = $_instance->getRenderedChildComponentId('bxjDHvl');
    $componentTag = $_instance->getRenderedChildComponentTagName('bxjDHvl');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('bxjDHvl');
} else {
    $response = \Livewire\Livewire::mount('bookmark', ['product' => $product]);
    $html = $response->html();
    $_instance->logRenderedChild('bxjDHvl', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
                                        <div class="col-sm-12">
                                                <span>Theme : <?php echo e($product->theme == null ? 'N/A' : $product->theme); ?> | <?php echo e($product->year); ?></span>
                                            </h2>
                                        </div>
                                    </div>
                                    
                                    <div class=""> 
                                    <a href="<?php echo e(route('product.show', $product->id)); ?>">
                                        <button class="btn btn-primary">View Product </button>
                                    </a>
                                    </div> 
                                    <div class="row">
                                      
                                        <?php if($product->collection_name == 'Hot Toys'): ?>
                                        <div class="col-sm-3">
                                            <b><small>Series :</small></b> 
                                       </div>
                                       <div class="col-sm-9">
                                           <?php echo e($product->series); ?>

                                       </div>
                                        <div class="col-sm-3">
                                            <b> <small>Category:</small></b> 
                                         </div>
                                         <div class="col-sm-9">
                                             <?php echo e($product->category_name); ?>

                                         </div>
                                         <?php elseif($product->collection_name == 'Hot Wheels'): ?>
                                            <div class="col-sm-3">
                                                <b><small>Series :</small></b> 
                                            </div>
                                            <div class="col-sm-9">
                                                <?php echo e($product->series); ?>

                                            </div>
                                            <div class="col-sm-3">
                                                <b><small> Casting:</small></b> 
                                            </div>
                                            <div class="col-sm-9">
                                                <?php echo e($product->casting_name); ?>

                                            </div>
                                         <?php elseif($product->collection_name == 'Lego MiniFigures'): ?>
                                         <div class="col-sm-3">
                                            <b><small>Fig Num:</small></b> 
                                        </div>
                                        <div class="col-sm-9">
                                            <?php echo e($product->lego_mf_fig_num); ?>

                                        </div>
                                        <div class="col-sm-3">
                                            <b><small>NumParts:</small></b> 
                                        </div>
                                        <div class="col-sm-9">
                                            <?php echo e($product->lego_mf_num_parts); ?>

                                        </div>
                                         <?php endif; ?>
                                    </div>
                                    <p></p>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                        <div class="col-xl-12 text-center">
                            <h3>No Products Found!</h3>
                        </div>
                    <?php endif; ?>
            </div>

            <div class="col-sm-12">
                    <div class="row">
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6">
                            <a href="<?php echo e($products->previousPageUrl()); ?>">
                                <button class="btn btn-info" style="background:rgba(238,2,17,1);border:none; width:auto;">Previous</button>
                            </a>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6">
                            <a href="<?php echo e($products->nextPageUrl()); ?>" style="float: right;">
                                <button class="btn btn-info" style="background:rgba(58,0,198,1);border:none">Next</button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
	</section>
   
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/customer/www/ultimatecollectionscompany.com/public_html/test123/resources/views/guest/products/index.blade.php ENDPATH**/ ?>