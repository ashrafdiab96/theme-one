<?php $__env->startSection('admin-title'); ?>
    Login
<?php $__env->stopSection(); ?>

<?php $__env->startSection('main-admin-content'); ?>
<div class="login-page">
    <div class="container">
        <div class="row justify-content-center align-items-center">
            <div class="col-md-8">
                <div class="card admin-form">
                    <div class="card-header">
                        <h5 class="text-uppercase text-center p-0 m-0">Admin Dashboard</h5>
                    </div>

                    <div class="card-body">
                        <?php if(session()->has('login_error')): ?>
                        <div class="alert alert-danger">
                            <?php echo e(session()->get('login_error')); ?>

                        </div>
                        <?php endif; ?>
                        <form method="POST" action="<?php echo e(url('/admin/handle_login')); ?>">
                            <?php echo csrf_field(); ?>

                            <div class="row mb-3">
                                <label for="email" class="col-md-3 col-form-label text-md-end"><?php echo e(__('Email Address')); ?></label>

                                <div class="col-md-7">
                                    <input id="email" type="email" class="form-control <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="email" value="<?php echo e(old('email')); ?>" required autocomplete="email" autofocus>

                                    <?php $__errorArgs = ['email'];
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

                            <div class="row mb-3">
                                <label for="password" class="col-md-3 col-form-label text-md-end"><?php echo e(__('Password')); ?></label>

                                <div class="col-md-7">
                                    <input id="password" id="password" type="password" class="form-control <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="password" required autocomplete="current-password">
                                    <a id="showPassword">
                                        <i class="fas fa-eye"></i>
                                    </a>
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

                            

                            

                            <div class="row mb-0">
                                <div class="col-md-8 offset-md-3">
                                    <button type="submit" class="btn btn-success btn-sm btn-flat">
                                        Login
                                    </button>

                                    <br>

                                    
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('admin-js'); ?>
    <script>
        let passInp = document.getElementById('password');
        $('#showPassword').on('click', () => {
            passInp.type = passInp.type == 'password' ? 'text' : 'password';
        });
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('adminLayouts.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\F&D_Eng\resources\views/auth/login.blade.php ENDPATH**/ ?>