

<!DOCTYPE html>
<html>
<head>
    <title>Login Page</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link href="<?php echo e(asset('assetsLogin/css/login.css')); ?>" rel='stylesheet' type='text/css' />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>
    <br><br>

    <!-- main -->
    <div class="main">
        <div class="main-row">
				<div class="agileits-top">
              <h3 style="font-family:Trebuchet MS; color:white; text-align:center"><i class="fa fa-sign-in"></i> Admin Login</h3>
               <form action="<?php echo e(url('/loginPost')); ?>" method="post" class"login-form" role="form">
                    <?php echo e(csrf_field()); ?>

                    <input type="text" class="text" required="required" placeholder="Username " name="username">
                    <input type="password" class="text" required="required" placeholder="Password" name="password">
                    <input type="submit" value="SIGN IN">
                </form>
            </div>
           
            
        </div>
        <div class="copyright">
            <p> © 2019 NextCoworking . All rights reserved</p>
        </div>
    </div>
    <!-- //main -->
</body>
</html>
<?php /* C:\xampp\htdocs\CoWorkingSpace\resources\views/admin/login.blade.php */ ?>