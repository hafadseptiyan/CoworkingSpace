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
              <a class="nav-link js-scroll-trigger active" href="http://localhost:8000/home#home">Home</a>
            </li>
      
		      	<li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="http://localhost:8000/home#venue">Venue</a>
            </li>

            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="/open">Data Transaksi</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="http://localhost:8000/home#make">Make Event</a>
            </li>
   
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="http://localhost:8000/home#contact"> Contact us</a>
            </li>
             <li class="nav-item">
                <a class="nav-link js-scroll-trigger" href="<?php echo e(route('logout')); ?>" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                Welcome <?php echo e(Auth::user()->username); ?>,<i class="fa fa-sign-out"></i> Logout</a>
                <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                    <?php echo csrf_field(); ?>
                </form>
            </li>
          </ul>
        </div>
      </div>
<?php /* C:\xampp\htdocs\CoWorkingSpace\resources\views/layouts/front/regNavbar.blade.php */ ?>