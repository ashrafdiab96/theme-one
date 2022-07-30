<?php $__env->startSection('title'); ?>
    <?php echo e(__('app.f_d')); ?> | <?php echo e(__('app.cmp_prof')); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="container" style="height: 550px;">
    <div class="row">
        Company Profile
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\F&D_Eng\resources\views/client/compProf.blade.php ENDPATH**/ ?>