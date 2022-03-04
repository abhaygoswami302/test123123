

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
            
                      <div class="col-xl-9 col-lg-9 col-md-7 col-sm-7 col-12">
                        <div class="ClctMnRtTpLft ">
                          <div class="TitleMn">
                            <ul class="breadcrumb" style="background: transparent">
                                <li><a class="active" href="<?php echo e(route('users.dashboard')); ?>">Dashboard</a></li>
                                <li><a href="#">Visible Products</a></li>
                            </ul> 
                          </div>
                        </div>
                      </div>
            
                      <div class="col-xl-3 col-lg-3 col-md-5 col-sm-5 col-12">
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
                        <?php $__empty_1 = true; $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                        
                        <div class="col-xl-3 col-lg-3 col-md-4 col-sm-4 col-12">
                                <div class="CollectionGrdMN">
                                        <div class="CollectionGrdMNImg">
                                          <!--a class="GridNwAkr" href="<?php echo e(route('userproduct.show', $product->id)); ?>"></a-->

                                        <div class="CollectionGrdMNImg_1">
                                          <?php if($product->image1 == null): ?>
                                          <img src="<?php echo e(asset('images/car_not_found.jpg')); ?>" alt="">
                                          <?php else: ?>
                                          <img src="<?php echo e(asset($product->image1)); ?>" alt="">
                                          <?php endif; ?>
                                        </div>
                                        <div class="CollectionGrdMNImg_2">
                                          <?php if($product->visibility == '1'): ?>
                                          <a class="GridNwAkr" href="<?php echo e(route('product.show', $product->id)); ?>">
                                          <?php endif; ?>
                                            <h3><?php echo e($product->name); ?></h3>
                                            <p><?php echo e($product->colour); ?></p>
                                            <p><?php echo e($product->year); ?></p>
                                            <p><?php echo e($product->casting_name); ?></p>
                                            <p><?php echo e($product->theme); ?></p>
                                            <?php if($product->visibility == '1'): ?>
                                            </a>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                <div class="CollectionGrdMNTxt">
                                    <div class="row">
                                      <div class="col-sm-7 text-left">
                                        <h3><?php echo e($product->name); ?></h3>
                                      </div>
                                      <div class="col-sm-5 text-right">
                                     
                                      </div>
                                    </div>
                                </div>
                                </div>
                            </div>                  
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                              <div class="row text-center">
                              <div class="col-sm-12">
                                <h4>No Visible Products To Show!</h4>   
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
<?php echo $__env->make('layouts.users', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/customer/www/ultimatecollectionscompany.com/public_html/test123/resources/views/user/visibleHiddenProducts/visible.blade.php ENDPATH**/ ?>