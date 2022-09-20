<?php $__env->startSection('title'); ?>
    <?php echo e(__('app.f_d')); ?> | <?php echo e(__('app.cmp_prof')); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="container p-0 m-auto">
    <div class="profile-header" style="height: 200px; background-image: url('<?php echo e(asset('assets/upload/profile/'.$profile->background)); ?>')">
        <div class="col-md-4 text-center">
            <a href="<?php echo e(url('/')); ?>" class="text-uppercase p-0 m-0"><?php echo e(__('app.home')); ?></a>
            <h3 class="text-capitalize p-0 m-0"><?php echo e(__('app.cmp_prof')); ?></h3>
        </div>
        <div class="col-md-8"></div>
    </div>
</div>
<div class="profile-content">
    <div class="container">
    auto   <div class="profile-title">
            <h3 class="text-capitalize"><?php echo e(__('app.mission')); ?></h3>
        </div>
        <div class="profile-desc">
            <p>
                <?php if(app()->getLocale() == 'en'): ?>
                    <?php echo $profile->missions_en; ?>

                <?php else: ?>
                    <?php echo $profile->missions_ar; ?>

                <?php endif; ?>
            </p>
        </div>
    </div>

    <div class="container">
    auto   <div class="values-header">
            <h3 class="text-capitalize"><?php echo e(__('app.our_values')); ?></h3>
        </div>
        <div class="values-diagram">
            <div class="anyone">
                <?php $__currentLoopData = $values; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php if(app()->getLocale() == 'en'): ?>
                        <a class="sc_object"><?php echo e($value->value_en); ?></a>
                    <?php else: ?>
                        <a class="sc_object"><?php echo e($value->value_ar); ?></a>
                    <?php endif; ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <a class="sc_center"><?php echo e(__('app.values')); ?></a>
            </div>
        </div>
    </div>

    <div class="container">
    auto   <div class="vision-title">
            <h3 class="text-capitalize"><?php echo e(__('app.vision')); ?></h3>
        </div>
        <div class="vision-desc">
            <p>
                <?php if(app()->getLocale() == 'en'): ?>
                    <?php echo $profile->vision_en; ?>

                <?php else: ?>
                    <?php echo $profile->vision_ar; ?>

                <?php endif; ?>
            </p>
        </div>
    </div>

    <div class="container">
    auto   <div class="strength-title">
            <h3 class="text-capitalize"><?php echo e(__('app.strength')); ?></h3>
        </div>
        <div class="strength-desc">
            <p>
                <?php if(app()->getLocale() == 'en'): ?>
                    <?php echo $profile->strength_en; ?>

                <?php else: ?>
                    <?php echo $profile->strength_ar; ?>

                <?php endif; ?>
            </p>
        </div>
    </div>

</div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('project-js'); ?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script type="text/javascript" src="<?php echo e(asset('assets/smartCyclic/smartCycle.min.js')); ?>"></script>
<script>
    $(".anyone").smartCycle();
</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\F&D_Eng\resources\views/client/compProf.blade.php ENDPATH**/ ?>