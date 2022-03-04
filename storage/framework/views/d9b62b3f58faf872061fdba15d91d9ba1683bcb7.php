

<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row bg-container">
        <div class="col-lg-12 text-center p-4">
            <h3 class="m-0 font-weight-bold text-primary">Edit <b><?php echo e($product->name); ?></b> Product</h3>
        </div>

        <div class="col-xl-12"><?php echo $__env->make('contributor.partials.alert', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?></div>

        <div class="col-xl-12 card shadow">   
            <div class="card-header text-primary">
                <div class="row">
                    <div class="col-sm-6">Edit Product</div>
                    <div class="col-sm-6 text-right">
                        <a href="<?php echo e(route('contributor_products.show', $product->id)); ?>" class="btn btn-primary btn-sm">View Product</a>
                        <a href="<?php echo e(route('contributor_products.index')); ?>" class="btn btn-primary btn-sm">View All Hot Wheels Products</a>
                    </div>
                </div>
            </div>
            <div class="card-body">
            <form action="<?php echo e(route('contributor_products.update', $product->id)); ?>" method="POST" enctype="multipart/form-data">
                <?php echo csrf_field(); ?>
                <?php echo method_field('PATCH'); ?>
                <div class="row p-2">
                    <div class="col-sm-3">
                        <label for="name">Product Name</label>
                        <input type="text" class="form-control" name="name" readonly value="<?php echo e($product->name); ?>"
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
                    <div class="col-sm-3">
                        <label for="category_name">Category Name</label>
                        <input type="text" name="category_name" class="form-control" readonly value="<?php echo e($product->category_name); ?>">
                    </div>
                    <div class="col-sm-3">
                        <label for="subseries">Subseries Name</label>
                        <input type="text" name="subseries_name" class="form-control" readonly value="<?php echo e($product->subseries_name); ?>">
                    </div>
                    <div class="col-sm-3">
                        <label for="theme">Theme Name</label>
                        <input type="text" name="theme" class="form-control" readonly value="<?php echo e($product->theme); ?>">
                    </div>
                </div>
                <div class="row p-2">
                    <div class="col-sm-3">
                        <label for="model_name">Model Name</label>
                        <input type="text" class="form-control" name="model_name" readonly placeholder="Enter Model Name" value="<?php echo e($product->model_name); ?>">
                        <?php $__errorArgs = ['model_name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <span class="alert alert-danger" style="padding:2px;margin:5px"><?php echo e($message); ?></span> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>
                    <div class="col-sm-3">
                        <label for="collection_name">Collection Name</label>
                        <input type="text" class="form-control" name="collection_name" readonly value="<?php echo e($product->collection_name); ?>"  placeholder="Collection Name" required readonly>
                    </div>
                    <div class="col-sm-3">
                        <label for="series">Series Name</label>
                        <input type="text" class="form-control" name="series" readonly value="<?php echo e($product->series); ?>"  placeholder="Series Name" required readonly>
                    </div>
                    <div class="col-sm-3">
                        <label for="casting_name">Casting Name</label>
                        <input type="text" class="form-control" name="casting_name" readonly value="<?php echo e($product->casting_name); ?>" placeholder="Casting Name" required readonly>
                    </div>
                </div>
                <div class="row p-2">
                        <div class="col-sm-3">
                            <label for="">Year</label>
                            <input type="text" class="form-control" name="year" readonly wire:model="year" placeholder="Enter Year" value="<?php echo e($product->year); ?>" required>
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
                            <input type="text" class="form-control" name="colour" readonly wire:model="colour" placeholder="Enter Colour" value="<?php echo e($product->colour); ?>" >
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
                            <input type="text" class="form-control" name="tampo" readonly wire:model="tampo" placeholder="Enter Tampo" value="<?php echo e($product->tampo); ?>" >
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
                            <input type="text" class="form-control" wire:model="country" readonly name="country" placeholder="Enter Country" value="<?php echo e($product->country); ?>">
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
                            <input type="text" class="form-control" name="base_colour" readonly wire:model="base_colour" placeholder="Enter Base Colour" value="<?php echo e($product->base_colour); ?>" >
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
                            <input type="text" class="form-control" name="type" readonly placeholder="Enter Type" wire:model="type" value="<?php echo e($product->type); ?>" >
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
                            <input type="text" class="form-control" name="window_colour" readonly wire:model="window_colour" placeholder="Enter Window Color" value="<?php echo e($product->window_colour); ?>" >
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
                            <input type="text" class="form-control" name="interior_colour" readonly wire:model="interior_colour" placeholder="Enter Interior Colour" value="<?php echo e($product->interior_colour); ?>" >
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
                            <input type="text" class="form-control" wire:model="toy_hash" readonly required  name="toy_hash" placeholder="Enter Toy#" value="<?php echo e($product->toy_hash); ?>" >
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
                            <input type="text" class="form-control" wire:model="col_hash" readonly name="col_hash" placeholder="Enter Col#" value="<?php echo e($product->col_hash); ?>">
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
                            <input type="text" class="form-control" wire:model="series_hash" readonly name="series_hash" placeholder="Enter Series#" value="<?php echo e($product->series_hash); ?>">
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
                            <select name="class" wire:model="class"  id="class" readonly class="form-control" required>
                                <option value="" selected>Select Class</option>
                                <option value="Mainline" <?php echo e($product->class == 'Mainline' ? 'selected' : ''); ?>>Mainline</option>
                                <option value="Premium" <?php echo e($product->class == 'Premium' ? 'selected' : ''); ?>>Premium</option>
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
                            <input type="text" class="form-control" name="wheel_type" readonly wire:model="wheel_type" placeholder="Enter Wheel Type" value="<?php echo e($product->wheel_type); ?>" >
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
                            <select name="visibility" wire:model="visibility"  id="visibility" readonly  class="form-control" required>
                                <option value="" selected>Select Visibility</option>
                                <option value="1" <?php echo e($product->visibility == '1' ? 'selected' : ''); ?>>Visible</option>
                                <option value="0" <?php echo e($product->visibility == '0' ? 'selected' : ''); ?>>Hidden</option>
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
                            <textarea name="notes" placeholder="Enter Note" id="" readonly cols="30" rows="2" class="form-control"><?php echo e($product->notes); ?></textarea>
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
                                <button class="btn btn-primary text-white mb-2" 
                                type="submit" >Edit Product</button>
                            </div>
                        </div>
                    </div>
            
                    <div class="row p-2"></div>
                </form>
            </div>
        </div>

        </div>

    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.contributor', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\ucc\resources\views/contributor/products/edit.blade.php ENDPATH**/ ?>