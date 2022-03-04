

<?php $__env->startSection('content'); ?>
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12 text-center p-4">
            <h3 class="m-0 font-weight-bold text-primary">All Categories in <b><?php echo e($collection->name); ?></b></h3>
        </div>
        <div class="col-lg-12">
            <div class="card shadow mb-4">
                <div class="table-responsive">
                    <table class="table card-body table-hover table-striped table-bordered">
                        <thead>
                            <tr class="text-primary">
                                <th>Name</th>
                                <th>Collection Name</th>
                                <th>Description</th>
                                <th>Image</th>
                                <th>Created At</th>
                            </tr>
                        </thead>
                        <tbody>
                           <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td>
                                    <a href="<?php echo e(route('admin.collections.products', $category->id)); ?>">
                                        <?php echo e($category->name); ?>

                                    </a>
                                </td>
                                <td>
                                    <a href="<?php echo e(route('admin_collections.show', $category->collection_id)); ?>">
                                        <?php echo e($category->collection_name); ?>

                                    </a>
                                </td>
                                <td style="word-wrap: break-word;width:350px"><?php echo e(substr($category->description, 0, 200)); ?>...</td>
                                <td>
                                    <img src="
                                    <?php if($category->image == null): ?>
                                        <?php echo e(asset('images/admin/undraw_posting_photo.svg')); ?>

                                    <?php else: ?>
                                        <?php echo e(asset($category->image)); ?>

                                    <?php endif; ?>
                                    " alt="Image" style="width:200px;height:200px">
                                </td>
                                <td><?php echo e($category->created_at->diffForHumans()); ?></td>
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
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/customer/www/ultimatecollectionscompany.com/public_html/test123/resources/views/admin/collections/show.blade.php ENDPATH**/ ?>