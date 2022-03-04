

<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row bg-container">
        <div class="col-sm-12 bg-white p-4">
              <div class="ClctMnRt tab-pane fade show active" id="list-home" role="tabpanel" aria-labelledby="list-home-list">
                  <div class="ClctMnRtTp ProductWtBdcrm">
                    <div class="ClctMnRtTpLft">
                        <div class="TitleMn">
                          <h2>Edit Profile</h2>
                        </div>
                    </div>
                    <div class="ClctMnRtTpRt">
                        <ul class="breadcrumb">
                            <li><a class="active" href="<?php echo e(route('users.dashboard')); ?>">Home</a></li>
                            <li><a href="#">Edit Profile</a></li>
                        </ul>
                    </div>
                </div>
            </div> <!-- Collections -->  
        </div>

        <div class="col-xl-12">
            <?php echo $__env->make('partials.alert', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <form action="<?php echo e(route('user_profile.store')); ?>" method="POST" enctype="multipart/form-data">
            <?php echo csrf_field(); ?>
              
                <div class="row p-2">
                    <div class="col-sm-3">
                        <?php if(Auth::user()->image <> null): ?>
                            <img src="<?php echo e(asset(Auth::user()->image)); ?>" alt="" id="user_profile_image_edit" style="width:250px;height:250px">    
                            <input type="file" name="image" id="image" class="p-2">                        
                        <?php else: ?>
                            <img src="<?php echo e(asset('images/noimage.png')); ?>" alt="">
                            <input type="file" name="image" id="image" class="p-2">
                        <?php endif; ?>
                    </div>
                    <div class="col-sm-9">
                        <div class="row">
                            <div class="col-sm-6">
                                <label for="">Name</label>
                                <input type="text" class="form-control" wire:model="name" name="name" placeholder="Enter Name" value="<?php echo e(Auth::user()->name); ?>">
                                <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <span class="alert alert-danger" style="padding:2px;margin:5px"><?php echo e($message); ?></span> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>        
                            </div>
                            <div class="col-sm-6">
                                <label for="">Username</label>
                                <input type="text" class="form-control" wire:model="username" name="username" placeholder="Enter Username" value="<?php echo e(Auth::user()->username); ?>" >
                                <?php $__errorArgs = ['username'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <span class="alert alert-danger" style="padding:2px;margin:5px"><?php echo e($message); ?></span> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>        
                            </div>
                            <div class="col-sm-6">
                                <label for="">Gender</label>
                                <select name="gender" id="gender" class="form-control">
                                    <option value="female" <?php echo e(Auth::user()->gender == 'female' ? 'selected' : ''); ?>>Female</option>
                                    <option value="male" <?php echo e(Auth::user()->gender == 'male' ? 'selected' : ''); ?>>Male</option>
                                    <option value="lgbtq_female" <?php echo e(Auth::user()->gender == 'lgbtq_female' ? 'selected' : ''); ?>>LGBTQ+ Female</option>
                                    <option value="lgbtq_male" <?php echo e(Auth::user()->gender == 'lgbtq_male' ? 'selected' : ''); ?>>LBGTQ+ Male</option>
                                    <option value="do_not_mention" <?php echo e(Auth::user()->gender == 'do_not_mention' ? 'selected' : ''); ?>>Do not mention</option>
                                </select>
                                <?php $__errorArgs = ['gender'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <span class="alert alert-danger" style="padding:2px;margin:5px"><?php echo e($message); ?></span> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>        
                            </div>
                            <div class="col-sm-6">
                                <label for="">Membership</label>
                                <input type="text" class="form-control" wire:model="membership" name="membership" placeholder="Enter Membership" value="<?php echo e(Auth::user()->membership); ?>" readonly>
                                <?php $__errorArgs = ['membership'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <span class="alert alert-danger" style="padding:2px;margin:5px"><?php echo e($message); ?></span> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>        
                            </div>
                            <div class="col-sm-6">
                                <label for="">Location</label>
                                <input type="text" class="form-control" wire:model="location" name="location" placeholder="Enter Location" value="<?php echo e(Auth::user()->location); ?>">
                                <?php $__errorArgs = ['location'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <span class="alert alert-danger" style="padding:2px;margin:5px"><?php echo e($message); ?></span> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>        
                            </div>
                            <div class="col-sm-6">
                                <label for="">Email</label>
                                <input type="text" class="form-control" wire:model="email" name="email" placeholder="Enter Email" value="<?php echo e(Auth::user()->email); ?>" readonly>
                                <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <span class="alert alert-danger" style="padding:2px;margin:5px"><?php echo e($message); ?></span> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>        
                            </div>
                            <div class="col-sm-12 p-4">
                                <div class="VwBtn text-right">
                                    <button class="glow-on-hover btn btn-1 text-white mb-2" 
                                    type="submit" >Save Changes</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
      </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.users', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/customer/www/ultimatecollectionscompany.com/public_html/test123/resources/views/user/profile/edit.blade.php ENDPATH**/ ?>