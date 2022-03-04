

<?php $__env->startSection('content'); ?>
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12 text-center p-4">
            <h3 class="m-0 font-weight-bold text-primary">All Subseries</h3>
        </div>
        <div class="col-lg-12">
            <div class="card shadow mb-4">
                <div class="table-responsive">
                    <table class="table card-body table-hover table-striped table-bordered">
                        <thead>
                            <tr class="text-primary">
                                <th>Series Name </th>
                                <th>Subseries Name</th>
                                <th>Collection Name</th>
                                <th>Category Name</th>
                                <th>Casting Name</th>
                                <th>Created At</th>
                            </tr>
                        </thead>
                        <tbody>
                           <?php $__currentLoopData = $series; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $s1): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td>
                                    <a href="<?php echo e(route('admin_series.show', $s1->id)); ?>">
                                        <b><?php echo e($s1->category_name); ?> : <?php echo e($s1->name); ?></b>
                                    </a>
                                </td>
                                <td>
                                    <a href="<?php echo e(route('admin_series.show', $s1->id)); ?>"><?php echo e($s1->name); ?></a>
                                </td>
                                <td>
                                    <a href="<?php echo e(route('admin_collections.index')); ?>">
                                        <?php echo e($s1->collection_name); ?>

                                    </a>
                                </td>
                                <td>
                                    <a href="<?php echo e(route('admin_categories.show', $s1->category_id)); ?>">
                                        <?php echo e($s1->category_name); ?>

                                    </a>
                                </td>
                                <td><?php echo e($s1->casting); ?></td>
                                <td><?php echo e($s1->created_at->diffForHumans()); ?></td>
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
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\ucc\resources\views/admin/series/index.blade.php ENDPATH**/ ?>