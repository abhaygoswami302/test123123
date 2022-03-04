

<?php $__env->startSection('content'); ?>
<section class="ClctMn" id="AfterSubFrm" style="background-image: url(http://localhost:8000/images/patteren.png);">
      
<div class="container">
    <div class="row">
        <div class="col-xl-12">
            <div class="PriceData_1">
                <div class="TitleMn my-4">
                    <h2>Upgrade Plan</h2>
                </div>
            </div>
        </div>
    </div>
    <div class="row WtBg  justify-content-center">
        <div class="col-xl-8">
            <div class="ClctMnLft">
                <div class="LoginMnRtFrm">
                    <!--form method="POST" action="<?php echo e(route('user_upgradePlan.postregister')); ?>" class="user" enctype="multipart/form-data" -->                
                    <form method="POST" action="<?php echo e(route('upgradeplan_paypal.createAgreement')); ?>" class="user" enctype="multipart/form-data" >
                        <?php echo csrf_field(); ?>
                    <div class="row">
                        <?php echo $__env->make('partials.alert', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                        
                            <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12 col-12">
                                <div class="FrmRpt">
                                    <input type="hidden" value="<?php echo e($flag1); ?>" name="planID">
                                    <input type="hidden" value="<?php echo e($flag2); ?>" name="flag">
                                    <input type="hidden" value="<?php echo e(Auth::user()->password); ?>" name="password">
                                    <input id="name" type="text" class="SrchHdr form-control <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" 
                                    name="name" readonly value="<?php echo e(old('name', Auth::user()->name)); ?>" required autocomplete="name" placeholder="First Name" autofocus>
    
                                    <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                        <span class="invalid-feedback" role="alert">
                                            <strong><?php echo e($message); ?></strong>
                                        </span>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12 col-12">
                                <div class="FrmRpt">
                                    <input id="name" type="text" class="SrchHdr form-control <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" 
                                    name="name" readonly value="<?php echo e(old('name', Auth::user()->name)); ?>"  autocomplete="name" placeholder="Last Name" autofocus>
    
                                    <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                        <span class="invalid-feedback" role="alert">
                                            <strong><?php echo e($message); ?></strong>
                                        </span>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>
                            </div>
                            <div class="col-xl-12">
                                <div class="FrmRpt">
                                    <input id="email" type="email" class="SrchHdr form-control <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" 
                                    name="email" readonly value="<?php echo e(old('email', Auth::user()->email)); ?>" required autocomplete="email" placeholder="Email Address">
    
                                    <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                        <span class="invalid-feedback" role="alert">
                                            <strong><?php echo e($message); ?></strong>
                                        </span>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>
                            </div>
                           
                            <!--div class="col-xl-6 col-lg-12 col-md-12 col-sm-12 col-12 text-center">
                                Upload Image
                            </div>
                            
                            <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12 col-12">
                                <div class="FrmRpt">
                                    <input type="file" class=" <?php $__errorArgs = ['image'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                    name="image"  autocomplete="new-image" placeholder="image">
                                    <?php $__errorArgs = ['image'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                        <span class="invalid-feedback" role="alert">
                                            <strong><?php echo e($message); ?></strong>
                                        </span>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>
                            </div-->
    
                            <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12 text-center p-0">
                                <a href="<?php echo e(route('general_disclaimer')); ?>" target="_blank" style="color: #4400bc">
                                    General Disclaimer <i class="fas fa-external-link-alt"></i>
                                </a>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12 text-center p-0">
                                <a href="<?php echo e(route('privacy_policy')); ?>"  target="_blank" style="color: #4400bc">
                                    Privacy Policy <i class="fas fa-external-link-alt"></i>
                                </a>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12 text-center p-0">
                                <a href="<?php echo e(route('terms_and_conditions')); ?>"  target="_blank" style="color: #4400bc">
                                    Terms&Conditions <i class="fas fa-external-link-alt"></i>
                                </a>
                            </div>
    
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 text-center p-0 m-0">
                                <input type="checkbox" name="" id="" required>
                                <small>I hereby agree to abide by the terms and conditions as provided in the links.</small>
                            </div>
    
                            <div class="col-xl-12 pt-4">
                                <div class="FrmRpt" align="center">
                                    <input type="submit" class="LoginSbmt" value="Upgrade Plan" />
                                </div>
                            </div>
                    </div>
                </form>
    
                </div>
            </div>
        </div>
    </div>
</div>
</section>
<!--
	<section class="LoginMn RegistrationMn">
		
		<div class="LoginMnRt">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="LoginMnRtTtl">
                            <h3>Subscription</h3>
                        </div>
                        
                    </div>
                </div>
            </div>
		</div>
	</section>
-->
    <?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.users', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/customer/www/ultimatecollectionscompany.com/public_html/test123/resources/views/user/plan/register.blade.php ENDPATH**/ ?>