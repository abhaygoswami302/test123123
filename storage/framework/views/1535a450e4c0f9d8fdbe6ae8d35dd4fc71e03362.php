

<?php $__env->startSection('content'); ?>
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12 text-center p-4">
            <h3 class="m-0 font-weight-bold text-primary">All Collections</h3>
            <br>
            <?php echo $__env->make('admin.partials.alert', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </div>
        <?php $__currentLoopData = $collections; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $collection): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="col-sm-4">
            <div class="card shadow mb-4 my-card">
                <div class="d-block card-header py-3"  >
                    <h6 class="m-0 font-weight-bold text-primary">
                        <div class="row">
                            <div class="col-sm-8 py-2">
                                <?php echo e($collection->name); ?>

                            </div>
                            <div class="col-sm-4 text-right">
                                
                               <a href="<?php echo e(route('admin_collections.edit', $collection->id)); ?>">
                                <button class="btn btn-outline-primary btn-sm">Edit</button>
                               </a>
                            </div>
                        </div>
                    </h6>
                </div>
                <!-- Card Content - Collapse -->
                <div class="collapse show" id="collapseCardExample_<?php echo e($collection->id); ?>">
                    <div class="card-body">
                        <div class="text-center">
                            <?php if($collection->name == 'Hot Wheels'): ?>
                            <a href="<?php echo e(route('admin_collections.show', $collection->id)); ?>">
                            <?php endif; ?>
                            <?php if($collection->name == 'Lego MiniFigures'): ?>
                            <a href="<?php echo e(route('lego_minifigures_form.index')); ?>">
                            <?php endif; ?>
                            <?php if($collection->name == 'Hot Toys'): ?>
                            <a href="<?php echo e(route('hotToys.index')); ?>">
                            <?php endif; ?>
                                <img class="img-fluid px-3 px-sm-4 mt-3 mb-4" style="width: 25rem;"
                                src="
                                <?php if($collection->image == null): ?>
                                    <?php echo e(asset('images/admin/undraw_posting_photo.svg')); ?>

                                <?php else: ?>
                                    <?php echo e(asset($collection->image)); ?>

                                <?php endif; ?>
                                " alt="...">
                            </a>      
                               
                        </div>
                        <div class="row">
                            <div class="col-sm-12 text-right">
                                <?php echo e($collection->updated_at->diffForHumans()); ?>

                            </div>
                            <p>
                                <?php echo e($collection->description); ?>

                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>  
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>              
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\ucc\resources\views/admin/collections/index.blade.php ENDPATH**/ ?>