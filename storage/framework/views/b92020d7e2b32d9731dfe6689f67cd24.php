<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Savininko redagavimas</div>

                <div class="card-body">
                  <form action="<?php echo e(route('owner.update', $owner->id)); ?>" method="post">
                      <?php echo csrf_field(); ?>
                      <div class="mb-3">
                          <label class="form-label">Vardas</label>
                          <input type="text" class="form-control" name="name" value="<?php echo e($owner->name); ?>">
                      </div>
                      <div class="mb-3">
                          <label class="form-label">Pavardė</label>
                          <input type="text" class="form-control" name="surname" value="<?php echo e($owner->surname); ?>">
                      </div>
                      <div class="mb-3">
                          <label class="form-label">Telefono numeris</label>
                          <input type="text" class="form-control" name="phone" value="<?php echo e($owner->phone); ?>">
                      </div>
                      <div class="mb-3">
                          <label class="form-label">El. paštas</label>
                          <input type="text" class="form-control" name="email" value="<?php echo e($owner->email); ?>">
                      </div>
                      <div class="mb-3">
                          <label class="form-label">Adresas</label>
                          <input type="text" class="form-control" name="address" value="<?php echo e($owner->address); ?>">
                      </div>
                      <button class="btn btn-success" type="submit">Atnaujinti įrašus</button>
                  </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\marty\draudimas\resources\views/owners/edit.blade.php ENDPATH**/ ?>