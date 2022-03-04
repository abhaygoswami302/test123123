<?php if(Session::get('message')): ?>
<div class="row">
    <div class="col-sm-12">
        <div class="alert alert-success animate__animated animate__flash">
            <?php echo e(Session::get('message')); ?>

        </div>
    </div>
</div>
<?php endif; ?>
<!--
<?php if($message = Session::get('error')): ?>
    <div class="row">
        <div class="col-sm-12">
            <div class="alert alert-danger">
                <?php echo e($message); ?>

            </div>
        </div>
    </div>
<?php endif; ?>
-->
<?php if(session('status')): ?>
<div class="alert alert-success" role="alert">
    <?php echo e(session('status')); ?>

</div>
<?php endif; ?>

<!--
<?php if($errors->any()): ?>
    <div class="alert alert-danger">
        <ul>
            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li><?php echo e($error); ?></li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
    </div>
<?php endif; ?>
-->

<?php if(Session::get('productform')): ?>
<div class="alert alert-success animate__animated animate__slideInRight">
    <?php echo e(Session::get('productform')); ?>

</div>
<?php endif; ?>  
<?php if(Session::get('failures')): ?>
   <div class="alert alert-danger" role="alert">
      <strong>Errors:</strong>
      <ul>
         <?php $__currentLoopData = Session::get('failures'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $failure): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php $__currentLoopData = $failure->errors(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li><?php echo e($error); ?></li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
         <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </ul>
   </div>
<?php endif; ?>

<?php if(count($errors->getMessages()) > 0): ?>
<div class="alert alert-danger alert-dismissible" role="alert">
    <strong>Validation Errors:</strong>
    <ul>
        <?php $__currentLoopData = $errors->getMessages(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $errorMessages): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php $__currentLoopData = $errorMessages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $errorMessage): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li>
                    <?php echo e($errorMessage); ?>

                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                </li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul>
</div><?php endif; ?>
<?php if(Session::get('tempDelete')): ?>
<div class="alert alert-success animate__animated animate__slideInRight">
    <?php echo e(Session::get('tempDelete')); ?>

</div>
<?php endif; ?>   
<?php if(Session::get('csvmessage')): ?>
<div class="alert alert-success animate__animated animate__flash">
<div class="row">
    <div class="col-sm-6"><?php echo e(Session::get('csvmessage')); ?></div>
</div>
</div>
<?php endif; ?> 
<!--
<?php if(Session::get('message')): ?>
<div class="alert alert-success animate__animated animate__flash">
<div class="row">
    <div class="col-sm-6"><?php echo e(Session::get('message')); ?></div>
</div>
</div>
<?php endif; ?>
--> 
<?php if(Session::get('tempEdit')): ?>
<div class="alert alert-success animate__animated animate__flash">
<div class="row">
    <div class="col-sm-6"><?php echo e(Session::get('tempEdit')); ?></div>
</div>
</div>
<?php endif; ?>
<?php if(Session::get('error')): ?>
<div class="alert alert-danger animate__animated animate__flash">
<div class="row">
    <div class="col-sm-12"><?php echo e(Session::get('error')); ?></div>
</div>
</div>
<?php endif; ?>
<?php if(Session::get('admin.productsLoaded')): ?>
<div class="alert alert-success animate__animated animate__flash">
<div class="row">
    <div class="col-sm-6"><?php echo e(Session::get('admin.productsLoaded')); ?></div> 
    <a href="<?php echo e(route('admin_products.index')); ?>">View Products</a>
</div>
</div>
<?php endif; ?>  
<?php if(Session::get('admin.legoproductsLoaded')): ?>
<div class="alert alert-success animate__animated animate__flash">
<div class="row">
    <div class="col-sm-6"><?php echo e(Session::get('admin.legoproductsLoaded')); ?></div> 
    <a href="<?php echo e(route('lego_minifigures_form.index')); ?>">View Products</a>
</div>
</div>
<?php endif; ?>  
<?php if(Session::get('admin.hottoysproductsLoaded')): ?>
<div class="alert alert-success animate__animated animate__flash">
<div class="row">
    <div class="col-sm-6"><?php echo e(Session::get('admin.hottoysproductsLoaded')); ?></div> 
    <a href="<?php echo e(route('hotToys.index')); ?>">View Products</a>
