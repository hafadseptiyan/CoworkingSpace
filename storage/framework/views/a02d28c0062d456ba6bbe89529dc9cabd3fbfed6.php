<!DOCTYPE html>
<html>
<head>
    <title>Notifikasi Email</title>
    <link rel="stylesheet" href="<?php echo e(asset('assetsFrontend/css/bootstrap.min.css')); ?>">

</head>
<body>
    <h2>Anda telah membuat event pada : </h2> <hr><br>
    <div class="row">
        <div class="col-md-6">
            <h4>Nama Event  : <?php echo e($nama_event); ?></h4><hr>
            <h4>Jenis Event : <?php echo e($jenis); ?></h4><hr>
            <h4>Waktu Event : <?php echo e($waktu_event); ?></h4><hr>
            <h4>Deskripsi Event : <?php echo $deskripsi_event; ?></h4><hr>
        </div>
    
    </div>
    <h3>Thanks For Using Us @onNextCoworking</h3>
</body>
</html>
<?php /* C:\xampp\htdocs\CoWorkingSpace\resources\views/notif_email.blade.php */ ?>