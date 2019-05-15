<?php $__env->startSection('content'); ?>
<section id="home" class="main-banner parallaxie" style="background: url('<?php echo e(asset('assetsFrontend/uploads/main.jpg')); ?>')">
		<div class="heading">
			<h1>Welcome to OnNext<span> . </span></h1>			
			<h3 class="cd-headline clip is-full-width">
				<span class="cd-words-wrapper">
					<b class="is-visible">Web Developer</b>
					<b>Web Design</b>
					<b>Creative Design</b>
					<b>Graphic Design</b>
				</span>
				<div class="btn-ber">
					<a class="get_btn hvr-bounce-to-top" href="#">Get started</a>
					<a class="learn_btn hvr-bounce-to-top" href="#">Learn More</a>
				</div>
			</h3>
		</div>
	</section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.front.masterFront', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php /* C:\xampp\htdocs\CoWorkingSpace\resources\views/users/login.blade.php */ ?>