</div>
</div>
<?php endif; ?>  
<?php if(Session::get('csverror')): ?>
<div class="alert alert-danger animate__animated animate__flash">
    <div class="row">
        <div class="col-sm-12"><?php echo e(Session::get('csverror')); ?>

            <p>ERROR IN THIS ROW : ON LINE (<?php echo e(Session::get('line')); ?>)</p>
            <p>
            <?php $__currentLoopData = Session::get('row'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <u><?php echo e($item); ?></u> |
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </p>
        </div>
    </div>
</div>    
<?php endif; ?>

<?php if(Session::get('csverror123')): ?>
<div class="alert alert-danger animate__animated animate__flash">
    <div class="row">
        <div class="col-sm-12"><?php echo e(Session::get('csverror')); ?>

            <p>Toy Hash Already Exists:</p>
            <p>ERROR IN THIS ROW:</p>
            <p>
            <?php $__currentLoopData = Session::get('row'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <p>
                Product Name : <u><?php echo e($item->name); ?></u> |
                Category Name : <u><?php echo e($item->category_name); ?></u> |
                Series Name : <u><?php echo e($item->series); ?></u> |
                <b>Toy Hash : <u><?php echo e($item->toy_hash); ?></u> </b>|        
             </p>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </p>
        </div>
    </div>
</div>    
<?php endif; ?>

<?php if(Session::get('admincsverror')): ?>
<div class="alert alert-danger animate__animated animate__flash">
    <div class="row">
        <div class="col-sm-12"><?php echo e(Session::get('admincsverror')); ?>

            <p>ERROR IN THIS PRODUCT : (<?php echo e(Session::get('name')); ?>)</p>
            <p>
            <?php $__currentLoopData = Session::get('rows'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <u><?php echo e($item); ?></u> |
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </p>
        </div>
    </div>
</div>    
<?php endif; ?>

<?php if(Session::get('toy_hash_error')): ?>
<div class="alert alert-danger animate__animated animate__flash">
    <div class="row">
        <div class="col-sm-12"><b><?php echo e(Session::get('toy_hash_error')); ?></b>
            <p>ERROR IN THIS PRODUCT </p>
            <p>
               Product Name : <u><?php echo e(Session::get('rows')->name); ?></u> |
               Category Name : <u><?php echo e(Session::get('rows')->category_name); ?></u> |
               Series Name : <u><?php echo e(Session::get('rows')->series); ?></u> |
               <b>Toy Hash : <u><?php echo e(Session::get('rows')->toy_hash); ?></u> </b>|        
            </p>
        </div>
    </div>
</div>    
<?php endif; ?>

<?php if(Session::get('admin_products_edit')): ?>
<div class="alert alert-success animate__animated animate__flash">
<div class="row">
    <div class="col-sm-6"><?php echo e(Session::get('admin_products_edit')); ?></div> 
    <div class="col-sm-6 text-right">
        <a class="btn btn-danger" href="<?php echo e(route('admin_products.show', Session::get('product_id'))); ?>">View Product</a>
    </div>
</div>
</div>
<?php endif; ?>  


<?php if(Session::get('user_created')): ?>
<div class="alert alert-success animate__animated animate__slideInRight">
    <?php echo e(Session::get('user_created')); ?>

</div>
<?php endif; ?> 

<?php if(Session::get('lego_minifigures_imported')): ?>
<div class="alert alert-success animate__animated animate__slideInRight">
    <?php echo e(Session::get('lego_minifigures_imported')); ?> 
</div>
<?php endif; ?> 

<?php if(Session::get('hot_toys_imported')): ?>
<div class="alert alert-success animate__animated animate__slideInRight">
    <?php echo e(Session::get('hot_toys_imported')); ?>

</div>
<?php endif; ?> 

<?php if(Session::get('limit_exceeded_lego_mf')): ?>
<div class="alert alert-danger animate__animated animate__slideInRight">
    <?php echo e(Session::get('limit_exceeded_lego_mf')); ?>

</div>
<?php endif; ?> 

<?php if(Session::get('user_deleted')): ?>
<div class="alert alert-success animate__animated animate__slideInRight">
    <?php echo e(Session::get('user_deleted')); ?>

</div>
<?php endif; ?> 


<?php /**PATH /home/customer/www/ultimatecollectionscompany.com/public_html/test123/resources/views/admin/partials/alert.blade.php ENDPATH**/ ?>