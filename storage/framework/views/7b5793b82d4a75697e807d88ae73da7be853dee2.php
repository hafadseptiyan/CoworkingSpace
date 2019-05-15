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
		
	<div id="venue" class="section lb">
		<div class="container">
			<div class="section-title text-center">
                <h3>Coworking Place</h3><hr class="garisT"><br>
                <p>Quisque eget nisl id nulla sagittis auctor quis id. Aliquam quis vehicula enim, non aliquam risus.</p>
            </div><!-- end title -->
			
			<div class="row">
                <?php $__currentLoopData = $venue; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
				<div class="col-md-4 col-sm-6 col-lg-4">
					<div class="post-box">
						<div class="post-thumb">
							<img src="images/<?php echo e($row->image); ?>" class="img-fluid" alt="post-img" />
						</div>
						<div class="post-info">
                            <center>
                                <h3 style="font-size:26px;color:#2098D1;"><?php echo e($row->nama_tempat); ?></h3>    
                            <hr><center>
			                <h3 style="font-size:18px;color:#2098D1;">IDR <?php echo e($row->harga); ?></h3>

                            <p style="font-size:12px"><?php echo $row->deskripsi; ?></p><hr>
                             <a href="<?php echo e(route('home.show',$row->id_venue)); ?>">
                                <button class="btn btn-info" type="submit"><i class="fa fa-first-order"></i> Booking Now</button>
                            </a>
                        </div>
					</div>
				</div><br>
			    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
			</div>
			
		</div>
    </div>

    
    <div id="upload" class="section wb">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="right-box-pro wow fadeIn">
                        <img src="<?php echo e(asset('assetsFrontend/uploads/about_04.jpg')); ?>" alt="" class="img-fluid img-rounded">
                    </div><!-- end media -->
                </div><!-- end col -->

                <div class="col-md-6">
                    <div class="message-box" style="float:right">                        
                        <h2>Upload Payment</h2><hr class="garis"><br><br>
                        <form action="">
                            <input type="file" class="form-control"><br>
                        </form>
                        <button class="btn btn-primary" type="submit"><i class="fa fa-upload"></i> Upload</button>
                    </div><!-- end messagebox -->
                </div><!-- end col -->
            </div><!-- end row -->
        </div><!-- end container -->
    </div><!-- end section -->

    
    <div id="make" class="section wb">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="message-box">  
                        <h2>Make An Event</h2><hr class="garis"><br><br>
                       
                        <form action="">
                            <input type="text" class="form-control" value="Nama Event"><br>
                            <input type="text" class="form-control" value="Nama Event">
                        </form>
                    </div><!-- end messagebox -->
                </div><!-- end col -->

                <div class="col-md-6">
                    <div class="right-box-pro wow fadeIn">
                        <img src="<?php echo e(asset('assetsFrontend/uploads/about_04.jpg')); ?>" alt="" class="img-fluid img-rounded">
                    </div><!-- end media -->
                </div><!-- end col -->
            </div><!-- end row -->
        </div><!-- end container -->
    </div><!-- end section -->

    <div id="contact" class="section db">
        <div class="container">
            <div class="section-title text-center">
                <h3>Contact</h3><hr class="garisT">
                <p>Quisque eget nisl id nulla sagittis auctor quis id. Aliquam quis vehicula enim, non aliquam risus.</p>
            </div><!-- end title -->

            <div class="row">
                <div class="col-md-12">
           
                </div><!-- end col -->
            </div><!-- end row -->
        </div><!-- end container -->
    </div><!-- end section -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.front.masterReg', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php /* C:\xampp\htdocs\CoWorkingSpace\resources\views/users/registered/homepage.blade.php */ ?>