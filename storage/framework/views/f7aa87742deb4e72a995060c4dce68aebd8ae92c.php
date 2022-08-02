<?php $__env->startSection('title'); ?>
    <?php echo e(__('app.f_d')); ?> | <?php echo e(__('app.contact')); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="container-fluid p-0 m-0">
    <div class="contacts-header" style="height: 200px; background-image: url('<?php echo e(asset('assets/upload/contacts/'.$contacts->background)); ?>')">
        <div class="col-md-4 text-center">
            <a href="<?php echo e(url('/')); ?>" class="text-uppercase p-0 m-0"><?php echo e(__('app.home')); ?></a>
            <h3 class="text-capitalize p-0 m-0"><?php echo e(__('app.contact')); ?></h3>
        </div>
        <div class="col-md-8"></div>
    </div>

    <div class="contacts-content">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <p class="text-muted text-capitalize p-0 m-0"><?php echo e(__('app.why_us')); ?></p>
                    <p class="p-0 m-0">
                        <?php if(app()->getLocale() == 'en'): ?>
                            <?php echo $contacts->why_us; ?>

                        <?php else: ?>
                            <?php echo $contacts->why_us_ar; ?>

                        <?php endif; ?>
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="location">
                        <h3 class="text-capitalize loc-title"><?php echo e(__('app.location')); ?></h3>
                        <p class="text-capitalize comp-name"><?php echo e(__('app.f_d')); ?></p>
                        <p>
                            <i class="fas fa-location-arrow"></i>
                            <?php if(app()->getLocale() == 'en'): ?>
                                <?php echo e($contacts->address_en); ?>

                            <?php else: ?>
                                <?php echo e($contacts->address_ar); ?>

                            <?php endif; ?>
                        </p>
                    </div>
                    <div class="communication">
                        <h3 class="text-capitalize loc-title"><?php echo e(__('app.communication')); ?></h3>
                        <p>
                            <i class="fas fa-phone"></i>
                            <?php echo e($contacts->mobile); ?>

                        </p>
                        <p>
                            <i class="fas fa-envelope"></i>
                            <?php echo e($contacts->email); ?>

                        </p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="contacts-form">
                        <form action="" method="POST" class="form-group w-75 m-auto">
                            <div class="form-group">
                                <label for="my-input" class="text-capitalize">
                                    <?php echo e(__('app.name')); ?>

                                    <span class="form-req">*</span>
                                </label>
                                <input class="form-control" type="text" name="name">
                            </div>
                            <div class="form-group">
                                <label for="my-input" class="text-capitalize">
                                    <?php echo e(__('app.phone')); ?>

                                </label>
                                <input class="form-control" type="text" name="phone">
                            </div>
                            <div class="form-group">
                                <label for="my-input" class="text-capitalize">
                                    <?php echo e(__('app.email')); ?>

                                    <span class="form-req">*</span>
                                </label>
                                <input class="form-control" type="text" name="email">
                            </div>
                            <div class="form-group">
                                <label for="my-input" class="text-capitalize">
                                    <?php echo e(__('app.message')); ?>

                                    <span class="form-req">*</span>
                                </label>
                                <textarea class="form-control" name="message" rows="5"></textarea>
                            </div>
                            <div class="form-group text-center">
                                <button type="submit" class="btn btn-success">
                                    <span class="text-capitalize"><?php echo e(__('app.send')); ?></span>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\F&D_Eng\resources\views/client/contacts.blade.php ENDPATH**/ ?>