<div class="row">
    <div class="col-sm-12 p-2">
        <label for="name">Product Name</label>
        <input type="text" class="form-control" name="name" wire:model="name" value=""
        required placeholder="Enter Product Name" />
        <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <span class="alert alert-danger" style="padding:2px;margin:5px"><?php echo e($message); ?></span> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
    </div>
    <div class="col-sm-12 p-2">
        <label for="model_name">Model Name</label>
        <input type="text" class="form-control" name="model_name" wire:model="model_name" placeholder="Enter Model Name"
         >
         <?php $__errorArgs = ['model_name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <span class="alert alert-danger" style="padding:2px;margin:5px"><?php echo e($message); ?></span> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
    </div>
</div><?php /**PATH /home/customer/www/ultimatecollectionscompany.com/public_html/test123/resources/views/livewire/admin-product-name-validation.blade.php ENDPATH**/ ?>