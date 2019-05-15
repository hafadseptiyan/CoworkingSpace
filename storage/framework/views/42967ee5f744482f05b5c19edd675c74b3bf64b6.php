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
                        <input type="text" name="keyword" class="form-control" placeholder="Search Nama Event ">
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
                            <th>Nama</th>
                            <th>Nama Event</th>
                            <th>Jenis Event</th>
                            <th>Venue</th>
                            <th>Image</th>
                            <th>Pemateri</th>
                            <th>Waktu Event</th>
                            <th>Deskripsi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $__currentLoopData = $event; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                        <tr>
                              <td>
                                 <form action="<?php echo e(route('event.destroy', $row->id_event)); ?>" method="post">
                                      <?php echo csrf_field(); ?>
                                      <?php echo method_field('DELETE'); ?>
                                <a onclick="return confirm('Are you sure?')"><button class="btn btn-icon btn-sm btn-danger" type="submit">
                                <span class="btn-inner--icon"><i class="ni ni-bag-17"></i></span>
                                <span class="btn-inner--text">Delete</span>
                                </button></a><br>
                                </form>

                                <a href="<?php echo e(route('event.edit',$row->id_event)); ?>"><button class="btn btn-icon btn-sm btn-info" type="button"  style="width:82px;margin-top:4%">
                                <span class="btn-inner--icon"><i class="ni ni-bold-right"></i></span>
                                <span class="btn-inner--text">Update</span>
                                </button></a>
                          
                            </td>      
                            <td><?php echo e($row->get_users->nama); ?></td>
                            <td><?php echo e($row->nama_event); ?></td>
                            <td><?php echo e($row->jenis); ?></td>
                            <td><?php echo e($row->get_venue->nama_tempat); ?></td>
                            <td><a href="images/<?php echo e($row->image_event); ?>"><img src="images/<?php echo e($row->image_event); ?>" width="200px" heigth="200px"></a></td>
                            <td><?php echo e($row->pemateri); ?></td>
                            <td><?php echo e($row->waktu_event); ?></td>
                            <td><?php echo $row->deskripsi_event; ?></td>
                        </tr>
                       <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin.masterAdmin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php /* C:\xampp\htdocs\CoWorkingSpace\resources\views/admin/event/dataEvent.blade.php */ ?>