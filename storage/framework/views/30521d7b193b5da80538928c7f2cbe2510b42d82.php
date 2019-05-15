<?php $__env->startSection('content'); ?><div class="col-xl-12 order-xl-1">
          <div class="card bg-secondary shadow">
            <div class="card-header bg-white border-0">
              <div class="row align-items-center">
                <div class="col-8">
                  <h3 class="mb-0">Edit Data Tempat</h3>
                </div>
  
              </div>
            </div>
            <div class="card-body">
              <form>
                <div class="pl-lg-4">
                  <div class="row">
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="input-username">Nama Tempat</label>
                        <input type="text" id="input-username" class="form-control form-control-alternative" placeholder="Nama Tempat">
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="input-email">Jenis</label>
                            <select class="form-control" name="jenis">
                              <option value="Startup Place">Startup Place</option>
                              <option value="University Room">University Room</option>
                              <option value="Digital Lounge">Digital Lounge</option>
                            </select>                      
                        </div>
                    </div>
                  </div>
                </div>               
                <div class="pl-lg-4">
                  <div class="form-group">
                    <label>Deskripsi</label>
                    <textarea rows="4" class="form-control form-control-alternative">A beautiful Dashboard for Bootstrap 4. It is Free and Open Source.</textarea>
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
<?php /* C:\xampp\htdocs\CoWorkingSpace\resources\views/venue/createVenue.blade.php */ ?>