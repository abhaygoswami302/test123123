<div class="Header_Bottom_Rt">
    <div class="search" style="overflow: visible !important;">
        <span class="SrchHvr">
            <input type="text" name="search" wire:model="searchTerm"  class="SrchHdr form-control" placeholder="Search Products Here" />
        
            <?php if(count($myproducts) > 0): ?>

            <!-- ul style="margin-top:10%;margin-left:4%;position:absolute; z-index:999; width:400px; list-style-type:none; background:white; box-shadow:#8ca5f0 0px 14px 28px, rgba(0, 0, 0, 0.22) 0px 5px 5px;" -->
                <ul>
                <li style="background:white;" class="p-2">
                    <p style="padding: 2%" class="alert alert-info"><b><?php echo e(count($myproducts)); ?> Product Results</b></p>
                </li>

                <?php $__currentLoopData = $myproducts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li style="">
                    <a href="<?php echo e(route('product.show', $product->id)); ?>" style="color: black;text-decoration:none;">
                        <div class="row" style="background: white;padding:0px;margin:0px">
                            <div class="col-sm-8">
                                <b><?php echo e($product->name); ?></b><br>
                                <small><?php echo e($product->series); ?> | <?php echo e($product->collection_name); ?></small> <br>
                                <small><?php echo e($product->theme); ?> | <?php echo e($product->casting_name); ?></small> 
                            </div>
                            <div class="col-sm-4">
                                <?php echo e($product->created_at->diffForHumans()); ?>

                            </div>
                            <div class="col-sm-12">
                                <?php echo e(substr($product->description, 0, 100)); ?>

                                <hr>
                            </div>
                        </div> 
                    </a>
                </li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
            <?php endif; ?>
        </span>
    </div>
</div>

<?php /**PATH /home/customer/www/ultimatecollectionscompany.com/public_html/test123/resources/views/livewire/front-search.blade.php ENDPATH**/ ?>