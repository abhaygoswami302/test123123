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
<?php if(Session::get('contributor_products_edit')): ?>
<div class="alert alert-success animate__animated animate__flash">
<div class="row">
    <div class="col-sm-6"><?php echo e(Session::get('contributor_products_edit')); ?></div> 
    <div class="col-sm-6 text-right">
        <a class="btn btn-danger" href="<?php echo e(route('contributor_products.show', Session::get('product_id'))); ?>">View Product</a>
    </div>
</div>
</div>
<?php endif; ?>  
<?php /**PATH C:\xampp\htdocs\ucc\resources\views/contributor/partials/alert.blade.php ENDPATH**/ ?>