<div class="col-xl-9 col-lg-9 col-md-9 col-sm-6 col-12">
    <div class="row p-2">
        <div class="col-sm-4">
            <label for="category_name">Category Name</label>
            <select name="category_name"  wire:model="selectedCat"  id="category_name" class="form-control"  required>
                <option value="" selected>Select Category Name</option>
                <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <option value="<?php echo e($category->id); ?>"><?php echo e($category->name); ?></option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select> 
        </div>
        <div class="col-sm-4">
            <label for="subseries">Subseries Name</label>
            <select name="subseries_name" wire:model="selectedSeries" id="subseries_name" class="form-control" required>
                <option value="" selected>Select Subseries Name</option>
                <?php $__currentLoopData = $subseries; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sub): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <option value="<?php echo e($sub->id); ?>"><?php echo e($sub->name); ?></option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>
        </div>
        <div class="col-sm-4">
            <label for="theme">Theme Name</label>
            <select name="theme" id="theme" class="form-control" >
                <option value="" selected>Select Theme Name</option>
                <?php $__currentLoopData = $themes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $theme): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <option value="<?php echo e($theme->id); ?>"><?php echo e($theme->name); ?></option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>
        </div>
    </div>
    <div class="row p-2">
        <div class="col-sm-4">
            <label for="collection_name">Collection Name</label>
            <input type="text" class="form-control" name="collection_name"  value="<?php echo e($collection_name); ?>"  placeholder="Collection Name" required readonly>
        </div>
        <div class="col-sm-4">
            <label for="series">Series Name</label>
            <?php if($seriesFlag == 0): ?>
            <input type="text" class="form-control" name="series"  value="<?php echo e($myseries); ?>"  placeholder="Series Name" required readonly>
            <?php else: ?>
            <select name="series" id="series" class="form-control" wire:model="selectedMyseries">
                <option value="" selected>Select Series</option>
                <?php $__currentLoopData = $myseries123; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $s123): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($s123->name); ?>"><?php echo e($s123->name); ?></option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>
            <?php endif; ?>
        </div>
        <div class="col-sm-4">
            <label for="casting_name">Casting Name</label>
            <?php if($castingFlag == 0): ?>
            <select name="casting_name" id="casting_name" class="form-control" >
                <option value="" selected>Select Casting Name</option>
                <?php $__currentLoopData = $casting_name; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $casting123): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($casting123->casting_name); ?>"><?php echo e($casting123->casting_name); ?></option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select> 
            <?php else: ?>
            <select name="casting_name" id="casting_name" class="form-control" >
                <option value="" selected>Select Casting Name</option>
                <?php $__currentLoopData = $casting_name123; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $casting123): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($casting123->casting_name); ?>"><?php echo e($casting123->casting_name); ?></option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>
            <?php endif; ?>
        </div>
    </div>
</div>


<!--div class="col-xl-9 col-lg-9 col-md-9 col-sm-6 col-12">
    <div class="row">
        <div class="col-sm-4 p-2">
            <label for="category_name">Category Name</label>
            <select name="category_name"  wire:model="selectedCat"  id="category_name" class="form-control"  required>
                <option value="" selected>Select Category Name</option>
                <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($category->id); ?>"><?php echo e($category->name); ?></option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select> 
        </div>
        <div class="col-sm-4 p-2">
            <label for="subseries">Subseries Name</label>
            <select name="subseries_name" wire:model="selectedSeries" id="subseries_name" class="form-control" required>
                <option value="" selected>Select Subseries Name</option>
                <?php $__currentLoopData = $subseries; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $s1): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($s1->id); ?>"><?php echo e($s1->name); ?></option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>
        </div>
        <div class="col-sm-4 p-2">
            <label for="theme">Theme Name</label>
            <select name="theme" id="theme" class="form-control">
                <option value="" selected>Select Theme Name</option>
                <?php $__currentLoopData = $themes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $theme): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($theme->id); ?>"><?php echo e($theme->name); ?></option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>
        </div>
        <div class="col-sm-4 p-2">
            <label for="collection_name">Collection Name</label>
            <input type="text" class="form-control" name="collection_name"  value="<?php echo e($collection_name); ?>"  placeholder="Collection Name" required readonly>
        </div>
        <div class="col-sm-4 p-2">
            <label for="series">Series Name</label>
            <input type="text" class="form-control" name="series"  value="<?php echo e($myseries); ?>"  placeholder="Series Name" required readonly>
        </div>
        <div class="col-sm-4 p-2">
            <label for="casting_name">Casting Name</label>
            <select name="casting_name" id="casting_name" class="form-control" >
                <option value="" selected>Select Casting Name</option>
                <?php $__currentLoopData = $casting_name; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $casting123): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($casting123->casting_name); ?>"><?php echo e($casting123->casting_name); ?></option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>
        </div>
    </div>
</div--><?php /**PATH C:\xampp\htdocs\ucc\resources\views/livewire/admin-product-form.blade.php ENDPATH**/ ?>