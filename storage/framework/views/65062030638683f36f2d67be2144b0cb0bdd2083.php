

<?php $__env->startSection('content'); ?>
		
    <section class="InnerBanner" style="background-image: url(<?php echo e(asset('images/banner.png')); ?>);">
		<div class="container">
			<div class="row">
				<div class="col-xl-12">
                    
					<div class="InnerBannerTxt">
						<div class="TitleMn">
							<h2>All Categories</h2>
						</div>
						<!--p>Total <b>2</b> Collections | <b>2</b>  in this page</p-->
                    
                            <div class="col-xl-12 text-center">
                                <ul class="breadcrumb">
                                    <li><a class="active" href="<?php echo e(route('welcome')); ?>">Home</a></li>
                                    <li><a href="#">Categories</a></li>
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
        
            <div class="row mt-4 cstProHvr">
                <!--div class="col-sm-12">
                    <div class="TitleMn" align="left" style="margin-bottom:10px">
                        <h4>2015</h4>
                    </div>
                </div-->
                    <?php $__empty_1 = true; $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                            <div class="product">
                                <div class="imgbox"> 
                                    <?php if($category->image == null): ?>
                                    <img src="<?php echo e(asset('images/category_not_found.jpg')); ?>" >         
                                    <?php else: ?>
                                    <img src="<?php echo e(asset($category->image)); ?>" > 
                                    <?php endif; ?>
                                </div>
                                <div class="specifies">
                                    <h2> <?php echo e($category->name); ?> <br> <span>Category</span></h2>
                                    <div class=""> 
                                    <a href="<?php echo e(route('category.show', $category->id)); ?>">
                                        <button class="btn btn-primary">View All Products In <?php echo e($category->name); ?></button>
                                    </a>
                                    </div>
                                    <p>
                                        <?php echo e(substr($category->description, 0, 80)); ?>...
                                    </p>    
                                </div>
                            </div>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                    <div class="col-xl-12 text-center">
                        <h3>No Categories Added Yet!</h3>
                    </div>
                    <?php endif; ?>
            </div>
        </div>
	</section>
   
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/customer/www/ultimatecollectionscompany.com/public_html/test123/resources/views/guest/categories/index.blade.php ENDPATH**/ ?>