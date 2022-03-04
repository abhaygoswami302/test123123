

<?php $__env->startSection('content'); ?>
		
    <section class="InnerBanner" style="background-image: url(<?php echo e(asset('images/banner.png')); ?>);">
		<div class="container">
			<div class="row">
				<div class="col-xl-12">
                    
					<div class="InnerBannerTxt">
						<div class="TitleMn">
                            <h2><?php echo e($category->name); ?></h2>
						</div>
						<!--p>Total <b>2</b> Collections | <b>2</b>  in this page</p-->
                    
                            <div class="col-xl-12 text-center">
                                <ul class="breadcrumb">
                                    <li><a class="active" href="<?php echo e(route('welcome')); ?>">Home</a></li>
                                    <li><a class="active" href="<?php echo e(route('category.index')); ?>">Categories</a></li>
                                    <li><a href="#"><?php echo e($category->name); ?></a></li>
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

            <div class="row">
                <div class="col-sm-12">
                    <?php if($category->description <> null & $category->description <> 'N/A'): ?>
                    <?php echo e(substr($category->description, 0, 350)); ?>...
                    <?php endif; ?>
                </div>
            </div>

            <div class="row py-4">
                <?php $__currentLoopData = $subseries123; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $year => $subseries): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="col-sm-12">
                        <div class="YearLst">
                            <h4 class="">
                                <a href="#<?php echo e($year); ?>"><?php echo e($year); ?></a>
                            </h4>
                        </div>
                    </div>  
                    <div class="col-sm-12 py-2">
                        <div class="row">
                        <?php $__currentLoopData = $subseries; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $s1): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>    
                            <div class="col-sm-4">
                                <div class="YrLstAll">
                                    <h6>
                                        <a href="#<?php echo e($s1->name); ?>_<?php echo e($s1->id); ?>">
                                            <?php echo e($s1->name); ?>

                                        </a>
                                    </h6>
                                </div>
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>                     
                    </div> 
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>

            <div class="row mt-4 cstProHvr">
                <?php $__empty_1 = true; $__currentLoopData = $subseries123; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $year => $subseries): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                <div class="col-sm-12" id="<?php echo e($year); ?>">
                    <div class="TitleMn" align="left" style="margin-bottom:10px">
                        <h4><?php echo e($year); ?></h4>
                    </div>
                </div>
                <?php $__currentLoopData = $subseries; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $s1): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                        <div class="product" id="<?php echo e($s1->name); ?>_<?php echo e($s1->id); ?>">
                            <div class="imgbox"> <img src="<?php echo e(asset('images/car_not_found.jpg')); ?>" > </div>
                            <!--div class="specifies">
                                <h2> <?php echo e($s1->name); ?> <br> <span><?php echo e($s1->series); ?></span></h2>
                                <div class=""> 
                                <a href="<?php echo e(route('product.show', $s1->id)); ?>">
                                    <button class="btn btn-primary">View Product</button>
                                </a>
                                </div> 
                                <div class="row">
                                    <div class="col-sm-5">
                                         <b>Color: </b><?php echo e($s1->colour); ?>

                                    </div>
                                    <div class="col-sm-5">
                                     <b>  Casting:</b> <?php echo e($s1->casting_name); ?>

                                    </div>
                                    <div class="col-sm-2">
                                        <?php echo e($s1->year); ?>

                                    </div>  
                                </div>
                            <p></p>
                            
                            </div-->
                            <div class="specifies">
                                <div class="row">
                                    <div class="col-sm-9 col-9">
                                        <h2> <?php echo e($s1->name); ?> </h2>
                                    </div>
                                       <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('bookmark', ['product' => $s1])->html();
} elseif ($_instance->childHasBeenRendered('LVNs1Hc')) {
    $componentId = $_instance->getRenderedChildComponentId('LVNs1Hc');
    $componentTag = $_instance->getRenderedChildComponentTagName('LVNs1Hc');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('LVNs1Hc');
} else {
    $response = \Livewire\Livewire::mount('bookmark', ['product' => $s1]);
    $html = $response->html();
    $_instance->logRenderedChild('LVNs1Hc', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
                                    <div class="col-sm-12">
                                            <span>Theme : <?php echo e($s1->theme == null ? 'N/A' : $s1->theme); ?> | <?php echo e($s1->year); ?></span>
                                        </h2>
                                    </div>
                                </div>
                                
                                <div class=""> 
                                <a href="<?php echo e(route('product.show', $s1->id)); ?>">
                                    <button class="btn btn-primary">View Product </button>
                                </a>
                                </div> 
                                <div class="row">
                                    <?php if($s1->collection_name == 'Hot Toys'): ?>
                                    <div class="col-sm-3">
                                        <b><small>Series :</small></b> 
                                   </div>
                                   <div class="col-sm-9">
                                       <?php echo e($s1->series); ?>

                                   </div>
                                    <div class="col-sm-3">
                                        <b> <small>Category:</small></b> 
                                     </div>
                                     <div class="col-sm-9">
                                         <?php echo e($s1->category_name); ?>

                                     </div>
                                     <?php elseif($s1->collection_name == 'Hot Wheels'): ?>
                                        <div class="col-sm-3">
                                            <b><small>Series :</small></b> 
                                        </div>
                                        <div class="col-sm-9">
                                            <?php echo e($s1->series); ?>

                                        </div>
                                        <div class="col-sm-3">
                                            <b><small> Casting:</small></b> 
                                        </div>
                                        <div class="col-sm-9">
                                            <?php echo e($s1->casting_name); ?>

                                        </div>
                                     <?php elseif($s1->collection_name == 'Lego MiniFigures'): ?>
                                     <div class="col-sm-3">
                                        <b><small>Fig Num:</small></b> 
                                    </div>
                                    <div class="col-sm-9">
                                        <?php echo e($s1->lego_mf_fig_num); ?>

                                    </div>
                                    <div class="col-sm-3">
                                        <b><small>NumParts:</small></b> 
                                    </div>
                                    <div class="col-sm-9">
                                        <?php echo e($s1->lego_mf_num_parts); ?>

                                    </div>
                                     <?php endif; ?>

                                </div>
                                <p></p>
                            </div>
                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                <div class="col-xl-12 text-center">
                    <h3>No Products In <b><?php echo e($category->name); ?></b></h3>
                </div>
            <?php endif; ?>
            </div>

        </div>
	</section>
   
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/customer/www/ultimatecollectionscompany.com/public_html/test123/resources/views/guest/categories/show.blade.php ENDPATH**/ ?>