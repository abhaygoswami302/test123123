<div class="row">
    <div class="form-group col-lg-6">
        <label for="">Subseries Name</label>
        <input type="text" name="name" class="form-control" wire:model="name" placeholder="Enter Subseries" required>
    </div>
    <div class="form-group col-lg-6">
        <label for="">Category</label>
        <select name="category_id" id="category_id" required class="form-control" wire:model="selectedState">
            <option value="">Select Category</option>
            <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <option value="<?php echo e($category->id); ?>"><?php echo e($category->name); ?></option>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </select>
    </div>
    <div class="form-group col-lg-6">
        <label for="">Series</label>
        <input type="text" name="series_name" value="<?php echo e($series <> null ? $series : ''); ?>" class="form-control" required placeholder="Enter Series">
    </div>
    <div class="form-group col-lg-6">
        <label for="">Collection Name</label>
        <input type="text" name="collection_name" value="<?php echo e($collections <> null ? $collections : ''); ?>" class="form-control" readonly required placeholder="Enter Collection">
    </div>
</div><?php /**PATH C:\xampp\htdocs\ucc\resources\views/livewire/admin-subseries.blade.php ENDPATH**/ ?>