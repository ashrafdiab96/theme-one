<?php $__env->startSection('title'); ?>
<?php echo e(__('app.f_d')); ?> | <?php echo e(__('app.about')); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="container" style="height: 550px;">
    <div class="row">
        About
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\F&D_Eng\resources\views/client/about.blade.php ENDPATH**/ ?>