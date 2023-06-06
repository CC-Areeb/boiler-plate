<?php $__env->startSection('content'); ?>
<div class="container-fluid">
    <div class="d-flex justify-content-between align-items-center">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?php echo e(route('home')); ?>">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Manage Plans</li>
            </ol>
        </nav>
        <div>
            <a href="<?php echo e(route('plans.create')); ?>" class="btn btn-primary">Create New Plan</a>
        </div>
    </div>
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Manage Plans</h6>
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
                            <th width="100">...</th>
                            <th>Name</th>
                            <th>Slug</th>
                            <th>Price</th>
                            <th>Acquired Leads</th>
                            <th width="160">Created At</th>
                            <th width="160">...</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>...</th>
                            <th>Name</th>
                            <th>Slug</th>
                            <th>Price</th>
                            <th>Acquired Leads</th>
                            <th>Created At</th>
                            <th>...</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        <?php $__currentLoopData = $plans; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $plan): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><?php echo e($plan->id); ?></td>
                            <td><?php echo e($plan->name); ?></td>
                            <td><?php echo e($plan->slug); ?></td>
                            <td>$<?php echo e($plan->price); ?></td>
                            <td><b><?php echo e($plan->price / $lead_price); ?></b></td>
                            <td><?php echo e($plan->getCreatedAtForHumans()); ?></td>
                            <td>
                                <a href="<?php echo e(route('plans.edit', $plan->id)); ?>">View</a> |
                                <a href="<?php echo e(route('plans.edit', $plan->id)); ?>">Edit</a> |
                                <a href="<?php echo e(route('plans.delete', $plan->id)); ?>" style="color: red" onclick="return confirm('Are you sure?')">Delete</a>
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
<?php echo $__env->make('layouts.dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Areeb\D\laravel-boilerplate\Laravel-Boilerplate-main\resources\views/admin/plans/index.blade.php ENDPATH**/ ?>