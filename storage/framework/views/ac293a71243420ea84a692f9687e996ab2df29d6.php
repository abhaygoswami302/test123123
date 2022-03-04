

<?php $__env->startSection('content'); ?>
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
       <div class="div">
        <a href="<?php echo e(route('editor_products.create')); ?>" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
            <i class="fas fa-plus-circle fa-sm text-white-50"></i> Add New Product 
        </a>
       </div>
    </div>

    <!-- Content Row -->
    <div class="row">

        <div class="col-lg-6 mb-4">
            <!-- Illustrations -->
            <div class="card shadow mb-4 my-card">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">View All Products</h6>
                </div>
                <div class="card-body">
                    <div class="text-center">
                        <a href="<?php echo e(route('editor_products.index')); ?>">
                            <img class="img-fluid px-3 px-sm-4 mt-3 mb-4" style="width: 25rem;"
                            src="<?php echo e(asset('images/admin/undraw_posting_photo.svg')); ?>" alt="Image">
                        </a>
                    </div>
                    <!--p>Add some quality, svg illustrations to your project courtesy of <a
                            target="_blank" rel="nofollow" href="https://undraw.co/">unDraw</a>, a
                        constantly updated collection of beautiful svg images that you can 
                        completely free and without attribution!</p-->
                    <a rel="nofollow" href="<?php echo e(route('editor_products.index')); ?>">Browse All Products &rarr;</a>
                </div>
            </div>
        </div>

        <div class="col-lg-6 mb-4">

            <!-- Illustrations -->
            <div class="card shadow mb-4 my-card">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Add New Product</h6>
                </div>
                <div class="card-body">
                    <div class="text-center">
                        <a href="<?php echo e(route('editor_products.create')); ?>">
                            <img class="img-fluid px-3 px-sm-4 mt-3 mb-4" style="width: 25rem;"
                            src="<?php echo e(asset('images/admin/undraw_posting_photo.svg')); ?>" alt="Image">
                        </a>
                    </div>
                    <!--p>Add some quality, svg illustrations to your project courtesy of <a
                            target="_blank" rel="nofollow" href="https://undraw.co/">unDraw</a>, a
                        constantly updated collection of beautiful svg images that you can 
                        completely free and without attribution!</p-->
                    <a rel="nofollow" href="<?php echo e(route('editor_products.create')); ?>">Add New Product &rarr;</a>
                </div>
            </div>
        </div>

    </div>

</div>
<!-- /.container-fluid -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.editor', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\ucc\resources\views/editor/dashboard.blade.php ENDPATH**/ ?>