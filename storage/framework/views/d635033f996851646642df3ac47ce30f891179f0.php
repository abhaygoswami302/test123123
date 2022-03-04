

<?php $__env->startSection('content'); ?>
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12">
            <div class="row p-2">
                <div class="col-sm-12 text-center">
                    <h3 class="m-0 font-weight-bold text-primary">Clear Database OTP</h3>
                    <p>
                        <small>
                            Please enter otp we sent you on <b><?php echo e(Auth::user()->email); ?></b>
                        </small>
                    </p>
                </div>
            </div>
        </div>

        <div class="col-sm-3"></div>
        <div class="col-lg-6">
            <?php if(Session::get('message')): ?>
            <div class="row">
                <div class="col-sm-12">
                    <div class="alert alert-success animate__animated animate__flash">
                        <?php echo e(Session::get('message')); ?>

                    </div>
                </div>
            </div>
            <?php endif; ?>
            <?php if($message = Session::get('error')): ?>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="alert alert-danger">
                            <?php echo e($message); ?>

                        </div>
                    </div>
                </div>
            <?php endif; ?>
            <div class="card shadow mb-4 p-4">
                <form action="<?php echo e(route('clearProducts.store')); ?>" method="POST">
                    <?php echo csrf_field(); ?>
                    <label>Name</label>
                    <input type="text" placeholder="Name" name="name" value="<?php echo e(Auth::user()->name); ?>" class="form-control" required readonly></p>
                    <label>Email</label>
                    <input type="text" placeholder="Email" name="email" value="<?php echo e(Auth::user()->email); ?>" class="form-control" required readonly></p>
                    <label>Enter OTP</label>
                    <input type="text" placeholder="Enter OTP" name="otp" class="form-control" required></p>
                    <label>Enter Password</label>
                    <input type="password" placeholder="Enter Password" name="password" class="form-control" required>
                    <br>
                    <input type="submit" value="Clear Database" onclick="return confirm('Are You Sure You Want To Clear Products Database?');" class="btn btn-warning btn-block">
                </form>
            </div>
        </div>
        <div class="col-sm-3"></div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/customer/www/ultimatecollectionscompany.com/public_html/test123/resources/views/admin/clearProducts/index.blade.php ENDPATH**/ ?>