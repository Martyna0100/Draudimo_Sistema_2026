<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Savininkų sąrašas</div>

                <div class="card-body">
                  <form action="<?php echo e(route('owner.store')); ?>" method="post">
                      <?php echo csrf_field(); ?>
                      <div class="mb-3">
                          <label class="form-label">Vardas</label>
                          <input type="text" class="form-control" name="name" value="">
                      </div>
                      <div class="mb-3">
                          <label class="form-label">Pavardė</label>
                          <input type="text" class="form-control" name="surname" value="">
                      </div>
                      <div class="mb-3">
                          <label class="form-label">Telefono numeris</label>
                          <input type="text" class="form-control" name="phone" value="">
                      </div>
                      <div class="mb-3">
                          <label class="form-label">El. paštas</label>
                          <input type="text" class="form-control" name="email" value="">
                      </div>
                      <div class="mb-3">
                          <label class="form-label">Adresas</label>
                          <input type="text" class="form-control" name="address" value="">
                      </div>
                      <button class="btn btn-success" type="submit">Pridėti</button>
                  </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\marty\draudimas\resources\views/owners/create.blade.php ENDPATH**/ ?>