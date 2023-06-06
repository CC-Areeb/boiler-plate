<?php $__env->startSection('content'); ?>
<div class="container-fluid">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?php echo e(route('home')); ?>">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Users</li>
        </ol>
    </nav>
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Users</h6>
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
                            <th>Name</th>
                            <th>Email</th>
                            <th>Country</th>
                            <th>State</th>
                            <th>City</th>
                            <th>Status</th>
                            <th>...</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>...</th>
                            <th>Created At</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Country</th>
                            <th>State</th>
                            <th>City</th>
                            <th>Status</th>
                            <th>...</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><?php echo e($user->id); ?></td>
                            <td><?php echo e($user->getCreatedAtForHumans()); ?></td>
                            <td><?php echo e($user->first_name); ?> <?php echo e($user->last_name); ?></td>
                            <td><?php echo e($user->email); ?></td>
                            <td><?php echo e($user->Country ? $user->Country->name : '-'); ?></td>
                            <td><?php echo e($user->State ? $user->State->name : '-'); ?></td>
                            <td><?php echo e($user->City ? $user->City->name : '-'); ?></td>
                            <td>
                                <?php if($user->status == 1): ?>
                                <span class="badge badge-success">Activated</span>
                                <?php else: ?>
                                <span class="badge badge-secondary">Disabled</span>
                                <?php endif; ?>
                            </td>
                            <td>
                                <a href="<?php echo e(route('users.view', $user->id)); ?>">View</a> |
                                <a href="<?php echo e(route('users.view', $user->id)); ?>">Edit</a>
                            </td>
                        </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Areeb\D\laravel-boilerplate\Laravel-Boilerplate-main\resources\views/admin/users/index.blade.php ENDPATH**/ ?>