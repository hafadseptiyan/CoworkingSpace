<!DOCTYPE html>
<html lang="en">

    <!-- Basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">   
   
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
 
     <!-- Site Metas -->
    <title>Next Coworking Space</title>  
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Site Icons -->
    <link rel="shortcut icon" href="<?php echo e(asset('assetsFrontend/images/favicon.ico')); ?>" type="image/x-icon" />
    <link rel="apple-touch-icon" href="<?php echo e(asset('assetsFrontend/images/apple-touch-icon.png')); ?>">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php echo e(asset('assetsFrontend/css/bootstrap.min.css')); ?>">
    <!-- Site CSS -->
    <link rel="stylesheet" href="<?php echo e(asset('assetsFrontend/style.css')); ?>">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="<?php echo e(asset('assetsFrontend/css/responsive.css')); ?>">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="<?php echo e(asset('assetsFrontend/css/custom.css')); ?>">
	<script src="<?php echo e(asset('assetsFrontend/js/modernizr.js')); ?>"></script> <!-- Modernizr -->

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

	
	
</head>
<body id="page-top" class="politics_version">

    <!-- LOADER -->
    <div id="preloader">
        <div id="main-ld">
			<div id="loader"></div>  
		</div>
    </div><!-- end loader -->
    <!-- END LOADER -->

    <?php echo $__env->yieldContent('content'); ?>

	
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
        <?php echo $__env->make('layouts.users.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </nav>
	
	
    <div class="copyrights">
        <?php echo $__env->make(layouts.users.footer, \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  
    </div><!-- end copyrights -->

    <a href="#" id="scroll-to-top" class="dmtop global-radius"><i class="fa fa-angle-up"></i></a>

    <!-- ALL JS FILES -->
    <script src="<?php echo e(asset('assetsFrontend/js/all.js')); ?>"></script>
	<!-- Camera Slider -->
	<script src="<?php echo e(asset('assetsFrontend/js/jquery.mobile.customized.min.js')); ?>"></script>
	<script src="<?php echo e(asset('assetsFrontend/js/jquery.easing.1.3.js')); ?>"></script> 
	<script src="<?php echo e(asset('assetsFrontend/js/parallaxie.js')); ?>"></script>
	<script src="<?php echo e(asset('assetsFrontend/js/headline.js')); ?>"></script>
	<!-- Contact form JavaScript -->
    <script src="<?php echo e(asset('assetsFrontend/js/jqBootstrapValidation.js')); ?>"></script>
    <script src="<?php echo e(asset('assetsFrontend/js/contact_me.js')); ?>"></script>
    <!-- ALL PLUGINS -->
    <script src="<?php echo e(asset('assetsFrontend/js/custom.js')); ?>"></script>
    <script src="<?php echo e(asset('assetsFrontend/js/jquery.vide.js')); ?>"></script>

</body>
</html>
<?php /* C:\xampp\htdocs\CoWorkingSpace\resources\views/layouts/users/masterFront.blade.php */ ?>