<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header"><?php echo e(__('owners.owners_list')); ?></div>

                <div class="card-body">
                    <?php if(Auth::user()->type == 'admin'): ?>
                        <a href="<?php echo e(route('owner.create')); ?>" class="btn btn-success float-end"><?php echo e(__('owners.add_new')); ?></a>
                    <?php endif; ?>
                    <hr class="mt-5">
                    <table class="table">
                        <thead>
                        <tr>
                            <th><?php echo e(__('owners.name')); ?></th>
                            <th><?php echo e(__('owners.surname')); ?></th>
                            <th><?php echo e(__('owners.phone')); ?></th>
                            <th><?php echo e(__('owners.email')); ?></th>
                            <th><?php echo e(__('owners.address')); ?></th>
                            <th><?php echo e(__('owners.cars')); ?></th>
                            <?php if(Auth::user()->type == 'admin'): ?>
                                <th><?php echo e(__('owners.actions')); ?></th>
                            <?php endif; ?>
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
                                    <?php $__currentLoopData = $owner->cars; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $car): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <div><?php echo e($car->reg_number); ?></div>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </td>
                                <?php if(Auth::user()->type == 'admin'): ?>
                                <td>
                                    <a href="<?php echo e(route('owner.edit', $owner->id)); ?>" class="btn btn-info"><?php echo e(__('owners.edit')); ?></a>
                                    <a href="<?php echo e(route('owner.destroy', $owner->id)); ?>" class="btn btn-danger"><?php echo e(__('owners.delete')); ?></a>
                                </td>
                                <?php endif; ?>
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