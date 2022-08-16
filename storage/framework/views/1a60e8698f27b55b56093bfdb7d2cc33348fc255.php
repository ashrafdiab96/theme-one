<?php $__env->startSection('title'); ?>
    <?php echo e(__('app.f_d')); ?> | <?php echo e(__('app.home')); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="container-fluid p-0">
    
    <div class="row m-0">
        <div class="splide home-slider" role="group" aria-label="Splide Basic HTML Example">
            <div class="splide__track h-100">
                  <ul class="splide__list h-100">
                    <?php $__currentLoopData = $slider; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sl): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li class="splide__slide h-100">
                            <div class="slider-all">
                                <div class="slider-image">
                                    <img class="img-fluid" src="<?php echo e(url('assets/upload/slider/'.$sl->image)); ?>" alt="Slider image 1">
                                </div>
                                <div class="slider-content">
                                    <div class="slider-title">
                                        <h2>
                                            <?php if(app()->getLocale() == 'en'): ?>
                                                <?php echo e($sl->title_en); ?>

                                            <?php else: ?>
                                                <?php echo e($sl->title_ar); ?>

                                            <?php endif; ?>
                                        </h2>
                                    </div>
                                    <div class="slider-desc">
                                        <p>
                                            <?php if(app()->getLocale() == 'en'): ?>
                                                <?php echo e($sl->desc_en); ?>

                                            <?php else: ?>
                                                <?php echo e($sl->desc_ar); ?>

                                            <?php endif; ?>
                                        </p>
                                    </div>
                                    <div class="slider-button">
                                        <a class="btn btn-flat btn-sm text-capitalize"><?php echo e(__('app.more')); ?></a>
                                    </div>
                                </div>
                            </div>
                        </li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                  </ul>
            </div>
          </div>
    </div>
    

    
    <section class="services">
        <div class="container">
            <div class="row main-title">
                <div class="services-title">
                    <h4 class="text-uppercase"><?php echo e(__('app.services')); ?></h4>
                </div>
                <div class="services-desc">
                    <h2 class="text-capitalize"><?php echo e(__('app.what_we_do')); ?></h2>
                </div>
            </div>
            <div class="row">
                <?php $__currentLoopData = $services; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $service): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="col-md-4 animate__backInLeft my-4">
                        <div class="service-content">
                            <div class="service-image">
                                <img class="img-fluid" src="<?php echo e(url('assets/upload/services/'.$service->image)); ?>" alt="Services images">
                            </div>
                            <div class="service-title">
                                <h3>
                                    <?php if(app()->getLocale() == 'en'): ?>
                                        <?php echo e($service->name_en); ?>

                                    <?php else: ?>
                                        <?php echo e($service->name_ar); ?>

                                    <?php endif; ?>
                                </h3>
                            </div>
                            <a href="<?php echo e(url('service/'.$service->id)); ?>" class="service-overlay">
                                <div class="overlay-plus">
                                    <i class="fas fa-plus-circle"></i>
                                </div>
                                <div class="overlay-title">
                                    <h3>
                                        <?php if(app()->getLocale() == 'en'): ?>
                                            <?php echo e($service->name_en); ?>

                                        <?php else: ?>
                                            <?php echo e($service->name_ar); ?>

                                        <?php endif; ?>
                                    </h3>
                                </div>
                            </a>
                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
    </section>
    

    <hr class="break-line">

    
    <section class="projects">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="projects-title">
                        <p class="text-uppercase text-muted m-0"><?php echo e(__('app.recent_projects')); ?></p>
                        <h2 class="text-capitalize pb-2"><?php echo e(__('app.projects')); ?></h2>
                    </div>
                </div>
                <div class="col-md-9">
                    <?php if(app()->getLocale() == 'en'): ?>
                        <?php echo e($home->projects_desc); ?>

                    <?php else: ?>
                        <?php echo e($home->projects_desc_ar); ?>

                    <?php endif; ?>
                </div>
            </div>
            <div class="row mt-5">
                <?php $__currentLoopData = $projects; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $project): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="col-md-3 my-4">
                        <div class="project">
                            <a href="<?php echo e(url('project/'.$project->id)); ?>" class="project-content">
                                <div class="project-img h-100">
                                    <img src="<?php echo e(asset('assets/upload/projects/'.$project->image)); ?>" alt="Project">
                                </div>
                            </a>
                            <a href="<?php echo e(url('project/'.$project->id)); ?>" class="project-overlay">
                                <div class="overlay-plus">
                                    <i class="fas fa-plus-circle"></i>
                                </div>
                            </a>
                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
    </section>
    

    
    <section class="blogs">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="blogs-title">
                        <p class="text-uppercase text-muted m-0"><?php echo e(__('app.recent_blogs')); ?></p>
                        <h2 class="text-capitalize pb-2"><?php echo e(__('app.our_blogs')); ?></h2>
                        <p class="text-capitalize text-muted my-2 blogs-desc">
                            <?php if(app()->getLocale() == 'en'): ?>
                                <?php echo e($home->blogs_desc_en); ?>

                            <?php else: ?>
                                <?php echo e($home->blogs_desc_ar); ?>

                            <?php endif; ?>
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <?php $__currentLoopData = $blogs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $blog): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="col-md-6 my-4">
                        <a href="<?php echo e(url('blog/'.$blog->id)); ?>">
                            <div class="recent-blogs">
                                <div class="blog-img">
                                    <img src="<?php echo e(asset('assets/upload/blogs/'.$blog->image)); ?>" alt="Blog Image">
                                </div>
                                <div class="blog-title p-2">
                                    <span>
                                        <i class="far fa-calendar-alt"></i>
                                        <?php echo e(\Carbon\Carbon::parse($blog->created_at)->format('d-m-Y')); ?>

                                    </span>
                                    &nbsp;
                                    <span>
                                        <i class="far fa-clock"></i>
                                        <?php echo e(\Carbon\Carbon::parse($blog->created_at)->format('H::m')); ?>

                                    </span>
                                    <h2 class="text-capitalizt">
                                        <?php if(app()->getLocale() == 'en'): ?>
                                            <?php echo e($blog->title_en); ?>

                                        <?php else: ?>
                                            <?php echo e($blog->title_ar); ?>

                                        <?php endif; ?>
                                    </h2>
                                </div>
                            </div>
                        </a>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
    </section>
    

</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\F&D_Eng\resources\views/client/home.blade.php ENDPATH**/ ?>