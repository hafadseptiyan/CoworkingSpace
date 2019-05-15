<?php $__env->startSection('content'); ?>
<!-- Table -->
<div class="row">
    <div class="col">
        <div class="card shadow">
     <div class="card-header bg-white border-0">
              <div class="row align-items-center">
                <div class="col-8">
                  <h3 class="mb-0">Data Transaksi</h3>
                </div>
                <div class="col-4 text-right">
                    <form action="<?php echo e(url()->current()); ?>" class="sidebar">
                      <div class="input-group float-right mr-3 mb-3">
                        <input type="text" name="keyword" class="form-control" placeholder="Search Kode Transaksi">
                          <span class="input-group-btn">
                            <button type="submit" name="Search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                            </button>
                          </span>
                        </input>
                      </div>
                    </form>
                </div>
              </div>
        </div><br>

            <div class="table-responsive" style="margin-top:-3%">
                    <?php if(session()->get('success')): ?>
                      <div class="alert alert-success">
                        <?php echo e(session()->get('success')); ?>  
                      </div><br />
                    <?php endif; ?>
                <table id="example2" class="table align-items-center table-flush">
                    <thead class="thead-light">
                        <tr>
                            <th>Action</th>
                            <th>Status</th>
                            <th>Kode Transaksi</th>
                            <th>Nama Pemesan</th>
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
                     
                                 <form action="<?php echo e(route('transaksi.destroy', $row->id_transaksi)); ?>" method="post" id="confirm_delete">
                                      <?php echo csrf_field(); ?>
                                      <?php echo method_field('DELETE'); ?>
                                <a onclick="return confirm('Are you sure?')"><button class="btn btn-icon btn-sm btn-danger" type="submit">
                                    <span class="btn-inner--icon"><i class="ni ni-bag-17"></i></span>
                                    <span class="btn-inner--text">Delete</span>
                                </button></a><br>
                                </form>

                                <a href="<?php echo e(route('transaksi.edit',$row->id_transaksi)); ?>"><button class="btn btn-icon btn-sm btn-info" type="button"  style="width:82px;margin-top:4%">
                                <span class="btn-inner--icon"><i class="ni ni-bold-right"></i></span>
                                <span class="btn-inner--text">Update</span>
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
                            <td><?php echo e($row->get_users->nama); ?></td>
                            <td><?php echo e($row->get_venue->nama_tempat); ?></td>
                            <td><?php echo e($row->total_pembayaran); ?></td>
                            <td><a href="images/<?php echo e($row->bukti_pembayaran); ?>"><img src="images/<?php echo e($row->bukti_pembayaran); ?>" width="200px" heigth="200px"></a></td>
                            <td><?php echo e($row->tgl_sewa); ?></td>
                            <td><?php echo e($row->tgl_selesai); ?></td>
                        </tr>
                       <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    $(document).ready(function(){
        $( "#confirm_delete" ).submit(function( event ) {
            event.preventDefault();
            swal({
                title: 'Are you sure?',
                text: "Please click confirm to delete this item",
                type: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!',
                cancelButtonText: 'No, cancel!',
                confirmButtonClass: 'btn btn-success',
                cancelButtonClass: 'btn btn-danger',
                buttonsStyling: true
            }).then(function() {
                    $("#confirm_delete").off("submit").submit();
            }, function(dismiss) {
                // dismiss can be 'cancel', 'overlay',
                // 'close', and 'timer'
                if (dismiss === 'cancel') {
                    swal('Cancelled', 'Delete Cancelled :)', 'error');
                }
            })
        });
    });
</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin.masterAdmin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php /* C:\xampp\htdocs\CoWorkingSpace\resources\views/admin/transaksi/dataTransaksi.blade.php */ ?>