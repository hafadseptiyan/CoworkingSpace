<?php $__env->startSection('content'); ?>
<div class="main-banner" style="background-image: url('<?php echo e(asset('assetsFrontend/uploads/page-header-bg.jpg')); ?>');height:280px">
    <center>
        <div class="jarak"></div>
        <h4 class="judul" style="margin-top:10%">Data Transaksi Anda</h4>
        </b><br>
        <hr class="garisT">
    </center>
</div>
<br><br><br>
    <div class="container">
        <div class="row">
                <div class="col-3 text-right">
                    <form action="<?php echo e(url()->current()); ?>" class="sidebar">
                      <div class="input-group float-right mr-3 mb-3">
                        <input type="text" name="keyword" class="form-control" placeholder="Search Kode Transaksi">
                          <span class="input-group-btn">
                            <button type="submit" name="Search" id="search-btn" class="btn btn-info"><i class="fa fa-search"></i>
                            </button>
                          </span>
                        </input>
                      </div>
                    </form>
                </div><br><br><br><br>
            <div class="table-responsive" style="margin-top:-3%">
                    <?php if(session()->get('success')): ?>
                      <div class="alert alert-success">
                        <?php echo e(session()->get('success')); ?>  
                      </div><br />
                    <?php endif; ?>
                <table class="table table-bordered">
                    <thead class="thead-light">
                        <tr>
                            <th>Action</th>
                            <th>Status</th>
                            <th>Kode Transaksi</th>
                            <th>Venue</th>
                            <th>Total Pembayaran</th>
                            <th>Bukti Pembayaran</th>
                            <th>Tanggal sewa</th>
                            <th>Tanggal Selesai</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $__currentLoopData = $transaksi; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                        <tr>
                              <td>
                     
                                 <form action="<?php echo e(route('home.destroy', $row->id_transaksi)); ?>" method="post">
                                      <?php echo csrf_field(); ?>
                                      <?php echo method_field('DELETE'); ?>
                                    <a onclick="return confirm('Are you sure?')"><button class="btn btn-icon btn-sm btn-danger" type="submit" style="width:108px">
                                    <span class="fa fa-trash"> Delete Data</span></a>
                                </button></a><br>
                                </form>

                                <a href="<?php echo e(route('home.edit',$row->id_transaksi)); ?>"><button class="btn btn-icon btn-sm btn-info" type="button"  style="margin-top:4%">
                                <span class="fa fa-upload"> Upload Bukti</span>
                                </button></a>
                          
                            </td>      
                            <td>
                                <?php 
                                if($row->status_booking == 'belum terverifikasi') {?>
                                   <button class="btn btn-danger btn-sm"><?php echo e($row->status_booking); ?></button>
                                <?php } else if($row->status_booking == 'booking') {?>
                                   <button class="btn btn-success btn-sm"><?php echo e($row->status_booking); ?></button>

                                <?php } ?>
                                
                                
                            </td>
                            <td><?php echo e($row->kode_transaksi); ?></td>
                            <td><?php echo e($row->get_venue->nama_tempat); ?></td>
                            <td>Rp. <?php echo e($row->total_pembayaran); ?>,00</td>
                            <td>
                                <?php 
                                if($row->bukti_pembayaran == null) {?>
                                <button class="btn btn-info btn-sm">Bukti Pembayaran Belum Diupload</button>
                                <?php } else {?>
                                <a href="images/<?php echo e($row->bukti_pembayaran); ?>"><img src="images/<?php echo e($row->bukti_pembayaran); ?>" width="200px" heigth="200px"></a>
                                <?php } ?>

                           </td>
                            <td><?php echo e($row->tgl_sewa); ?></td>
                            <td><?php echo e($row->tgl_selesai); ?></td>
                        </tr>
                       <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                    </tbody>
                </table>
            </div>
      
    </div>
    <!-- end col -->
</div>
</div><br><br><br><br><br><br><br><br><br>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.front.masterReg', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php /* C:\xampp\htdocs\CoWorkingSpace\resources\views/users/dataTransaksiUser.blade.php */ ?>