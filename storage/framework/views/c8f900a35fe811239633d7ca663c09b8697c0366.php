

<?php $__env->startSection('content'); ?>
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12 text-center p-4">
            <h3 class="m-0 font-weight-bold text-primary">Feedback For <b><?php echo e($feedback->product_name); ?></b> </h3>
        </div>
        <div class="col-lg-12">
            <div class="card shadow mb-4 p-4">
                <a href="<?php echo e(route('admin.user.show', $feedback->user_id)); ?>">
                    <h4 class="text-primary">By : <?php echo e($feedback->username); ?> <br></h4>
                </a>
                <div class="row">
                    <div class="col-sm-6">
                       <a href="<?php echo e(route('admin_products.show', $feedback->product_id)); ?>">
                        <h5 class="text-primary">For Product Name : <?php echo e($feedback->product_name); ?> <br></h5>
                       </a>
                    </div>
                    <div class="col-sm-6 text-right">
                        <?php echo e($feedback->created_at->diffForHumans()); ?>

                    </div>
                </div>
                <?php if($feedback->name <> null): ?>
                   <h5 class="alert alert-success">
                    Name Feedback : <?php echo e($feedback->name); ?> </h5>
                <?php endif; ?>
                <?php if($feedback->series <> null): ?>
                    <h5 class="alert alert-success">Series Feedback : <?php echo e($feedback->series); ?></h5>
                <?php endif; ?>
                <?php if($feedback->category_name <> null): ?>
                    <h5 class="alert alert-success">Category Name Feedback :  <?php echo e($feedback->category_name); ?></h5>
                <?php endif; ?>  
                <?php if($feedback->collection_name <> null): ?>
                    <h5 class="alert alert-success">Collection Name Feedback :<?php echo e($feedback->collection_name); ?></h5>
                <?php endif; ?> 
                <?php if($feedback->subseries_name <> null): ?>
                    <h5 class="alert alert-success">Subseries Name Feedback :<?php echo e($feedback->subseries_name); ?></h5>
                <?php endif; ?>
                <?php if($feedback->theme <> null): ?>
                <h5 class="alert alert-success">Theme Feedback :<?php echo e($feedback->theme); ?></h5>
                <?php endif; ?>
                <?php if($feedback->model_name <> null): ?>
                <h5 class="alert alert-success">Model Name Feedback :<?php echo e($feedback->model_name); ?></h5>
                <?php endif; ?>
                <?php if($feedback->casting_name <> null): ?>
                <h5 class="alert alert-success">Casting Name Feedback :<?php echo e($feedback->casting_name); ?></h5>
                <?php endif; ?>             
                <?php if($feedback->year <> null): ?>
                <h5 class="alert alert-success">Year Feedback :<?php echo e($feedback->year); ?></h5>
                <?php endif; ?>
                <?php if($feedback->colour <> null): ?>
                <h5 class="alert alert-success">Colour Feedback :<?php echo e($feedback->colour); ?></h5>
                <?php endif; ?>
                <?php if($feedback->tampo <> null): ?>
                <h5 class="alert alert-success">Tampo Feedback :<?php echo e($feedback->tampo); ?></h5>
                <?php endif; ?>
                <?php if($feedback->base_colour <> null): ?>
                <h5 class="alert alert-success">Base Colour Feedback :<?php echo e($feedback->base_colour); ?></h5>
                <?php endif; ?>
                <?php if($feedback->type <> null): ?>
                <h5 class="alert alert-success">Type Feedback :<?php echo e($feedback->type); ?></h5>
                <?php endif; ?>
                <?php if($feedback->window_colour <> null): ?>
                <h5 class="alert alert-success">Window Colour Feedback :<?php echo e($feedback->window_colour); ?></h5>
                <?php endif; ?>
                <?php if($feedback->interior_colour <> null): ?>
                <h5 class="alert alert-success">Interior Colour Feedback :<?php echo e($feedback->interior_colour); ?></h5>
                <?php endif; ?>                
                <?php if($feedback->wheel_type <> null): ?>
                <h5 class="alert alert-success">Wheel Type Feedback :<?php echo e($feedback->wheel_type); ?></h5>
                <?php endif; ?>
                <?php if($feedback->country <> null): ?>
                <h5 class="alert alert-success">Country Feedback :<?php echo e($feedback->country); ?></h5>
                <?php endif; ?>                
                <?php if($feedback->class <> null): ?>
                <h5 class="alert alert-success">Class Feedback :<?php echo e($feedback->class); ?></h5>
                <?php endif; ?>
                <?php if($feedback->notes <> null): ?>
                <h5 class="alert alert-success">Notes Feedback :<?php echo e($feedback->notes); ?></h5>
                <?php endif; ?>
                <?php if($feedback->toy_hash <> null): ?>
                <h5 class="alert alert-success">Toy Hash Feedback :<?php echo e($feedback->toy_hash); ?></h5>
                <?php endif; ?>
                <?php if($feedback->col_hash <> null): ?>
                <h5 class="alert alert-success">Col Hash Feedback :<?php echo e($feedback->col_hash); ?></h5>
                <?php endif; ?>
                <?php if($feedback->series_hash <> null): ?>
                <h5 class="alert alert-success">Series Hash Feedback :<?php echo e($feedback->series_hash); ?></h5>
                <?php endif; ?>
                <?php if($feedback->lego_mf_fig_num <> null): ?>
                <h5 class="alert alert-success">Fig Num :<?php echo e($feedback->lego_mf_fig_num); ?></h5>
                <?php endif; ?>
                <?php if($feedback->lego_mf_name <> null): ?>
                <h5 class="alert alert-success">Lego MiniFigures Product Name :<?php echo e($feedback->lego_mf_name); ?></h5>
                <?php endif; ?>
                <?php if($feedback->lego_mf_num_parts <> null): ?>
                <h5 class="alert alert-success">Num Parts :<?php echo e($feedback->lego_mf_num_parts); ?></h5>
                <?php endif; ?>
            </div>
        </div>      
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/customer/www/ultimatecollectionscompany.com/public_html/test123/resources/views/admin/feedback/show.blade.php ENDPATH**/ ?>