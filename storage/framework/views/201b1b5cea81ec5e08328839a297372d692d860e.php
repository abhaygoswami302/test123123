

<?php $__env->startSection('content'); ?>
		
    <section class="InnerBanner" style="background-image: url(<?php echo e(asset('images/banner.png')); ?>);">
		<div class="container">
			<div class="row">
				<div class="col-xl-12">
                    
					<div class="InnerBannerTxt">
						<div class="TitleMn">
							<h2>All Categories In <?php echo e($collection->name); ?></h2>
						</div>
						<!--p>Total <b>2</b> categorys | <b>2</b>  in this page</p-->
                    
                            <div class="col-xl-12 text-center">
                                <ul class="breadcrumb">
                                    <li><a class="active" href="<?php echo e(route('welcome')); ?>">Home</a></li>
                                    <li><a href="<?php echo e(route('collection.index')); ?>">collections</a></li>
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
                    <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
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
                                    <h2> <?php echo e($category->name); ?> <br> <span>category</span></h2>
                                    <div class=""> 
                                    <a href="<?php echo e(route('guest.collection.products', $category->id)); ?>">
                                        <button class="btn btn-primary">View All Products In <?php echo e($category->name); ?></button>
                                    </a>
                                    </div>
                                    <p>
                                    <?php echo e(substr($category->description, 0, 80)); ?>...
                                    </p>
                                
                                </div>
                            </div>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
	</section>
   
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/customer/www/ultimatecollectionscompany.com/public_html/test123/resources/views/guest/collections/show.blade.php ENDPATH**/ ?>