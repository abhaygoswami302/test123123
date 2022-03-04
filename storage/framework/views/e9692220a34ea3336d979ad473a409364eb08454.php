<div class="col-sm-12">
    <?php if($count_exceeded == 1): ?>
        <div class="alert alert-danger flash animated">
            Limit Exceeded , Switch To Premium
        </div>
    <?php endif; ?>
    <?php if($toggle == 1): ?>
        <div class="alert alert-success flash animated ">
            Added To My Products Collection 
            <a href="<?php echo e(route('userproduct.index')); ?>"><small>View My Products Collection</small></a>
        </div>
    <?php endif; ?>
    <?php if($toggle == 0): ?>
    <div class="alert alert-danger flash animated ">
        Removed From My Products Collection
    </div>
    <?php endif; ?>
    <div class="row">
        <div class="col-sm-12 text-center">
            <div class="">
                <div class="placement">
                    <div class="heart"></div>
                  </div>
                <?php if($flag == 0): ?>
                <button class="btn  py-2 " style="border: 1px solid rgb(180, 180, 180);color:rgb(97, 97, 97)"  wire:click="save(<?php echo e($product); ?>)" 
                type="button"> Add To Collection </button>
                <!--i class="far fa-2x fa-heart"style="cursor:pointer;color:rgb(251, 40, 54);"></i-->
                <?php else: ?>
                <!--i class="fas fa-2x fa-heart" wire:click="save(<?php echo e($product); ?>)" style="cursor:pointer;color:rgb(251, 40, 54);"></i-->
                <button class="btn  py-2 " style="background:lightgreen;border: 1px solid rgb(180, 180, 180);color:rgb(63, 62, 62)"  wire:click="save(<?php echo e($product); ?>)" 
                type="button"> Added To My Products Collection </button>
                <?php endif; ?>
            </div>
        </div>
        <div class="col-sm-12">
            <div class="row">
                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                    <a href="<?php echo e(route('marketplace.index')); ?>">
                    <button class="btn btn-secondary py-2 text-white" type="button">
                        <i class="fab fa-shopping-bag"></i> Search Marketplace
                    </button>
                    </a>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                    <button class="btn btn-secondary py-2 text-white" type="button" data-toggle="modal" data-target="#exampleModal"> 
                        Feedback 
                    </button>
                </div>
                <!--a href="#" >
                    <div class="frame">
                    <button class="custom-btn btn-9"><div class="dot"></div></button>
                    </div>
                </a-->
            </div>
        </div>
    </div>
</div>
<?php /**PATH /home/customer/www/ultimatecollectionscompany.com/public_html/test123/resources/views/livewire/liked.blade.php ENDPATH**/ ?>