<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Savininkų sąrašas</div>

                <div class="card-body">
                  <a href="<?php echo e(route('owner.create')); ?>" class="btn btn-success float-end">Pridėti naują savininką</a>
                    <hr class="mt-5">
                    <table class="table">
                        <thead>
                        <tr>
                            <th>Vardas</th>
                            <th>Pavardė</th>
                            <th>Telefono numeris</th>
                            <th>El. paštas</th>
                            <th>Adresas</th>
                            <th>Veiksmai</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php $__currentLoopData = $owners; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $owner): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><?php echo e($owner->name); ?></td>
                                <td><?php echo e($owner->surname); ?></td>
                                <td><?php echo e($owner->phone); ?></td>
                                <td><?php echo e($owner->email); ?></td>
                                <td><?php echo e($owner->address); ?></td>
                                <td>
                                    <a href="<?php echo e(route('owner.edit', $owner->id)); ?>" class="btn btn-info">Redaguoti</a>
                                    <a href="<?php echo e(route('owner.destroy', $owner->id)); ?>" class="btn btn-danger">Ištrinti</a>
                                </td>
                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\marty\draudimas\resources\views/owners/index.blade.php ENDPATH**/ ?>