<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><?php echo e(__('owners.edit_owner')); ?></div>

                <div class="card-body">
                  <form action="<?php echo e(route('owner.update', $owner->id)); ?>" method="post">
                      <?php echo csrf_field(); ?>
                      <?php echo method_field('put'); ?>
                      <div class="mb-3">
                          <label class="form-label"><?php echo e(__('owners.name')); ?></label>
                          <input type="text" class="form-control" name="name" value="<?php echo e($owner->name); ?>">
                      </div>
                      <div class="mb-3">
                          <label class="form-label"><?php echo e(__('owners.surname')); ?></label>
                          <input type="text" class="form-control" name="surname" value="<?php echo e($owner->surname); ?>">
                      </div>
                      <div class="mb-3">
                          <label class="form-label"><?php echo e(__('owners.phone')); ?></label>
                          <input type="text" class="form-control" name="phone" value="<?php echo e($owner->phone); ?>">
                      </div>
                      <div class="mb-3">
                          <label class="form-label"><?php echo e(__('owners.email')); ?></label>
                          <input type="text" class="form-control" name="email" value="<?php echo e($owner->email); ?>">
                      </div>
                      <div class="mb-3">
                          <label class="form-label"><?php echo e(__('owners.address')); ?></label>
                          <input type="text" class="form-control" name="address" value="<?php echo e($owner->address); ?>">
                      </div>
                      <button class="btn btn-success" type="submit"><?php echo e(__('owners.update')); ?></button>
                  </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\marty\draudimas\resources\views/owners/edit.blade.php ENDPATH**/ ?>