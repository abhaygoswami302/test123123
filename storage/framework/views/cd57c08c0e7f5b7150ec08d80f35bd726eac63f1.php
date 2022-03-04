    <div>
        <div class="ClctMnRtTp">
            <div class="ClctMnRtTpLft">
              <div class="TitleMn">
                  <h2>My Collections</h2>
              </div>
            </div>
            <div class="ClctMnRtTpRt">
              <div class="search">
                <span class="SrchHvr">
                  <form action="">
                      <input type="text" name="search" class="SrchHdr form-control" 
                      placeholder="Search Collections Here" wire:model="searchTerm">
                  </form>
                  <button type="submit" class="SrcBtn">
                    <img src="<?php echo e(asset('images/search.png')); ?>" alt="">
                  </button>
                </span>
              </div>
            </div>
          </div>

          <div class="ClctMnRtBtm">
            <div class="CltnGrid">
              <div class="row">
                <?php $__empty_1 = true; $__currentLoopData = $collections; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $collection_name => $collection): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>

                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
                        <div class="CollectionGrdMN">
                        <div class="CollectionGrdMNImg">
                      
                            <?php $__currentLoopData = $collection; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $s1): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                              <div class="CollectionGrdMNImg_1">
                           
                                <?php if($s1->collection->image == null): ?>
                                <img src="<?php echo e(asset('images/collection_not_found.jpg')); ?>" alt="">
                                <?php else: ?>
                                <img src="<?php echo e(asset($s1->collection->image)); ?>" alt="">
                                <?php endif; ?>
                              </div>        
                              <div class="CollectionGrdMNImg_2">
                                <a class="GridNwAkr" href="<?php echo e(route('usercollection.show', $s1->collection_id)); ?>"></a>
                                <h3><?php echo e($collection_name); ?></h3>
                                <?php if($total_products == 1): ?>
                                  <p>View collection.</p>
                                <?php else: ?>
                                  <p>View collection.</p>
                                <?php endif; ?>  
                              </div>
                            <?php break; ?>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                        <div class="CollectionGrdMNTxt">
                            <div class="row">
                              <div class="col-sm-6 text-left">
                                <h3><?php echo e($collection_name); ?></h3>
                              </div>
                              <!--div class="col-sm-6 text-right">
                                <?php $__currentLoopData = $collection; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $s1): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php if($total_products == 1): ?>
                                <p><?php echo e($total_products); ?> Product</p>
                                <?php else: ?>
                                <p><?php echo e($total_products); ?> Products</p>
                                <?php endif; ?>  
                                <?php break; ?>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                              </div-->
                            </div>
                        </div>
                        </div>
                    </div>                  
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                    <div class="row text-center">
                      <div class="col-sm-12">
                        <h4>No Collections Results Found!</h4>   
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
    </div><!-- Collections --><?php /**PATH /home/customer/www/ultimatecollectionscompany.com/public_html/test123/resources/views/livewire/guest-collections.blade.php ENDPATH**/ ?>