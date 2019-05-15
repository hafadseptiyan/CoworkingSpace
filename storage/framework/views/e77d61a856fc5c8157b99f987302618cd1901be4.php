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
                <img src="<?php echo e(asset('assetsFrontend/uploads/banner4.jpg')); ?>" class="img-fluid" alt="Image">
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
                <form class="form-horizontal" method="post" action="<?php echo e(route('home.store')); ?>" enctype="multipart/form-data">
                    <?php echo csrf_field(); ?>
                <?php if($errors->any()): ?>
                <div class="col-md-10">
                    <div class="alert alert-danger">
                        <ul>
                            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li><?php echo e($error); ?></li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </ul>
                    </div>
                </div>
                <?php endif; ?>    
                    <div class="form-content">
                        <div class="form-group">
                            <div class="col-sm-12">
                                <label class="control-label" for="exampleInputName2"><i class="fa fa-user"></i></label>
                                <input value="<?php echo e(Auth::user()->id); ?>" type="hidden" name="id">
                                <input value="<?php echo e($venue->id_venue); ?>" type="hidden" name="id_venue">
                                <input class="form-control" id="exampleInputName2" value="<?php echo e(Auth::user()->nama); ?>" type="text" readonly>
                            </div>

                        </div>

                        <div class="form-group">
                            <div class="col-sm-12">
                                <label class="control-label" for="exampleInputName2"><i class="fa fa-calendar"></i></label>
                                <input placeholder="Tanggal Sewa" name="tgl_sewa" class="form-control" type="text" onfocus="(this.type='date')"  id="exampleInputName2" required="required"> 
                            </div>
                            <div class="col-sm-12">
                                <label class="control-label" for="exampleInputName2"><i class="fa fa-calendar"></i></label>
                                <input placeholder="Tanggal Selesai" name="tgl_selesai" class="form-control" type="text" onfocus="(this.type='date')"  id="exampleInputName2" required="required"> 
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <div class="col-sm-12">
                                <label class="control-label" for="exampleInputName2"><i class="fa fa-money"></i></label>
                                <input class="form-control" name="total_pembayaran" id="exampleInputName2" value="<?php echo e($venue->harga); ?>" type="text" readonly>
                                <input value="belum terverifikasi" type="hidden" name="status_booking">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-sm-12">
                                <button type="submit" class="btn btn-primary" style="width:100%"> Booking Now</button>
                            </div>
                        </div>
               
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.front.masterReg', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php /* C:\xampp\htdocs\CoWorkingSpace\resources\views/users/transaksi.blade.php */ ?>