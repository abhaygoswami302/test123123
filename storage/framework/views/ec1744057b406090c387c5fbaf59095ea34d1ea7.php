

<?php $__env->startSection('content'); ?>
    
	<section class="LoginMn resetPasswordEmail">
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
            <?php if(Session::has('message')): ?>
            <div class="alert alert-success">
                <?php echo e(Session::get('message')); ?>

            </div>
            <?php endif; ?>
            <?php if(Session::has('error')): ?>
                <div class="alert alert-danger">
                    <?php echo e(Session::get('error')); ?>

                </div>
            <?php endif; ?>
			<div class="LoginMnRtTtl">
				<h3>Forgot Password?</h3>
			</div>
			<div class="LoginMnRtFrm">
              
                <form method="POST" action="<?php echo e(route('password.email.ucc')); ?>" class="user">
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
                    <div class="FrmRpt" align="center">
                        <input type="submit" class="LoginSbmt" value="Send Link" />
                    </div>
                </form>
			</div>
		</div>
	</section>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.auth', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\ucc\resources\views/auth/passwords/email.blade.php ENDPATH**/ ?>