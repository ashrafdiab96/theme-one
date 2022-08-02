<?php $__env->startSection('title'); ?>
    <?php echo e(__('app.f_d')); ?> | <?php echo e(__('app.services')); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="container-fluid p-0 m-0">
    <div class="services-header" style="height: 200px; background-image: url('<?php echo e(asset('assets/upload/services/'.$home->services_bc)); ?>')">
        <div class="col-md-4 text-center">
            <a href="<?php echo e(url('/')); ?>" class="text-uppercase p-0 m-0"><?php echo e(__('app.home')); ?></a>
            <h3 class="text-capitalize p-0 m-0"><?php echo e(__('app.services')); ?></h3>
        </div>
        <div class="col-md-8"></div>
    </div>

    <div class="services-content">
        <div class="container">
            <div class="row">
                <?php $__currentLoopData = $services; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $service): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="col-md-4">
                        <div class="service">
                            <a href="<?php echo e(url('service/'.$service->id)); ?>">
                                <div class="service-img">
                                    <img src="<?php echo e(asset('assets/upload/services/'.$service->image)); ?>" alt="Service Image">
                                </div>
                                <div class="service-desc">
                                    <h3 class="text-capitalize p-0 m-0">
                                        <?php if(app()->getLocale() == 'en'): ?>
                                            <?php echo e($service->name_en); ?>

                                        <?php else: ?>
                                            <?php echo e($service->name_ar); ?>

                                        <?php endif; ?>
                                    </h3>
                                </div>
                                <div class="service-overlay">
                                    <i class="fas fa-plus-circle fa-2x"></i>
                                </div>
                            </a>
                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\F&D_Eng\resources\views/client/services.blade.php ENDPATH**/ ?>