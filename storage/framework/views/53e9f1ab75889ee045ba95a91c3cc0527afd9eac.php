<div class="row">
    <div class="form-group col-lg-12">
        <select name="category_id" id="category_id" class="form-control" wire:model="selectedState">
            <option value="">Select Category</option>
            <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $s1): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <option value="<?php echo e($s1->id); ?>"><?php echo e($s1->name); ?></option>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </select>
    </div>
    <div class="form-group col-lg-12">
        <select name="subseries_id" id="subseries_id" class="form-control" wire:model="selectedMainline">
            <option value="" selected>Select Subseries</option>
            <?php $__currentLoopData = $subseries; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $s1): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <option value="<?php echo e($s1->id); ?>"><?php echo e($s1->name); ?></option>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </select>
    </div>
    <?php if($mainlineFlag == 1): ?>
    <div class="form-group col-lg-12">
        <select name="series_id" id="series_id" class="form-control">
            <option value="" selected>Select Series</option>
            <?php $__currentLoopData = $series123; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $s1): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <option value="<?php echo e($s1->id); ?>"><?php echo e($s1->name); ?></option>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </select>
    </div>
    <?php endif; ?>
</div><?php /**PATH C:\xampp\htdocs\ucc\resources\views/livewire/admin-casting-form.blade.php ENDPATH**/ ?>