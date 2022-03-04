

<?php $__env->startSection('content'); ?>
<div class="container">
  <div class="row WtBg">
   
    <div class="col-xl-12 col-lg-12 col-md-8 col-sm-12 col-12 ">
      <div class="tab-content" id="nav-tabContent">
        <div class="ClctMnRt tab-pane fade show active" id="list-home" role="tabpanel" aria-labelledby="list-home-list">
            <div>
                <div class="ClctMnRtTp">
                    <div class="row cstUsrDashboard guest-product-show">
                      
                      <!--div class="col-xl-12">
                        <div class="ClctMnRtTpRt">
                          <div class="search">
                            <span class="SrchHvr">
                                <form action="">
                                    <input type="text" name="search" class="SrchHdr form-control" 
                                    placeholder="Search Categories Here" wire:model="searchTerm">
                                </form>
                              <button type="submit" class="SrcBtn">
                                <img src="<?php echo e(asset('images/search.png')); ?>" alt="">
                              </button>
                            </span>
                          </div>
                        </div>
                      </div-->
            
                      <div class="col-xl-8 col-lg-8 col-md-7 col-sm-7 col-12">
                        <div class="ClctMnRtTpLft ">
                          <div class="TitleMn">
                            <ul class="breadcrumb" style="background: transparent">
                                <li><a class="active" href="<?php echo e(route('users.dashboard')); ?>">Dashboard</a></li>
                                <li><a class="active" href="<?php echo e(route('users.dashboard')); ?>"><?php echo e($collection->name); ?></a></li>
                                <li><a href="#">Categories In <?php echo e($collection->name); ?></a></li>
                            </ul> 
                          </div>
                        </div>
                      </div>
            
                      <div class="col-xl-4 col-lg-4 col-md-5 col-sm-5 col-12">
                        <!--div class="VwBtn">
                          <a href="<?php echo e(route('category.create')); ?>">
                            <button class="glow-on-hover btn btn-1 text-white" type="button">Add Category</button>
                          </a>
                        </div-->
                      </div>
            
                    </div>
                  </div>
                  <div class="ClctMnRtBtm">
                    <div class="CltnGrid">
                      <div class="row">
                        <?php $__empty_1 = true; $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category_name => $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>

                        <div class="col-xl-3 col-lg-3 col-md-4 col-sm-4 col-12">
                                <div class="CollectionGrdMN">
                                <div class="CollectionGrdMNImg">
                                    
                                    <?php $__currentLoopData = $category; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $s1): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <div class="CollectionGrdMNImg_1">
                                            
                                        <?php if($s1->category->image == null): ?>
                                        <img src="<?php echo e(asset('images/category_not_found.jpg')); ?>" alt="">      
                                        <?php else: ?> 
                                        <img src="<?php echo e(asset($s1->category->image)); ?>" alt="">
                                        <?php endif; ?>
                                    </div>
                                    <div class="CollectionGrdMNImg_2">
                                          <a class="GridNwAkr" href="<?php echo e(route('usercollection.products', $s1->category_id)); ?>"></a>

                                            <h3><?php echo e($category_name); ?></h3>
                                                <?php if(count($category) == 1): ?>
                                                <p><?php echo e(count($category)); ?> product added by you.</p>
                                                <?php else: ?>
                                                <p><?php echo e(count($category)); ?> products added by you.</p>
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
                                <h4>No Categories Added By You Yet!</h4>   
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
            </div>
        </div> <!-- Collections -->
    </div>
  </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.users', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/customer/www/ultimatecollectionscompany.com/public_html/test123/resources/views/user/collections/show.blade.php ENDPATH**/ ?>