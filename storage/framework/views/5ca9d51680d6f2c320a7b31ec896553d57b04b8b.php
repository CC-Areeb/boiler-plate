<?php $__env->startSection('content'); ?>
<div class="container-fluid">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?php echo e(route('home')); ?>">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Subscriptions</li>
        </ol>
    </nav>
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Subscriptions</h6>
        </div>
        <div class="card-body">
            <?php if(session()->has('flash_error')): ?>
            <div class="alert alert-danger"><?php echo e(session()->get('flash_error')); ?></div>
            <?php endif; ?>

            <?php if(session()->has('flash_success')): ?>
            <div class="alert alert-success"><?php echo e(session()->get('flash_success')); ?></div>
            <?php endif; ?>
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>...</th>
                            <th>Created At</th>
                            <th>User</th>
                            <th>Plan</th>
                            <th>Amount</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>...</th>
                            <th>Created At</th>
                            <th>User</th>
                            <th>Plan</th>
                            <th>Amount</th>
                            <th>Status</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        <?php $__currentLoopData = $payments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $payment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><?php echo e($payment->id); ?></td>
                            <td><?php echo e($payment->getCreatedAtForHumans()); ?></td>
                            <td>
                                <?php if($payment->User): ?>
                                <a href="<?php echo e(route('users.view', $payment->user_id)); ?>"><?php echo e($payment->User->first_name ." ". $payment->User->last_name); ?></a>
                                <?php else: ?>
                                -
                                <?php endif; ?>
                            </td>
                            <td>
                                <?php if($payment->Plan): ?>
                                <a href="<?php echo e(route('plans.index', $payment->Plan->id)); ?>"><?php echo e($payment->Plan->name); ?></a>
                                <?php else: ?>
                                -
                                <?php endif; ?>
                            </td>
                            <td>$<?php echo e($payment->amount); ?></td>
                            <td><span class="badge badge-success">COMPLETED</span></td>
                        </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Areeb\D\laravel-boilerplate\Laravel-Boilerplate-main\resources\views/admin/subscriptions/index.blade.php ENDPATH**/ ?>