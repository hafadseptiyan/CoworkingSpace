<?php $__env->startSection('content'); ?>
<div class="main-banner" style="background-image: url('<?php echo e(asset('assetsFrontend/uploads/page-header-bg.jpg')); ?>');height:280px">
    <center>
        <div class="jarak"></div>
        <h4 class="judul" style="margin-top:10%">Upload Bukti Pembayaran</h4>
        </b><br>
        <hr class="garisT">
    </center>
</div>
<br><br><br>
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <div class="right-box-pro wow fadeIn">
                <img src="<?php echo e(asset('assetsFrontend/uploads/banner4.jpg')); ?>" alt="" class="img-fluid img-rounded">
            </div>
            <!-- end media -->
        </div>
        <div class="col-md-6">
            <div class="message-box">
                <div style="margin-left:12%">
                    <h2>Upload Payment</h2>
                    <hr class="garis">
                    <br><br>
                    <?php if(session()->get('success')): ?>
                    <div class="alert alert-success">
                        <?php echo e(session()->get('success')); ?>  
                    </div>
                    <br />
                    <?php endif; ?>
                    <form action="<?php echo e(route('home.update',$transaksi->id_transaksi)); ?>" method="post" enctype="multipart/form-data">
                        <?php echo method_field('PATCH'); ?>
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
                        <div class="form-group">
                            <label class="control-label col-sm-4" style="font-size:14px;">Bukti Pembayaran : </label>
                            <div class="col-sm-11">
                                <input type="file" name="bukti_pembayaran" class="form-control" placeholder="Enter nama event">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-12">
                                <button type="submit" class="btn btn-primary"><i class="fa fa-upload"></i> Upload</button>
                            </div>
                        </div>
                </div>
           
                </form>    
            </div>
        </div>
        <!-- end messagebox -->
    </div>
    <!-- end col -->
</div>
</div><br><br><br><br><br><br><br><br><br>
@endsection6:43 07/04/2019
<?php echo $__env->make('layouts.front.masterReg', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php /* C:\xampp\htdocs\CoWorkingSpace\resources\views/users/upload.blade.php */ ?>