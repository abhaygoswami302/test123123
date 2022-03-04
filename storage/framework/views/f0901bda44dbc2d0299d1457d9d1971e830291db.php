

<?php $__env->startSection('content'); ?>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 text-center p-4">
                <h3 class="m-0 font-weight-bold text-primary">All Contributors</h3>
                <?php echo e($users->links()); ?>

            </div>
            <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col-sm-3">
                <div class="card shadow mb-4 my-card">
                    <a href="#collapseCardExample_<?php echo e($user->id); ?>" class="d-block card-header py-3" data-toggle="collapse"
                        role="button" aria-expanded="true" aria-controls="collapseCardExample">
                        <h6 class="m-0 font-weight-bold text-primary">
                            <?php echo e(ucfirst($user->name)); ?>

                        </h6>
                    </a>
                    <!-- Card Content - Collapse -->
                    <div class="collapse show" id="collapseCardExample_<?php echo e($user->id); ?>">
                        <div class="card-body">
                            <div class="text-center">
                                <a href="<?php echo e(route('admin.user.show', $user->id)); ?>">
                                    <img class="img-fluid  mb-4" style="width: 15rem;height:10rem"
                                    src="
                                    <?php if($user->image == NULL): ?>
                                    <?php echo e(asset('images/admin/undraw_profile.svg')); ?> 
                                    <?php else: ?>
                                    <?php echo e(asset($user->image)); ?>

                                    <?php endif; ?> "
                                     alt="user image">
                                </a>
                            </div>
                            <div class="row">
                                <div class="col-sm-5" style="color: black">
                                   
                                </div>
                                <div class="col-sm-7 text-right">
                                    <small><?php echo e($user->updated_at->diffForHumans()); ?></small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>                
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/customer/www/ultimatecollectionscompany.com/public_html/test123/resources/views/admin/users/contributor.blade.php ENDPATH**/ ?>