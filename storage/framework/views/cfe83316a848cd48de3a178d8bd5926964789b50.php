<?php $__env->startSection('content'); ?>
<section id="home" class="main-banner parallaxie" style="background: url('<?php echo e(asset('assetsFrontend/images/bgLogin.jpg')); ?>')">
		<div class="heading" ><br><br>  <br>
        
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <div class="card"><br>
                <h4>Register<h4><hr style="border:2px solid #0984e3;width:15%">

                <div class="card-body">
                    <form method="POST" action="<?php echo e(route('register')); ?>">
                        <?php echo csrf_field(); ?>

                        <div class="form-group row">
                           <div class="col-md-6"><br><br>
		                    	<img class="img-fluid" src="<?php echo e(asset('assetsFrontend/images/logo.png')); ?>" alt="" />    
                            </div>
                            <div class="col-md-6">
                                <input id="nama" type="text" placeholder="Nama" class="form-control<?php echo e($errors->has('nama') ? ' is-invalid' : ''); ?>" name="nama" value="<?php echo e(old('nama')); ?>" required autofocus>

                                <?php if($errors->has('nama')): ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($errors->first('nama')); ?></strong>
                                    </span>
                                <?php endif; ?> 
                       
                                <input id="username" type="text" placeholder="Username" class="form-control<?php echo e($errors->has('username') ? ' is-invalid' : ''); ?>" name="username" value="<?php echo e(old('username')); ?>" required autofocus>

                                <?php if($errors->has('username')): ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($errors->first('username')); ?></strong>
                                    </span>
                                <?php endif; ?> 
                   
                                <input id="email" type="email" placeholder="Email" class="form-control<?php echo e($errors->has('email') ? ' is-invalid' : ''); ?>" name="email" value="<?php echo e(old('email')); ?>" required>

                                <?php if($errors->has('email')): ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($errors->first('email')); ?></strong>
                                    </span>
                                <?php endif; ?> 
                        
                                <input id="no_telp" type="number" placeholder="No Telp" class="form-control<?php echo e($errors->has('no_telp') ? ' is-invalid' : ''); ?>" name="no_telp" value="<?php echo e(old('no_telp')); ?>" required>
                                <?php if($errors->has('no_telp')): ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($errors->first('no_telp')); ?></strong>
                                    </span>
                                <?php endif; ?> 
                       

                                <input id="status" type="hidden" class="form-control<?php echo e($errors->has('status') ? ' is-invalid' : ''); ?>" name="status" value="User" required>
                                <?php if($errors->has('status')): ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($errors->first('status')); ?></strong>
                                    </span>
                                <?php endif; ?> 
                       
                                <input id="password" type="password" placeholder="Password" class="form-control<?php echo e($errors->has('password') ? ' is-invalid' : ''); ?>" name="password" required>

                                <?php if($errors->has('password')): ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($errors->first('password')); ?></strong>
                                    </span>
                                <?php endif; ?> 
              
                                <input id="password-confirm" placeholder="Password Confirm" type="password" class="form-control" name="password_confirmation" required>
                
                                <button type="submit" style="width:100%" class="btn btn-primary">
                                    <?php echo e(__('Register')); ?>

                                </button>
                                <span style="font-size:14px">Already Have Account? <a style="color:blue" href="/login">Login here</a></span>
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
<?php /* C:\xampp\htdocs\CoWorkingSpace\resources\views/auth/register.blade.php */ ?>