<?php $__env->startSection('content'); ?>
<!-- Table -->
<div class="row">
    <div class="col">
        <div class="card shadow">
        <div class="card-header bg-white border-0">
              <div class="row align-items-center">
                <div class="col-8">
                  <h3 class="mb-0">Data Event</h3>
                </div>
                <div class="col-4 text-right">
                    <form action="<?php echo e(url()->current()); ?>" class="sidebar">
                      <div class="input-group float-right mr-3 mb-3">
                        <input type="text" name="keyword" class="form-control" placeholder="Search Nama Tempat  ">
                          <span class="input-group-btn">
                            <button type="submit" name="Search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                            </button>
                          </span>
                        </input>
                      </div>
                    </form>
                </div>
              </div>
        </div>

          <!-- Modal Add Data -->
        <div class="modal fade" id="modal-notification" tabindex="-1" role="dialog" aria-labelledby="modal-notification" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content  bg-secondary shadow border-0">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">
                      <div class="text-center text-muted mb-4">
                    <h3 style="margin-top:-8%">Add Data Venue</h3><hr>
                </div>
                <form method="post" action="<?php echo e(route('venue.store')); ?>" enctype="multipart/form-data">
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
                    <div class="form-group mb-3">
                        <div class="input-group input-group-alternative">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="ni ni-bullet-list-67"></i></span>
                            </div>
                            <input class="form-control" name="nama_tempat" placeholder="Nama Tempat" type="text">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="input-group input-group-alternative">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="ni ni-bullet-list-67"></i></span>
                            </div>
                            <input class="form-control" name="harga" placeholder="Harga" type="number">
                        </div>
                    </div>

                    <div class="form-group">
                            <textarea id="summernote" name="deskripsi" placeholder="Nama Tempat" rows="5"></textarea>
                    </div>
                    
                     <div class="form-group">
                        <div class="input-group input-group-alternative"> 
                        <input type="file" name="image" class="form-control">
                        </div>
                    </div>
                    <div class="text-center">
                        <button class="btn btn-icon btn-3 btn-info  " type="submit">
                            <span class="btn-inner--icon"><i class="ni ni-check-bold"></i></span>
                            
                            <span class="btn-inner--text">Simpan</span>
                            
                        </button>                    
                    </div>
                </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-link text-white ml-auto" data-dismiss="modal">Close</button> 
                    </div>
                </div>
            </div>
        </div>

          <!-- End Modal -->

            <div class="table-responsive">
                    <?php if(session()->get('success')): ?>
                      <div class="alert alert-success alert-close">
                        <?php echo e(session()->get('success')); ?>  
                      </div><br />
                    <?php endif; ?>
                <table id="example2" class="table align-items-center table-flush">
                    <thead class="thead-light">
                        <tr>
                            <th>Action</th>
                            <th>Nama Tempat</th>
                            <th>Image</th>
                            <th>harga</th>
                            <th>Deskripsi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $__currentLoopData = $venue; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                        <tr>
                              <td>
                                 <form action="<?php echo e(route('venue.destroy', $row->id_venue)); ?>" method="post">
                                      <?php echo csrf_field(); ?>
                                      <?php echo method_field('DELETE'); ?>
                                <a onclick="return confirm('Are you sure?')"><button class="btn btn-icon btn-sm btn-danger" type="submit">
                                <span class="btn-inner--icon"><i class="ni ni-bag-17"></i></span>
                                <span class="btn-inner--text">Delete</span>
                                </button></a><br>
                                </form>

                                <a href="<?php echo e(route('venue.edit',$row->id_venue)); ?>"><button class="btn btn-icon btn-sm btn-info" type="button"  style="width:82px;margin-top:4%">
                                <span class="btn-inner--icon"><i class="ni ni-bold-right"></i></span>
                                <span class="btn-inner--text">Update</span>
                                </button></a>
                          
                            </td>            
                            <td><?php echo e($row->nama_tempat); ?></td>
                            <td><img src="images/<?php echo e($row->image); ?>" width="200px" heigth="200px"></td>
                            <td><?php echo e($row->harga); ?></td>
                            <td><?php echo $row->deskripsi; ?></td>
          
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
<?php /* C:\xampp\htdocs\CoWorkingSpace\resources\views/admin/venue/dataVenue.blade.php */ ?>