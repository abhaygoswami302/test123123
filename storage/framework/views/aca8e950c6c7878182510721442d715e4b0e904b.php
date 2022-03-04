
<?php if(Session::get('message')): ?>
<div class="row">
    <div class="col-sm-12">
        <div class="alert alert-success">
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
<?php if(session('status')): ?>
<div class="alert alert-success" role="alert">
    <?php echo e(session('status')); ?>

</div>
<?php endif; ?>

<?php if($errors->any()): ?>
    <div class="alert alert-danger">
        <ul>
            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li><?php echo e($error); ?></li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
    </div>
<?php endif; ?>

<?php if(session('limit_exceeded')): ?>
<div class="alert alert-danger" role="alert">
    <?php echo e(session('limit_exceeded')); ?>

</div>
<?php endif; ?>
<?php /**PATH /home/customer/www/ultimatecollectionscompany.com/public_html/test123/resources/views/partials/alert.blade.php ENDPATH**/ ?>