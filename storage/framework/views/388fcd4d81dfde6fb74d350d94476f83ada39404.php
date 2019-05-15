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
 <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="#page-top">
			<img class="img-fluid" src="<?php echo e(asset('assetsFrontend/images/logo.png')); ?>" alt="" />
		</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fa fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav text-uppercase ml-auto">
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger active" href="#home">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#about">About Us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#advantages">Advantages</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#event">Event</a>
            </li>
			<li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#venue">Venue</a>
            </li>
			<li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#contact">Contect Us</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
	
	
    <div class="copyrights">
          <div class="container">
            <div class="footer-distributed">
				<a href="#"><img src="images/logo.png" alt="" /></a>
                <div class="footer-center">
                    <p class="footer-links">
                        <a href="#">Home</a>
                        <a href="#">Blog</a>
                        <a href="#">About</a>
                        <a href="#">Faq</a>
                        <a href="#">Contact</a>
                    </p>
                    <p class="footer-company-name">All Rights Reserved. &copy; 2018 <a href="#">OnNext</a>
                </div>
            </div>
        </div><!-- end container -->
  
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
<?php /* C:\xampp\htdocs\CoWorkingSpace\resources\views/layouts/frontend/masterFront.blade.php */ ?>