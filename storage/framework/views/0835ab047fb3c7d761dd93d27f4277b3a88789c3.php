

<?php $__env->startSection('content'); ?>
	<section class="LoginMn RegistrationMn">
		<div class="LoginMnLft">
			<div class="LoginMnLftMn">
				<h3>Welcome Back</h3>
				<p>To keep connect with us please login with your personal info</p>
				<div class="LgnLftBtns">
					<a href="<?php echo e(route('welcome')); ?>">Home</a>
					<a href="<?php echo e(route('login')); ?>">Login</a>
				</div>
			</div>
            <span class="LoginBgLft" style="background-image: url(<?php echo e(asset('images/login_bg.png')); ?>)"></span>

		</div>
		<div class="LoginMnRt">
			<div class="LoginMnRtTtl">
				<h3>Subscription</h3>
			</div>
			<div class="LoginMnRtFrm">
                <!--form method="POST" action="<?php echo e(route('post.register')); ?>" class="user" enctype="multipart/form-data" -->                
                <form method="POST" action="<?php echo e(route('paypal.createAgreement')); ?>" class="user" enctype="multipart/form-data" >
                    <?php echo csrf_field(); ?>
				<div class="row">
                    <?php echo $__env->make('partials.alert', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    
                        <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="FrmRpt">
                                <input type="hidden" value=<?php echo e($planID); ?> name="planID">
                                <input type="hidden" value=<?php echo e($flag); ?> name="flag">
                                <input id="name" type="text" class="SrchHdr form-control <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" 
                                name="name" value="<?php echo e(old('name')); ?>" required autocomplete="name" placeholder="First Name" autofocus>

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
                                name="name" value="<?php echo e(old('name')); ?>" required autocomplete="name" placeholder="Last Name" autofocus>

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
                                name="email" value="<?php echo e(old('email')); ?>" required autocomplete="email" placeholder="Email Address">

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
                        <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="FrmRpt">
                                <input id="password" type="password" class="SrchHdr form-control <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                name="password" required autocomplete="new-password" placeholder="Password">

                               <?php $__errorArgs = ['password'];
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
                                <input id="password-confirm" type="password" class="SrchHdr form-control" 
                                name="password_confirmation" required autocomplete="new-password" placeholder="Repeat Password">

                            </div>
                        </div>
                       
                        <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12 col-12 text-center">
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
                        </div>

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
                                <input type="submit" class="LoginSbmt" value="Subscribe Now" />
                            </div>
                        </div>
				</div>
            </form>

            </div>
		</div>
	</section>

    <?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.auth', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\ucc\resources\views/auth/register.blade.php ENDPATH**/ ?>