

<?php $__env->startSection('content'); ?>
    
	<section class="LoginMn LoginMnHdng">
		<div class="LoginMnLft">
			<div class="LoginMnLftMn">
				<h3>Welcome Back</h3>
				<!--p>To keep connect with us please login with your personal info</p-->
				<div class="LgnLftBtns">
					<a href="<?php echo e(route('welcome')); ?>" target="_blank">Home</a>
					<a href="<?php echo e(route('pricing')); ?>" target="_blank">Sign Up</a>
				</div>
			</div>
            <span class="LoginBgLft" style="background-image: url(<?php echo e(asset('images/login_bg.png')); ?>)"></span>
		</div>
		<div class="LoginMnRt">
			<div class="LoginMnRtTtl">
				<h3>Login</h3>
			</div>
			<div class="LoginMnRtFrm">
                <?php if(Session::has('message')): ?>
                    <div class="alert alert-success">
                        <?php echo e(Session::get('message')); ?>

                    </div>
                <?php endif; ?>
                <form method="POST" action="<?php echo e(route('login')); ?>" class="user">
                    <?php echo csrf_field(); ?>
                    <div class="FrmRpt">
                        <input id="email" type="email" class="SrchHdr  form-control <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="email" 
                        value="<?php echo e(old('email')); ?>" required autocomplete="email" placeholder="Enter Your Email" autofocus>
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
                    <div class="FrmRpt">
                        <input id="password" type="password" class="SrchHdr form-control <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="password" required autocomplete="current-password" 
                        placeholder="Enter Your Password">

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
                    <div class="FrmRpt">
                        <div class="custom-control custom-checkbox small">
                            <input type="checkbox" class="custom-control-input" id="customCheck">
                            <label class="custom-control-label" for="customCheck">Remember Me</label>
                        </div>
                    </div>
                    <div class="FrmRpt" align="center">
                        <input type="submit" class="LoginSbmt" value="Login" />
                    </div>
                    <div class="FrmRpt" align="center">
                        <a href="<?php echo e(route('password.request')); ?>" class="FrgtPass">Forgot Password?</a>
                    </div>
                </form>
			</div>
		</div>
	</section>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.auth', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/customer/www/ultimatecollectionscompany.com/public_html/test123/resources/views/auth/login.blade.php ENDPATH**/ ?>