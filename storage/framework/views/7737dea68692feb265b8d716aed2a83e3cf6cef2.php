

<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="row p-2" style="border: 1px solid rgb(219, 218, 218);">

            <div class="col-sm-2 text-center" style="border-right: 1px solid rgb(219, 218, 218);">
                <img src="
                    <?php if($user->image == NULL): ?>
                    <?php echo e(asset('images/admin/undraw_profile.svg')); ?> 
                    <?php else: ?>
                    <?php echo e(asset($user->image)); ?>

                    <?php endif; ?> 
                " alt="Profile Picture" 
                style="width:100px;height:100px">
            </div>
            <div class="col-sm-10">
                <div class="row py-4">
                    <div class="col-sm-1"></div>
                    <div class="col-sm-2">
                        <b>Name :</b>
                    </div>
                    <div class="col-sm-2 text-left">
                    <?php echo e($user->name); ?>

                    </div>
                    <div class="col-sm-1 text-left">
                        <b>Email :</b>
                    </div>
                    <div class="col-sm-5 text-left">
                        <?php echo e($user->email); ?>

                    </div>
                    <div class="col-sm-1"></div>
                    <div class="col-sm-1"></div>
                    <div class="col-sm-2">
                        <b>Membership :</b>
                    </div>
                    <div class="col-sm-2 text-left">
                        <?php echo e($user->membership); ?>

                    </div>
                    <div class="col-sm-2 text-left">
                        <b>Total Products :</b>
                    </div>
                    <div class="col-sm-4 text-left">
                    <b><?php echo e($products->total()); ?></b> Products | <b> <?php echo e($products->count()); ?> </b>  in this page
                    </div>
                    <div class="col-sm-2 offset-1">
                        <b>User Type:</b>
                    </div>
                    <div class="col-sm-2">
                        <?php if($user->flag == '2' || $user->flag == '3'): ?>
                            User
                        <?php elseif($user->flag == '11'): ?>
                            Editor
                        <?php elseif($user->flag == '21'): ?>
                            Contributor
                        <?php endif; ?>
                    </div>
                    <div class="col-sm-5">
                        <form action="<?php echo e(route('admin.users.destroy', $user->id)); ?>" method="POST">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('DELETE'); ?>
                            <button type="submit" class="btn btn-outline-danger btn-block"  onclick="return confirm('Are you sure you want to delete this user?');">
                                Delete User
                            </button>
                        </form>
                      
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="row p-4">
                    <div class="col-sm-2 p-2">
                        <a href="<?php echo e($products->previousPageUrl()); ?>">
                            <button class="btn btn-outline-primary btn-sm">Previous</button>
                        </a>
                    </div>
                    <div class="col-sm-8 text-center">
                        <h2 class="m-0 font-weight-bold text-primary">
                            <?php if($user->flag == '21'): ?>
                                All Products Modified By <b><?php echo e($user->name); ?></b>
                            <?php else: ?>
                                All Products Added By <b><?php echo e($user->name); ?></b>
                            <?php endif; ?>
                        </h2>
                    </div>
                    <div class="col-sm-2 text-right p-2">
                        <a href="<?php echo e($products->nextPageUrl()); ?>">
                            <button class="btn btn-outline-primary btn-sm">Next</button>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-12 mb-4">
                <!-- Illustrations -->
                <?php if(count($products) > 0): ?>
                <div class="card shadow mb-4">
                    <div class="table-responsive ">
                        <table class="table card-body table-hover table-striped table-bordered">
                            <thead>
                              <tr class="text-primary">
                                <th scope="col">Action</th>
                                <th scope="col">Name</th>
                                <th scope="col">Collection Name</th>
                                <th scope="col">Series</th>
                                <th scope="col">Theme</th>
                                <th scope="col">Year</th>
                                <th scope="col">Image</th>
                                <th scope="col">Created At</th>
                              </tr>
                            </thead>
                            <tbody>
                                <?php $__empty_1 = true; $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                <tr>
                                    <td>
                                        <div class="row">
                                            <div class="col-sm-6 text-center">
                                                <a href="<?php echo e(route('admin_products.edit', $product->id)); ?>"><i class="fas fa-edit"></i></a>
                                            </div>
                                            <div class="col-sm-6 text-center p-0 m-0">
                                               <form action="<?php echo e(route('admin_products.destroy', $product->id)); ?>" method="POST">
                                                   <?php echo csrf_field(); ?>
                                                   <?php echo method_field('DELETE'); ?>
                                                   <button type="submit" style="border: none;background:none;" onclick="return confirm('Are you sure you want to delete this product?');">
                                                       <i class="fas fa-trash" style="color:rgb(247, 108, 108)"></i>
                                                   </button>
                                               </form>
                                            </div>
                                        </div>
                                    </td>
                                    <td><a href="<?php echo e(route('admin_products.show', $product->id)); ?>"><?php echo e($product->name); ?></a></td>
                                    <td scope="row">
                                        <a href="<?php echo e(route('admin_collections.index')); ?>">
                                            <?php echo e($product->collection_name); ?>

                                        </a>
                                    </td>
                                    <td><?php echo e($product->series); ?></td>
                                    <td><?php echo e($product->theme); ?></td>
                                    <td><?php echo e($product->year); ?></td>
                                    <td>
                                        <?php if($product->image1 <> null): ?>
                                        <img src="<?php echo e(asset($product->image1)); ?>" alt="" style="width: 65px;height:50px">
                                        <?php else: ?>
                                        N/A
                                        <?php endif; ?>
                                    </td>
                                    <td><?php echo e($product->created_at->diffForHumans()); ?></td>
                                </tr>                        
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                <div class="col-sm-12 text-center p-2">
                                    <?php if($user->flag == '21'): ?>
                                    <h3 class="">No Products Modified By <b><?php echo e($user->name); ?></b> Yet!</h3>
                                    <?php else: ?>
                                    <h3 class="">No Products Added By <b><?php echo e($user->name); ?></b> Yet!</h3>
                                    <?php endif; ?>
                                </div>
                                <?php endif; ?>
                            </tbody>
                          </table>
        
                          
                    </div>
                </div>
                <?php else: ?>
                <div class="col-sm-12 text-center p-2">
                    <?php if($user->flag == '21'): ?>
                    <h3 class="alert alert-info">No Products Modified By <b><?php echo e($user->name); ?></b> Yet!</h3>
                    <?php else: ?>
                    <h3 class="alert alert-info">No Products Added By <b><?php echo e($user->name); ?></b> Yet!</h3>
                    <?php endif; ?>
                </div>
                <?php endif; ?>
        
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/customer/www/ultimatecollectionscompany.com/public_html/test123/resources/views/admin/users/show.blade.php ENDPATH**/ ?>