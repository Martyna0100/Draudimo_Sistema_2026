<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header"><?php echo e(__('Cars list')); ?></div>

                <div class="card-body">
                    <?php if(Auth::user()->type == 'admin'): ?>
                        <a href="<?php echo e(route('cars.create')); ?>" class="btn btn-success float-end"><?php echo e(__('Add new car')); ?></a>
                    <?php endif; ?>
                    <hr class="mt-5">
                    <table class="table">
                        <thead>
                        <tr>
                            <th style="width:300px;"></th>
                            <th><?php echo e(__('Registration number')); ?></th>
                            <th><?php echo e(__('Brand')); ?></th>
                            <th><?php echo e(__('Model')); ?></th>
                            <th><?php echo e(__('Owner')); ?></th>
                            <?php if(Auth::user()->type == 'admin'): ?>
                                <th><?php echo e(__('Actions')); ?></th>
                            <?php endif; ?>
                        </tr>
                        </thead>
                        <tbody>
                        <?php $__currentLoopData = $cars; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $car): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td>
                                    <?php if($car->photo != null): ?>
                                    <img src="/storage/<?php echo e($car->photo); ?>" alt="" width="100%">
                                    <?php endif; ?>
                                </td>
                                <td><?php echo e($car->reg_number); ?></td>
                                <td><?php echo e($car->brand); ?></td>
                                <td><?php echo e($car->model); ?></td>
                                <td><?php echo e($car->owner->name); ?> <?php echo e($car->owner->surname); ?></td>
                                <td>
                                    <a href="<?php echo e(route('cars.edit', $car->id)); ?>" class="btn btn-info"><?php echo e(__('Edit')); ?></a>
                                    <a href="<?php echo e(route('cars.destroy', $car->id)); ?>" class="btn btn-danger"><?php echo e(__('Delete')); ?></a>
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

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\marty\draudimas\resources\views/cars/index.blade.php ENDPATH**/ ?>