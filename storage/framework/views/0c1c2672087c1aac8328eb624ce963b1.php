<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><?php echo e(__('Edit car')); ?></div>

                <div class="card-body">
                  <form action="<?php echo e(route('cars.update', $car->id)); ?>" method="post" enctype="multipart/form-data">
                      <?php echo csrf_field(); ?>
                      <?php echo method_field('put'); ?>
                      <div class="mb-3">
                          <label class="form-label"><?php echo e(__('Registration number')); ?></label>
                          <input type="text" class="form-control" name="reg_number" value="<?php echo e($car->reg_number); ?>">
                      </div>
                      <div class="mb-3">
                          <label class="form-label"><?php echo e(__('Brand')); ?></label>
                          <input type="text" class="form-control" name="brand" value="<?php echo e($car->brand); ?>">
                      </div>
                      <div class="mb-3">
                          <label class="form-label"><?php echo e(__('Model')); ?></label>
                          <input type="text" class="form-control" name="model" value="<?php echo e($car->model); ?>">
                      </div>
                      <div class="mb-3">
                          <label class="form-label"><?php echo e(__('Owner')); ?></label>
                          <select name="owner_id" class="form-control">
                              <?php $__currentLoopData = $owners; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $owner): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                  <option value="<?php echo e($owner->id); ?>" <?php echo e($owner->id == $car->owner_id?'selected':''); ?>><?php echo e($owner->name); ?> <?php echo e($owner->surname); ?></option>
                              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                          </select>
                      </div>
                      <hr>
                      <?php if($car->photo == null): ?>
                      <div class="mb-3">
                          <label class="form-label"><?php echo e(__('Photo:')); ?></label>
                          <input type="file" class="form-control" name="photo" value="">
                      </div>
                      <?php else: ?>
                          <label class="form-label"><?php echo e(__('Photo:')); ?></label>
                          <<img src="/storage/<?php echo e($car->photo); ?>" alt=""><br>
                          <input type="file" class="form-control" name="photo" value="">
                          <a class="btn btn-danger" href="<?php echo e(route('cars.deletePhoto', $car->id)); ?>"><?php echo e(__('Delete photo:')); ?></a>
                      <?php endif; ?>
                      <button class="btn btn-success" type="submit"><?php echo e(__('Update entries')); ?></button>
                  </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\marty\draudimas\resources\views/cars/edit.blade.php ENDPATH**/ ?>