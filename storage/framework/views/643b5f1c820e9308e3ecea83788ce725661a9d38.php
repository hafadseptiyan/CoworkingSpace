<?php $__env->startSection('content'); ?>
<section id="home" class="main-banner parallaxie" style="background: url('<?php echo e(asset('assetsFrontend/images/bgLogin.jpg')); ?>')">
		<div class="heading">
        
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <div class="card"><br>
                <h4>Login<h4><hr style="border:2px solid #0984e3;width:15%">

                <div class="card-body">
                    <form method="POST" action="<?php echo e(route('login')); ?>">
                        <?php echo csrf_field(); ?>

                        <div class="form-group row">
                            <div class="col-md-6"><br>
		                    	<img class="img-fluid" src="<?php echo e(asset('assetsFrontend/images/logo.png')); ?>" alt="" />
                                <br>    
                            </div>
                            <div class="col-md-6">
                                <input id="email" type="email" placeholder="Email" class="form-control<?php echo e($errors->has('email') ? ' is-invalid' : ''); ?>" name="email" value="<?php echo e(old('email')); ?>" required autofocus>

                                <?php if($errors->has('email')): ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($errors->first('email')); ?></strong>
                                    </span>
                                <?php endif; ?> 

                                <input id="password" type="password" placeholder="Password" class="form-control<?php echo e($errors->has('password') ? ' is-invalid' : ''); ?>" name="password" required>

                                <?php if($errors->has('password')): ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($errors->first('password')); ?></strong>
                                    </span>
                                <?php endif; ?> 
                                <button type="submit" style="width:100%" class="btn btn-primary">
                                    <?php echo e(__('Login')); ?>

                                </button>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                              

                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
		</div>
	</section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.front.masterFront', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php /* C:\xampp\htdocs\CoWorkingSpace\resources\views/auth/login.blade.php */ ?>