<?php $__env->startSection('title'); ?>
<?php echo e(__('app.f_d')); ?> | <?php echo e(__('app.blog')); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="container p-0 m-auto">
    <div class="projects-header" style="height: 200px; background-image: url('<?php echo e(asset('assets/upload/blogs/'.$home->blogs_bc)); ?>')">
        <div class="col-md-4 text-center">
            <a href="<?php echo e(url('/')); ?>" class="text-uppercase p-0 m-0"><?php echo e(__('app.home')); ?></a>
            <h3 class="text-capitalize p-0 m-0"><?php echo e(__('app.blog')); ?></h3>
        </div>
        <div class="col-md-8"></div>
    </div>
    <div class="blogs-content">
        <div class="container p-0">
            <div class="row">
                <?php $__currentLoopData = $blogs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $blog): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="col-md-4">
                        <div class="blog">
                            <a href="<?php echo e(url('blog/'.$blog->id)); ?>">
                                <div class="blog-img">
                                    <img src="<?php echo e(asset('assets/upload/blogs/'.$blog->image)); ?>" alt="Service Image">
                                </div>
                                <div class="blog-desc">
                                    <h3 class="text-capitalize p-0 m-0">
                                        <?php if(app()->getLocale() == 'en'): ?>
                                            <?php echo e($blog->title_en); ?>

                                        <?php else: ?>
                                            <?php echo e($blog->title_ar); ?>

                                        <?php endif; ?>
                                    </h3>
                                </div>
                                <div class="blog-overlay">
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

<?php echo $__env->make('layouts.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\F&D_Eng\resources\views/client/blogs.blade.php ENDPATH**/ ?>