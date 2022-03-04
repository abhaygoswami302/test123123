<div>
    <div class="ClctMnRtTp">
        <div class="row cstUsrDashboard">
            <div class="col-xl-12">
            <div class="ClctMnRtTpRt">
                <div class="search">
                <span class="SrchHvr">
                    <form action="">
                        <input type="text" name="search" class="SrchHdr form-control" 
                        placeholder="Search Categories Here" wire:model="searchTerm1">
                    </form>
                    <button type="submit" class="SrcBtn">
                    <img src="<?php echo e(asset('images/search.png')); ?>" alt="">
                    </button>
                </span>
                </div>
            </div>
            </div>

            <div class="col-xl-8 col-lg-8 col-md-7 col-sm-7 col-12">
            <div class="ClctMnRtTpLft">
                <div class="TitleMn">
                    <h2>My Categories</h2> 
                </div>
            </div>
            </div>

            <!--div class="col-xl-4 col-lg-4 col-md-5 col-sm-5 col-12">
            <div class="VwBtn">
                <a href="<?php echo e(route('category.create')); ?>">
                <button class="glow-on-hover btn btn-1 text-white" type="button">Add Category</button>
                </a>
            </div>
            </div-->
        </div>
        </div>
        <div class="ClctMnRtBtm">
        <div class="CltnGrid">
            <div class="row">
            <?php $__empty_1 = true; $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category_name => $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>

            
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
                    <div class="CollectionGrdMN">
                    <div class="CollectionGrdMNImg">
                        
                        <?php $__currentLoopData = $category; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $s1): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="CollectionGrdMNImg_1">
                                <?php if($s1->image == null): ?>
                                <img src="<?php echo e(asset('images/category_not_found.jpg')); ?>" alt="">
                                <?php else: ?>
                                <img src="<?php echo e(asset($s1->image)); ?>" alt="">
                                <?php endif; ?>
                            </div>
                        
                            <div class="CollectionGrdMNImg_2">
                                <a class="GridNwAkr" href="<?php echo e(route('usercategory.show', $s1->category_id)); ?>"></a>
                                <h3><?php echo e($category_name); ?></h3>
                                <?php if(count($category) == 1): ?>
                                <p><?php echo e(count($category)); ?> product in your collection.</p>
                                <?php else: ?>
                                <p><?php echo e(count($category)); ?> products in your collection.</p>
                                <?php endif; ?>  
                            </div>
                            
                        <?php break; ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>

                        <div class="CollectionGrdMNTxt">
                            <div class="row">
                            <div class="col-sm-7 text-left">
                                <h3><?php echo e($category_name); ?></h3>
                            </div>
                            <div class="col-sm-5 text-right">
                                <?php $__currentLoopData = $category; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $s1): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php if(count($category) == 1): ?>
                                <p><?php echo e(count($category)); ?> Product</p>
                                <?php else: ?>
                                <p><?php echo e(count($category)); ?> Products</p>
                                <?php endif; ?>  
                                <?php break; ?>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>                  
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                    <div class="row text-center">
                    <div class="col-sm-12">
                    <h4>No Categories Results Found!</h4>   
                    </div>  
                    </div>                               
                <?php endif; ?>
                                        
            <div class="col-xl-12">
                <!--div class="VwBtn">
                <a href="<?php echo e(route('category.index')); ?>">
                    <button class="glow-on-hover btn btn-1 text-white" type="button">View More</button>
                </a>
                </div-->
            </div>
            </div>
        </div>
        </div>
</div><!-- Categories --><?php /**PATH C:\xampp\htdocs\ucc\resources\views/livewire/guest-categories.blade.php ENDPATH**/ ?>