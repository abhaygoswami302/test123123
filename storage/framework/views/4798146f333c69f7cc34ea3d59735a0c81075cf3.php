

<?php $__env->startSection('content'); ?> 
<section class="HomeSec1">
  <div class="container">
      <div class="row">
          <div class="HomeSec1Data">
              <div class="row">
                  <div class="col-xl-12">
                      <div class="TitleMn" align="center">
                          <h2>Categories</h2>
                      </div>
                  </div>
                  <div class="col-xl-12">
                      <div class="CollectionGrd">
                          <div class="row">
                              <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
                                    <?php if(auth()->guard()->guest()): ?>
                                    <a href="<?php echo e(route('pricing')); ?>">
                                    <?php endif; ?>
                                    <div class="CollectionGrdMN">
                                        <div class="CollectionGrdMNImg">
                                            <div class="CollectionGrdMNImg_1">
                                                <img src="<?php echo e(asset('images/r1.png')); ?>" alt="" />
                                            </div>
                                            <div class="CollectionGrdMNImg_2">
                                                <h3><?php echo e($category->name); ?></h3>
                                                <p><?php echo e(substr($category->description, 0, 20)); ?>...</p>
                                            </div>
                                        </div>
                                        <div class="CollectionGrdMNTxt">
                                            <h3 class="text-black"><?php echo e($category->name); ?></h3>
                                        </div>
                                    </div>
                                <?php if(auth()->guard()->guest()): ?>
                                    </a>
                                <?php endif; ?>
                                </div>
                              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                              <!--div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
                                  <?php if(auth()->guard()->guest()): ?>
                                  <a href="<?php echo e(route('pricing')); ?>">
                                  <?php endif; ?>
                                    <div class="CollectionGrdMN">
                                        <div class="CollectionGrdMNImg">
                                            <div class="CollectionGrdMNImg_1">
                                                <img src="<?php echo e(asset('images/r1.png')); ?>" alt="" />
                                            </div>
                                            <div class="CollectionGrdMNImg_2">
                                                <h3>Flying Colors</h3>
                                                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Molestiae ipsa...</p>
                                            </div>
                                        </div>
                                        <div class="CollectionGrdMNTxt">
                                            <h3 class="text-black">Flying Colors</h3>
                                        </div>
                                    </div>
                                <?php if(auth()->guard()->guest()): ?>
                                    </a>
                                <?php endif; ?>
                              </div>

                              <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
                                <?php if(auth()->guard()->guest()): ?>
                                    <a href="<?php echo e(route('pricing')); ?>" class="">
                                <?php endif; ?>  
                                    <div class="CollectionGrdMN">
                                        <div class="CollectionGrdMNImg">
                                            <div class="CollectionGrdMNImg_1">
                                                <img src="<?php echo e(asset('images/r2.png')); ?>" alt="" />
                                            </div>
                                            <div class="CollectionGrdMNImg_2">
                                                <h3>Flying Colors</h3>
                                                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Molestiae ipsa...</p>
                                            </div>
                                        </div>
                                        <div class="CollectionGrdMNTxt">
                                            <h3 class="text-black">Flying Colors</h3>
                                        </div>
                                    </div>
                                <?php if(auth()->guard()->guest()): ?>
                                    </a>
                                <?php endif; ?>
                              </div>
                              <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
                                    <?php if(auth()->guard()->guest()): ?>
                                        <a href="<?php echo e(route('pricing')); ?>">
                                    <?php endif; ?>
                                    <div class="CollectionGrdMN">
                                        <div class="CollectionGrdMNImg">
                                            <div class="CollectionGrdMNImg_1">
                                                <img src="<?php echo e(asset('images/r3.png')); ?>" alt="" />
                                            </div>
                                            <div class="CollectionGrdMNImg_2">
                                                <h3>Flying Colors</h3>
                                                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Molestiae ipsa...</p>
                                            </div>
                                        </div>
                                        <div class="CollectionGrdMNTxt">
                                            <h3 class="text-black">Flying Colors</h3>
                                        </div>
                                    </div>
                                  <?php if(auth()->guard()->guest()): ?>
                                    </a>
                                  <?php endif; ?>
                              </div>
                              <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
                                <?php if(auth()->guard()->guest()): ?>
                                <a href="<?php echo e(route('pricing')); ?>">
                                <?php endif; ?> 
                                    <div class="CollectionGrdMN">
                                        <div class="CollectionGrdMNImg">
                                            <div class="CollectionGrdMNImg_1">
                                                <img src="<?php echo e(asset('images/r4.png')); ?>" alt="" />
                                            </div>
                                            <div class="CollectionGrdMNImg_2">
                                                <h3>Flying Colors</h3>
                                                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Molestiae ipsa...</p>
                                            </div>
                                        </div>
                                        <div class="CollectionGrdMNTxt">
                                            <h3 class="text-black">Flying Colors</h3>
                                        </div>
                                    </div>
                                <?php if(auth()->guard()->guest()): ?>
                                    </a>
                                <?php endif; ?>
                              </div>
                              <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
                                    <?php if(auth()->guard()->guest()): ?>
                                        <a href="<?php echo e(route('pricing')); ?>">
                                    <?php endif; ?>
                                    <div class="CollectionGrdMN">
                                        <div class="CollectionGrdMNImg">
                                            <div class="CollectionGrdMNImg_1">
                                                <img src="<?php echo e(asset('images/r5.png')); ?>" alt="" />
                                            </div>
                                            <div class="CollectionGrdMNImg_2">
                                                <h3>Flying Colors</h3>
                                                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Molestiae ipsa...</p>
                                            </div>
                                        </div>
                                        <div class="CollectionGrdMNTxt">
                                            <h3 class="text-black">Flying Colors</h3>
                                        </div>
                                    </div>
                                <?php if(auth()->guard()->guest()): ?>
                                    </a>
                                <?php endif; ?>    
                              </div>
                              <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
                                <?php if(auth()->guard()->guest()): ?>
                                    <a href="<?php echo e(route('pricing')); ?>">
                                <?php endif; ?>
                                    <div class="CollectionGrdMN">
                                        <div class="CollectionGrdMNImg">
                                            <div class="CollectionGrdMNImg_1">
                                                <img src="<?php echo e(asset('images/r6.png')); ?>" alt="" />
                                            </div>
                                            <div class="CollectionGrdMNImg_2">
                                                <h3>Flying Colors</h3>
                                                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Molestiae ipsa...</p>
                                            </div>
                                        </div>
                                        <div class="CollectionGrdMNTxt">
                                            <h3 class="text-black">Flying Colors</h3>
                                        </div>
                                    </div>
                                <?php if(auth()->guard()->guest()): ?>
                                    </a>
                                <?php endif; ?>    
                              </div>
                              <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
                                    <?php if(auth()->guard()->guest()): ?>
                                        <a href="<?php echo e(route('pricing')); ?>">
                                    <?php endif; ?>
                                    <div class="CollectionGrdMN">
                                        <div class="CollectionGrdMNImg">
                                            <div class="CollectionGrdMNImg_1">
                                                <img src="<?php echo e(asset('images/r7.png')); ?>" alt="" />
                                            </div>
                                            <div class="CollectionGrdMNImg_2">
                                                <h3>Flying Colors</h3>
                                                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Molestiae ipsa...</p>
                                            </div>
                                        </div>
                                        <div class="CollectionGrdMNTxt">
                                            <h3 class="text-black">Flying Colors</h3>
                                        </div>
                                    </div>
                                    <?php if(auth()->guard()->guest()): ?>
                                        </a>
                                    <?php endif; ?>
                              </div>
                              <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
                                    <?php if(auth()->guard()->guest()): ?>
                                        <a href="<?php echo e(route('pricing')); ?>">
                                    <?php endif; ?>  
                                    <div class="CollectionGrdMN">
                                        <div class="CollectionGrdMNImg">
                                            <div class="CollectionGrdMNImg_1">
                                                <img src="<?php echo e(asset('images/r8.png')); ?>" alt="" />
                                            </div>
                                            <div class="CollectionGrdMNImg_2">
                                                <h3>Flying Colors</h3>
                                                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Molestiae ipsa...</p>
                                            </div>
                                        </div>
                                        <div class="CollectionGrdMNTxt">
                                            <h3 class="text-black">Flying Colors</h3>
                                        </div>
                                    </div>
                                <?php if(auth()->guard()->guest()): ?>
                                    </a>
                                <?php endif; ?>
                              </div-->
                          </div>
                      </div>
                  </div>
                    <div class="col-xl-12">
                    <div class="VwBtn">
                        <?php if(auth()->guard()->guest()): ?>
                        <a href="<?php echo e(route('pricing')); ?>">
                        <button class="glow-on-hover btn btn-1 text-white" type="button">View More</button>
                        </a>
                        <?php else: ?>
                            <a href="<?php echo e(route('category.index')); ?>">
                            <button class="glow-on-hover btn btn-1 text-white" type="button">View More</button>
                            </a>
                        <?php endif; ?>
                    </div>
                    </div>
              </div>
          </div>
      </div>
      <div class="row">
            <div class="col-sm-12 p-4">

            </div>

          <div class="HomeSec1Data HomeSec1Data2">
              <div class="row">
                  <div class="col-xl-12">
                      <div class="TitleMn" align="center">
                          <h2>Products</h2>
        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                      </div>
                  </div>
                  <div class="col-xl-12">
                      <div class="CollectionGrd">
                           <div class="table-responsive">
            <table class="table table-hover  table-striped table-bordered">
              <thead>
                  <tr>
                  <th>S. No.</th>
                  <th>Collection Name</th>
                  <th>Category Name</th>
                  <th>Model Name</th>
                  <th>Photo</th>
                </tr>
              </thead>
              <tbody>
                  <?php $__currentLoopData = $hot_toy_products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $hwt): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <tr>
                    <td><?php echo e($key+1); ?></td>
                    <td><?php echo e($hwt->collection_name); ?></td>
                    <td><?php echo e($hwt->category_name); ?></td>
                    <td><?php echo e($hwt->model_name); ?></td>
                     <?php if($hwt->image1 <> null): ?>
                     <td class="text-center"> <img src="<?php echo e(asset($hwt->image1)); ?>"> </td>      
                     <?php else: ?>
                     <td class="text-center"> <img src="<?php echo e(asset('images/car_not_found.jpg')); ?>"> </td>      
                     <?php endif; ?>
                    </tr>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              </tbody>
            </table>
        </div> 
        </div>
    </div>
    <div class="col-xl-12">
      <div class="VwBtn">
        <?php if(auth()->guard()->guest()): ?>
            <a href="<?php echo e(route('pricing')); ?>">
            <button class="glow-on-hover btn btn-1 text-white" type="button">View More</button>
            </a>
        <?php else: ?>
            <a href="<?php echo e(route('product.index')); ?>">
            <button class="glow-on-hover btn btn-1 text-white" type="button">View More</button>
            </a>
        <?php endif; ?>
      </div>
    </div>
              </div>
          </div>
      </div>
  </div>
</section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\ucc\resources\views/welcome.blade.php ENDPATH**/ ?>