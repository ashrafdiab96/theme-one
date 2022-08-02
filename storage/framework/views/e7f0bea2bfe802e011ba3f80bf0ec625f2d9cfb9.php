<?php $__env->startSection('title'); ?>
    <?php echo e(__('app.f_d')); ?> | <?php echo e(__('app.projects')); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="container-fluid p-0 m-0">
    <div class="projects-header" style="height: 200px; background-image: url('<?php echo e(asset('assets/upload/projects/'.$home->projects_bc)); ?>')">
        <div class="col-md-4 text-center">
            <a href="<?php echo e(url('/')); ?>" class="text-uppercase p-0 m-0"><?php echo e(__('app.home')); ?></a>
            <h3 class="text-capitalize p-0 m-0"><?php echo e(__('app.our_project')); ?></h3>
        </div>
        <div class="col-md-8"></div>
    </div>

    <div class="projects-content">
        <div class="container">
            <div class="row">
                <?php $__currentLoopData = $projects; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $project): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="col-md-4">
                        <div class="project">
                            <a href="<?php echo e(url('project/'.$project->id)); ?>">
                                <div class="project-img">
                                    <img src="<?php echo e(asset('assets/upload/projects/'.$project->image)); ?>" alt="Service Image">
                                </div>
                                <div class="project-desc">
                                    <h3 class="text-capitalize p-0 m-0">
                                        <?php if(app()->getLocale() == 'en'): ?>
                                            <?php echo e($project->name_en); ?>

                                        <?php else: ?>
                                            <?php echo e($project->name_ar); ?>

                                        <?php endif; ?>
                                    </h3>
                                </div>
                                <div class="project-overlay">
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

<?php echo $__env->make('layouts.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\F&D_Eng\resources\views/client/projects.blade.php ENDPATH**/ ?>