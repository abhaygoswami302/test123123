

<?php $__env->startSection('content'); ?>
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12 text-center p-4">
            <h3 class="m-0 font-weight-bold text-primary">All Mainline Series</h3>
        </div>
        <div class="col-lg-12">
            <div class="card shadow mb-4">
                <div class="table-responsive">
                    <table class="table card-body table-hover table-striped table-bordered">
                        <thead>
                            <tr class="text-primary">
                                <th>Name</th>
                                <th>Subseries Name</th>
                                <th>Category Name</th>
                                <th>Casting Name</th>
                                <th>Created At</th> 
                            </tr>
                        </thead>
                        <tbody>
                           <?php $__currentLoopData = $mainline_series; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $mainline): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>      
                                <td>
                                    <?php echo e($mainline->name); ?>

                                </td>
                                <td>
                                    <a href="<?php echo e(route('admin_series.show', $mainline->subseries_id)); ?>">
                                        <?php echo e($mainline->subseries_name); ?>

                                    </a>
                                </td>
                                <td>
                                    <?php echo e($mainline->category_name); ?>

                                </td>
                                <td>
                                    <?php echo e($mainline->casting_name); ?>

                                </td>
                                <td><?php echo e($mainline->created_at->diffForHumans()); ?></td>
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
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/customer/www/ultimatecollectionscompany.com/public_html/test123/resources/views/admin/mainline/index.blade.php ENDPATH**/ ?>