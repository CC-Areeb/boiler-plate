<?php

use App\Helpers\Media;

?>



<?php $__env->startSection('content'); ?>
<style>
    .canditate-des {
        background-color: #fff;
        z-index: 99;
    }

    .canditate-des {
        position: relative;
        display: inline-block;
        border: 2px solid #2E55FA;
        outline-offset: 3px;
        border-radius: 100%;
        width: 150px;
        height: 150px;
    }

    .canditate-des img {
        border-radius: 100%;
        width: 100%;
        height: 100%;
        background-color: #fff;
        padding: 5px;
    }

    .canditate-des::before {
        content: "";
        position: absolute;
        background-color: #2e55fa;
        height: 115%;
        width: 2px;
        left: 50%;
        top: -10px;
        z-index: -1;
    }

    .canditate-des::after {
        content: "";
        position: absolute;
        left: -15px;
        top: 50%;
        width: 120%;
        background-color: #2e55fa;
        height: 2px;
        z-index: -1;
    }

    .canditate-des .upload-link {
        position: absolute;
        width: 45px;
        height: 45px;
        line-height: 45px;
        background: #fff;
        top: 0;
        right: 0;
        box-shadow: 0 0 10px 0 rgb(0 24 128 / 10%);
        border-radius: 100%;
        color: #2E55FA;
        overflow: hidden;
    }

    .update-flie {
        position: absolute;
        opacity: 0;
        z-index: 0;
        width: 100px;
        cursor: pointer;
        left: 0;
    }

    .candidate-title {
        margin-top: 25px;
    }

    .candidate-title h4 {
        font-weight: 700;
    }

    .candidate-title h4 a {
        color: #313131;
        text-decoration: none;
        transition: 400ms all;
    }

    .editDP {
        text-align: center;
        padding: 50px;
    }

    .candidate-title p a {
        color: #FF9100;
        font-weight: 600;
        text-decoration: none;
        transition: 400ms all;
    }

    form.shadow.profile-form {
        padding: 50px;
    }

    .form-field.changePassword {
        margin-top: 35px;
    }

    .form-field.changePassword button {
        background-color: #707070;
        border-color: #707070;
        width: 100%;
        padding: 12px 0;
    }

    #restPaasswrodModal h5#exampleModalLabel {
        width: 100%;
        text-align: center;
        font-size: 35px;
        color: #000;
    }

    .form-field.modalBTN {
        text-align: center;
    }

    #restPaasswrodModal .modal-body {
        padding: 50px;
    }

    .job-bx-title.clearfix {
        margin-bottom: 30px;
    }
</style>

<div class="container-fluid">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?php echo e(route('home')); ?>">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Profile</li>
        </ol>
    </nav>
    <div class="row">
        <div class="col-md-12">
            <?php if(session()->has('flash_error')): ?>
            <div class="alert alert-danger"><?php echo e(session()->get('flash_error')); ?></div>
            <?php endif; ?>
            <?php if(session()->has('flash_success')): ?>
            <div class="alert alert-success"><?php echo e(session()->get('flash_success')); ?></div>
            <?php endif; ?>
        </div>
    </div>
    <form method="POST" enctype="multipart/form-data">
        <?php echo csrf_field(); ?>
        <div class="row justify-content-center">
            <div class="col-md-3">
                <div class="card shadow mb-4">
                    <div class="card-body">
                        <div class="editDP">
                            <div class="canditate-des">
                                <a href="javascript:void(0);" class="profile-image-label">
                                    <img id="profile-image" alt="<?php echo e(auth()->user()->first_name); ?> <?php echo e(auth()->user()->last_name); ?>" src="<?php echo e(Media::convertFullUrl(auth()->user()->profile_picture)); ?>" />
                                </a>
                                <div class="upload-link text-center">
                                    <input type="file" class="update-flie" name="profile_picture" onchange="document.getElementById('profile-image').src = window.URL.createObjectURL(this.files[0])" />
                                    <i class="fa fa-camera"></i>
                                </div>
                            </div>
                            <div class="candidate-title">
                                <h4 class="m-b5"><a href="javascript:void(0);"><?php echo e(auth()->user()->first_name); ?> <?php echo e(auth()->user()->last_name); ?></a></h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card shadow mb-4">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="first_name">First Name</label>
                                    <input id="first_name" type="text" name="first_name" value="<?php echo e(old('first_name') ?? auth()->user()->first_name); ?>" class="form-control <?php $__errorArgs = ['first_name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" />
                                    <?php $__errorArgs = ['first_name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($message); ?></strong>
                                    </span>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="last_name">Last Name</label>
                                    <input id="last_name" type="text" name="last_name" value="<?php echo e(old('last_name') ?? auth()->user()->last_name); ?>" class="form-control <?php $__errorArgs = ['last_name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" />
                                    <?php $__errorArgs = ['last_name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($message); ?></strong>
                                    </span>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input id="email" type="email" value="<?php echo e(auth()->user()->email); ?>" class="form-control" readonly disabled />
                                </div>
                            </div>
                        </div>
                        <hr />
                        <div class="row mt-4 mb-2">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="password">Password</label>
                                    <input id="password" type="password" name="password" value="<?php echo e(old('password')); ?>" class="form-control <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" />
                                    <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($message); ?></strong>
                                    </span>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="password-confirm">Confirm Password</label>
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" autocomplete="new-password" />
                                </div>
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary">Save Changes</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Areeb\D\laravel-boilerplate\Laravel-Boilerplate-main\resources\views/admin/profile/index.blade.php ENDPATH**/ ?>