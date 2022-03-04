<div class="col-sm-3 col-3 text-right"  style="position:relative;">
   
    <div class="row">
        <div class="col-sm-6 col-6 ">
            <?php if($flag == 0): ?>
            <i class="far fa-bookmark p-2" style="cursor: pointer;color:#007bff" 
            wire:click="bookmark(<?php echo e($product); ?>)"  data-toggle="tooltip" 
            data-placement="top" title="Add To My Products Collection"></i>
            <?php else: ?>
            <i class="fas fa-check p-2" style="cursor: pointer;color:#007bff" 
            wire:click="bookmark(<?php echo e($product); ?>)"  data-toggle="tooltip" 
            data-placement="top" title="Remove From My Products Collection"></i>
            <?php endif; ?>
        </div>
        <div class="col-sm-6 col-6 py-1" >
           <a href="<?php echo e(route('userproduct.index')); ?>">
            <i class="fas fa-paper-plane"  style="cursor: pointer;color:#007bff" 
            data-toggle="tooltip" data-placement="top" 
            title="Go To My Products Collection"></i>
           </a>
        </div>
        <div class="col-sm-12 py-1">
            
        </div>
    </div>
    <div class="row pt-2" id="count_exceeded">
        <?php if($count_exceeded == 1): ?>
            <p class="alert alert-danger">
                <small>Limit Exceeded , switch to premium</small>
            </p>
        <?php endif; ?>
    </div>
</div><?php /**PATH C:\xampp\htdocs\ucc\resources\views/livewire/bookmark.blade.php ENDPATH**/ ?>