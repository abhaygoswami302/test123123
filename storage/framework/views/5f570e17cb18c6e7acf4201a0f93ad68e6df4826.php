    <div>
        <div class="ClctMnRtTp">
          <div class="row cstUsrDashboard">
            <div class="col-xl-12">
              <div class="ClctMnRtTpRt">
                <div class="search">
                  <span class="SrchHvr">
                    <form action="">
                        <input type="text" name="search" class="SrchHdr form-control" 
                        placeholder="Search Products Here" wire:model="searchTerm2">
                    </form>
                    <button type="submit" class="SrcBtn">
                      <img src="<?php echo e(asset('images/search.png')); ?>" alt="">
                    </button>
                  </span>
                </div>
              </div>
            </div>
    
            <div class="col-xl-6 col-lg-8 col-md-12 col-sm-12 col-12">
              <div class="ClctMnRtTpLft">
                <div class="TitleMn">
                    <h2>My Products</h2> 
                </div>
              </div>
            </div>
    
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12 pb-2">
              <div class="VwBtn">
                <a href="<?php echo e(route('userproduct.index')); ?>">
                  <button class="glow-on-hover btn btn-1 text-white" type="button">
                     All My Products
                  </button>
                </a>
              </div>
            </div>                    
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12 pb-2">
              <div class="VwBtn">
                <a href="<?php echo e(route('userproduct.create')); ?>">
                  <button class="glow-on-hover btn btn-1 text-white" type="button">
                    Add New Product
                  </button>
                </a>
              </div>
            </div>
          
          </div>
         
          <div class="ClctMnRtBtm DsbrdProduct">
            <div class="CltnGrid">
              <div class="row">
                  <?php $__empty_1 = true; $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
                        <div class="CollectionGrdMN">
                        <div class="CollectionGrdMNImg">
                            <div class="CollectionGrdMNImg_1">
                              <?php if($product->image1 <> NULL): ?>
                              <img src="<?php echo e(asset($product->image1)); ?>" alt="">
                              <?php else: ?>
                              <img src="<?php echo e(asset('images/car_not_found.jpg')); ?>" alt="" class="noimage_border">
                              <?php endif; ?>
                            </div>
                            <div class="CollectionGrdMNImg_2" >
                              <?php if($product->visibility == '1'): ?>
                              <a class="GridNwAkr" href="<?php echo e(route('product.show', $product->id)); ?>">
                              <?php endif; ?>
                                <?php if($product->collection_name == 'Hot Wheels'): ?>
                                <h6><?php echo e($product->name); ?></h6>
                                <?php else: ?>
                                <br>
                                <h6><?php echo e($product->name); ?></h6>
                                <?php endif; ?>  
                                <?php if($product->collection_name == 'Hot Wheels'): ?>
                                  <p><?php echo e($product->colour); ?></p>
                                  <p><?php echo e($product->year); ?></p>
                                  <p><?php echo e($product->casting_name); ?></p>
                                  <p><?php echo e($product->theme); ?></p>
                                <?php endif; ?>
                              <?php if($product->visibility == '1'): ?>
                              </a>
                              <?php endif; ?>
                            </div>                               
                        </div>
                        <div class="CollectionGrdMNTxt">
                            <div class="row">
                              <div class="col-sm-5">
                                <h3><?php echo e(substr($product->name, 0, 30)); ?>...</h3>
                              </div>
                              <div class="col-sm-7">
                                <h3><?php echo e($product->category_name); ?></h3>
                              </div>
                            </div>
                        </div>
                        </div>
                    </div>   
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                  <div class="row text-center">
                    <div class="col-sm-12">
                      <h4>No Products Results Found!</h4>   
                    </div>  
                    </div>                 
                  <?php endif; ?>
                <div class="col-xl-12">
                  <div class="VwBtn">
                    <a href="<?php echo e(route('userproduct.index')); ?>">
                      <button class="glow-on-hover btn btn-1 text-white" type="button"> Load All </button>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
    </div>
  </div><?php /**PATH C:\xampp\htdocs\ucc\resources\views/livewire/guest-products.blade.php ENDPATH**/ ?>