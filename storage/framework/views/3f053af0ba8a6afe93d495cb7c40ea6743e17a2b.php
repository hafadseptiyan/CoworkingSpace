<?php $__env->startSection('content'); ?><div class="col-xl-12 order-xl-1">
          <div class="card bg-secondary shadow">
            <div class="card-header bg-white border-0">
              <div class="row align-items-center">
                <div class="col-8">
                  <h3 class="mb-0">Edit Data User</h3>
                </div>
  
              </div>
            </div>
            <div class="card-body">
              <form method="post" action="<?php echo e(route('event.update',$event->id_event)); ?>" enctype="multipart/form-data"> 
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
                <div class="pl-lg-4">
                  <div class="row">
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="input-username">Nama Event</label>
                        <input type="text" name="nama_event" value="<?php echo e($event->nama_event); ?>" class="form-control form-control-alternative">
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="input-email">Pemateri</label>
                        <input type="text" name="pemateri" value="<?php echo e($event->pemateri); ?>" class="form-control form-control-alternative">                    
                        </div>
                    </div>
                    <div class="col-lg-12">
                      <div class="form-group">
                        <label class="form-control-label" for="input-username">Deskripsi</label>
                         <textarea id="summernote" name="deskripsi_event" rows="4"><?php echo $event->deskripsi_event; ?></textarea>
                        </div>
                    </div>

                    <div class="col-lg-12">
                      <div class="form-group">
                        <label class="form-control-label" for="input-username">Image Event</label>
                        <input type="file" class="form-control" name="image_event">
                        </div>
                    </div>
            
           
                  </div>
                </div>               
                <div class="pl-lg-4">
                  <div class="form-group">
                    <br>
                    
                       <button class="btn btn-icon btn-3 btn-info  " type="submit">
                            <span class="btn-inner--icon"><i class="ni ni-check-bold"></i></span>
                            
                            <span class="btn-inner--text">Update</span>
                            
                        </button>  
                  </div>
                </div>
                
              </form>
            </div>
          </div>
        </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin.masterAdmin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php /* C:\xampp\htdocs\CoWorkingSpace\resources\views/admin/event/editEvent.blade.php */ ?>