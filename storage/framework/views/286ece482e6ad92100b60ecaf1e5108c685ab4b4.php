

<?php $__env->startSection('content'); ?>
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12 text-center p-4">
            <h3 class="m-0 font-weight-bold text-primary">All Castings</h3>
        </div>
        <div class="col-lg-12">
            <div class="card shadow mb-4">
                <div class="table-responsive">
                    <table class="table card-body table-hover table-striped table-bordered">
                        <thead>
                            <tr class="text-primary">
                                <th>Action</th>
                                <th>Casting Name</th>
                                <th>Subseries Name</th>
                                <th>Description</th>
                                <th>Image</th>
                                <th>Created At</th>
                            </tr>
                        </thead>
                        <tbody>
                           <?php $__currentLoopData = $castings; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $casting): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td class="text-center">
                                    <a href="<?php echo e(route('admin_castings.edit', $casting->id)); ?>"><i class="fas fa-edit"></i></a>
                                </td>        
                                <td>
                                    <a href="#"><?php echo e($casting->casting_name); ?></a>
                                </td>
                                <td>
                                    <a href="<?php echo e(route('admin_series.show', $casting->subseries_id)); ?>">
                                        <?php echo e($casting->subseries_name); ?>

                                    </a>
                                </td>
                                <td>
                                    <?php if($casting->description <> NULL): ?>
                                      <?php echo e($casting->description); ?> 
                                    <?php else: ?>
                                        N/A
                                    <?php endif; ?>
                                </td>
                                <td>
                                    <?php if($casting->image <> null): ?>
                                    <img src="<?php echo e(asset($casting->image)); ?>" alt=""></td>                                        
                                    <?php else: ?>
                                        N/A
                                    <?php endif; ?>
                                <td><?php echo e($casting->created_at->diffForHumans()); ?></td>
                            </tr>
                           <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>      
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/customer/www/ultimatecollectionscompany.com/public_html/test123/resources/views/admin/castings/index.blade.php ENDPATH**/ ?>