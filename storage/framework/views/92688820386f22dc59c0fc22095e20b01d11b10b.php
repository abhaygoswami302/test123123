<div class="col-xl-12">
    <div class="row">
    <div class="col-sm-12">
        <?php if(Session::get('productform')): ?>
            <div class="alert alert-success animate__animated animate__slideInRight">
                <?php echo e(Session::get('productform')); ?>

            </div>
        <?php endif; ?> 
        <?php if(Session::get('csvmessage')): ?>
        <div class="alert alert-success animate__animated animate__slideInRight">
            <div class="row">
                <div class="col-sm-6"><?php echo e(Session::get('csvmessage')); ?></div>
                <div class="col-sm-6 text-right"><a href="<?php echo e(route('tempIndex')); ?>" class="btn btn-sm btn-danger">View CSV Products</a></div>
            </div>
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
    </div>    
    </div> 
    <form action="<?php echo e(route('userproduct.store')); ?>" method="POST" enctype="multipart/form-data">
    <?php echo csrf_field(); ?>
     

        <div class="row p-2">
            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-12">
               <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('product-name-validation', [])->html();
} elseif ($_instance->childHasBeenRendered('bey2J2F')) {
    $componentId = $_instance->getRenderedChildComponentId('bey2J2F');
    $componentTag = $_instance->getRenderedChildComponentTagName('bey2J2F');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('bey2J2F');
} else {
    $response = \Livewire\Livewire::mount('product-name-validation', []);
    $html = $response->html();
    $_instance->logRenderedChild('bey2J2F', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
            </div>
           <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('product-form', [])->html();
} elseif ($_instance->childHasBeenRendered('htxpAB3')) {
    $componentId = $_instance->getRenderedChildComponentId('htxpAB3');
    $componentTag = $_instance->getRenderedChildComponentTagName('htxpAB3');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('htxpAB3');
} else {
    $response = \Livewire\Livewire::mount('product-form', []);
    $html = $response->html();
    $_instance->logRenderedChild('htxpAB3', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
        </div>

        <div class="row p-2">
            <div class="col-sm-3">
                <label for="">Year</label>
                <input type="text" class="form-control" name="year" wire:model="year" placeholder="Enter Year" required>
                <?php $__errorArgs = ['year'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <span class="alert alert-danger" style="padding:2px;margin:5px"><?php echo e($message); ?></span> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>
            <div class="col-sm-3">
                <label for="">Colour</label>
                <input type="text" class="form-control" name="colour" wire:model="colour" placeholder="Enter Colour">
                <?php $__errorArgs = ['colour'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <span class="alert alert-danger" style="padding:2px;margin:5px"><?php echo e($message); ?></span> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>
            <div class="col-sm-3">
                <label for="">Tampo</label>
                <input type="text" class="form-control" name="tampo" wire:model="tampo" placeholder="Enter Tampo" >
                <?php $__errorArgs = ['tampo'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <span class="alert alert-danger" style="padding:2px;margin:5px"><?php echo e($message); ?></span> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>
            <div class="col-sm-3">
                <label for="">Country</label>
                <input type="text" class="form-control" wire:model="country" name="country" placeholder="Enter Country" >
                <?php $__errorArgs = ['country'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <span class="alert alert-danger" style="padding:2px;margin:5px"><?php echo e($message); ?></span> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>
        </div>
        <div class="row p-2">
            <div class="col-sm-3">
                <label for="">Base Colour</label>
                <input type="text" class="form-control" name="base_colour" wire:model="base_colour" placeholder="Enter Base Colour" >
                <?php $__errorArgs = ['base_colour'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <span class="alert alert-danger" style="padding:2px;margin:5px"><?php echo e($message); ?></span> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>
            <div class="col-sm-3">
                <label for="">Type</label>
                <input type="text" class="form-control" name="type" placeholder="Enter Type" wire:model="type">
                <?php $__errorArgs = ['type'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <span class="alert alert-danger" style="padding:2px;margin:5px"><?php echo e($message); ?></span> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>
            <div class="col-sm-3">
                <label for="">Window Color</label>
                <input type="text" class="form-control" name="window_colour" wire:model="window_colour" placeholder="Enter Window Color" >
                <?php $__errorArgs = ['window_colour'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <span class="alert alert-danger" style="padding:2px;margin:5px"><?php echo e($message); ?></span> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>
            <div class="col-sm-3">
                <label for="">Interior Colour</label>
                <input type="text" class="form-control" name="interior_colour" wire:model="interior_colour" placeholder="Enter Interior Colour" >
                <?php $__errorArgs = ['interior_colour'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <span class="alert alert-danger" style="padding:2px;margin:5px"><?php echo e($message); ?></span> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>
        </div>

        <div class="row p-2">
            <div class="col-sm-3">
                <label for="">Toy# </label>
                <input type="text" class="form-control" wire:model="toy_hash" name="toy_hash" placeholder="Enter Toy#" >
                <?php $__errorArgs = ['toy_hash'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <span class="alert alert-danger" style="padding:2px;margin:5px"><?php echo e($message); ?></span> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>
            <div class="col-sm-3">
                <label for="">Col#</label>
                <input type="text" class="form-control" wire:model="col_hash" name="col_hash" placeholder="Enter Col#" >
                <?php $__errorArgs = ['col_hash'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <span class="alert alert-danger" style="padding:2px;margin:5px"><?php echo e($message); ?></span> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>
            <div class="col-sm-3">
                <label for="">Series# </label>
                <input type="text" class="form-control" wire:model="series_hash" name="series_hash" placeholder="Enter Series#" >
                <?php $__errorArgs = ['series_hash'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <span class="alert alert-danger" style="padding:2px;margin:5px"><?php echo e($message); ?></span> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>
            <div class="col-sm-3">
                <label for="">Class</label>
                <select name="class" wire:model="class"  id="class"  class="form-control" required>
                    <option value="" selected>Select Class</option>
                    <option value="Mainline">Mainline</option>
                    <option value="Premium">Premium</option>
                </select>
                <?php $__errorArgs = ['class'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <span class="alert alert-danger" style="padding:2px;margin:5px"><?php echo e($message); ?></span> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>
        </div>

        <div class="row p-2">
            <div class="col-sm-3">
                <label for="">Wheel Type</label>
                <input type="text" class="form-control" name="wheel_type" wire:model="wheel_type" placeholder="Enter Wheel Type" >
                <?php $__errorArgs = ['wheel_type'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <span class="alert alert-danger" style="padding:2px;margin:5px"><?php echo e($message); ?></span> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>
            <div class="col-sm-3">
                <label for="">Visibility</label>
                <select name="visibility" wire:model="visibility"  id="visibility"  class="form-control" required>
                    <option value="" selected>Select Visibility</option>
                    <option value="1">Visible</option>
                    <option value="0">Hidden</option>
                </select>
                <?php $__errorArgs = ['visibility'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <span class="alert alert-danger" style="padding:0px;margin:0px"><?php echo e($message); ?></span> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>
            <div class="col-sm-6 pt-2">
                <textarea name="notes" placeholder="Enter Note" id="" cols="30" rows="2" class="form-control"></textarea>
            </div>
        </div>

        <div class="row p-2">
            <div class="col-sm-3">
                <label for="">Product Image 1</label>
                <input type="file" name="image1" id="image1" wire:model="image1">
                <?php $__errorArgs = ['image1'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <span class="alert alert-danger" style="padding:2px;margin:5px"><?php echo e($message); ?></span> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>
            <div class="col-sm-3">
                <label for="">Product Image 2</label>
                <input type="file" name="image2" id="image2" wire:model="image2">
                <?php $__errorArgs = ['image2'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <span class="alert alert-danger" style="padding:2px;margin:5px"><?php echo e($message); ?></span> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>
            <div class="col-sm-3">
                <label for="">Product Image 3</label>
                <input type="file" name="image3" id="image3" wire:model="image3">
                <?php $__errorArgs = ['image3'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <span class="alert alert-danger" style="padding:2px;margin:5px"><?php echo e($message); ?></span> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>
            <div class="col-sm-3">
                <label for="">Product Image 4</label>
                <input type="file" name="image4" id="image4" wire:model="image4">
                <?php $__errorArgs = ['image4'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <span class="alert alert-danger" style="padding:2px;margin:5px"><?php echo e($message); ?></span> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>
        </div>

        <div class="row p-2">
            <div class="col-sm-3">
                <label for="">Product Image 5</label>
                <input type="file" name="image5" id="image5" wire:model="image5">
                <?php $__errorArgs = ['image5'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <span class="alert alert-danger" style="padding:2px;margin:5px"><?php echo e($message); ?></span> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>
            <div class="col-sm-3 offset-6 pt-2">
                <div class="VwBtn text-right">
                    <button class="glow-on-hover btn btn-1 text-white mb-2" 
                    type="submit" >Add Product</button>
                </div>
            </div>
        </div>

        <div class="row p-2">
            <!--div class="col-sm-3">
                <a href="<?php echo e(route('userproduct.index')); ?>">
                    <div class="VwBtn text-left">  
                        <button class="glow-on-hover btn btn-1 text-white mb-2">My Products</button>
                    </div>
                </a>
            </div-->
          
        </div>
        <div class="row p-2"></div>
    </form>
</div>
<?php /**PATH /home/customer/www/ultimatecollectionscompany.com/public_html/test123/resources/views/livewire/product-validation-form.blade.php ENDPATH**/ ?>