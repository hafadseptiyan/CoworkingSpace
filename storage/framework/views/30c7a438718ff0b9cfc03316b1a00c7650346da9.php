<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
  <meta name="author" content="Creative Tim">
  <title>Coworking Space Admin</title>
  <!-- Favicon -->
  <link href="<?php echo e(asset('assets/img/brand/favicon.png')); ?>" rel="icon" type="image/png">
  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
  <!-- Icons -->
  <link href="<?php echo e(asset('assets/vendor/nucleo/css/nucleo.css')); ?>" rel="stylesheet">
  <link href="<?php echo e(asset('assets/vendor/@fortawesome/fontawesome-free/css/all.min.css')); ?>" rel="stylesheet">
  <link href="<?php echo e(asset('assets/datatable/dataTables.bootstrap.css')); ?>" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">
  <link href="<?php echo e(asset('assets/dist/summernote.css')); ?>" rel="stylesheet">


  <!-- Argon CSS -->
  <link type="text/css" href="<?php echo e(asset('assets/css/argon.css?v=1.0.0')); ?>" rel="stylesheet">
</head>

<body>
  <!-- Sidenav -->
  <nav class="navbar navbar-vertical fixed-left navbar-expand-md navbar-light bg-white" id="sidenav-main">
        <?php echo $__env->make('layouts.admin.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  </nav>
  <!-- Main content -->
  <div class="main-content">
    <!-- Top navbar -->
    <nav class="navbar navbar-top navbar-expand-md navbar-dark" id="navbar-main">
		<?php echo $__env->make('layouts.admin.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </nav>
    <!-- Header -->
    <div class="header bg-gradient-primary pb-8 pt-5 pt-md-8"></div>
    <!-- Page content -->
    <div class="container-fluid mt--9">
        <?php echo $__env->yieldContent('content'); ?>
        <?php echo $__env->make('layouts.admin.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>
  
  </div>
  
  <!-- Argon Scripts -->
  <!-- Core -->
  <script src="<?php echo e(asset('assets/vendor/jquery/dist/jquery.min.js')); ?>"></script>
  <script src="<?php echo e(asset('assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js')); ?>"></script>
  <!-- Optional JS -->
  <script src="<?php echo e(asset('assets/vendor/chart.js/dist/Chart.min.js')); ?>"></script>
  <script src="<?php echo e(asset('assets/vendor/chart.js/dist/Chart.extension.js')); ?>"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>

  <!-- Argon JS -->
  <script src="<?php echo e(asset('assets/js/argon.js?v=1.0.0')); ?>"></script>
  <script src="<?php echo e(asset('assets/dist/summernote.js')); ?>"></script>

  

        <script>
             $(document).ready(function() {
              $('#summernote').summernote();
            });

            $('#summernote').summernote({
                height: 100,    
                minHeight: 150,     
                maxHeight: 400,    
                focus: false    
            });
          </script>
</body>

</html>
<?php /* C:\xampp\htdocs\CoWorkingSpace\resources\views/layouts/admin/masterAdmin.blade.php */ ?>