<?php $__env->startSection('content'); ?>
<div class="main-banner" style="background-image: url('<?php echo e(asset('assetsFrontend/uploads/page-header-bg.jpg')); ?>');height:280px">
    <center>
        <div class="jarak"></div>
        <h4 class="judul" style="margin-top:10%">Detail Booking</h4>
        </b><br>
        <hr class="garisT">
    </center>
</div>
<div class="container">
    <div class="row">
        <div class="col-md-5 col-sm-12">
            <div class="gallery-single fix">
                <img src="<?php echo e(asset('assetsFrontend/uploads/gallery_img-01.jpg')); ?>" class="img-fluid" alt="Image">
            </div>
        </div>
        <div class="col-md-7 col-sm-12">
            <br><br>
            <center>
            <h4 style="color:#1e90ff">
                <?php echo e($venue->nama_tempat); ?>

                <center/>
            </h4>
            <hr>
            <p><?php echo $venue->deskripsi; ?></p>
            <hr>
            <div class="form-bg">
                <form class="form-horizontal">
                    <div class="form-content">
                        <div class="form-group">
                            <div class="col-sm-12">
                                <label class="control-label" for="exampleInputName2"><i class="fa fa-user"></i></label>
                                <input class="form-control" id="exampleInputName2" placeholder="Username" type="text">
                            </div>
                            <div class="col-sm-12">
                                <label class="control-label" for="exampleInputName2"><i class="fa fa-envelope-o"></i></label>
                                <input class="form-control" id="exampleInputName2" placeholder="Email" type="email">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-12">
                                <label class="control-label" for="exampleInputName2"><i class="fa fa-lock"></i></label>
                                <input class="form-control" id="exampleInputName2" placeholder="Phone" type="text">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-12">
                                <label class="control-label" for="exampleInputName2"><i class="fa fa-user"></i></label>
                                <input class="form-control" id="exampleInputName2" placeholder="Adults" type="number">
                            </div>
                            <div class="col-sm-12">
                                <label class="control-label" for="exampleInputName2"><i class="fa fa-user"></i></label>
                                <input class="form-control" id="exampleInputName2" placeholder="Children" type="number">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-12">
                                <label class="control-label" for="exampleInputName2"><i class="fa fa-calendar"></i></label>
                                <input class="form-control" id="exampleInputName2" placeholder="Check-in date (dd/mm/yy)" type="text">
                            </div>
                            <div class="col-sm-12">
                                <label class="control-label" for="exampleInputName2"><i class="fa fa-calendar"></i></label>
                                <input class="form-control" id="exampleInputName2" placeholder="Check-out date (dd/mm/yy)" type="text">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-12">
                                <label class="control-label" for="exampleInputName2"><i class="fa fa-calendar"></i></label>
                                <textarea class="form-control" placeholder="Additional Message"></textarea>
                            </div>
                        </div>
                        <div class="clearfix">
                            <button type="submit" class="btn btn-default"> Register</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.front.masterReg', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php /* C:\xampp\htdocs\CoWorkingSpace\resources\views/users/registered/transaksi.blade.php */ ?>