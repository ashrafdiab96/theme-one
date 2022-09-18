<?php $__env->startSection('title'); ?>
<?php echo e(__('app.f_d')); ?> | <?php echo e(__('app.about')); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="container-fluid p-0 m-0">
    <div class="about-header" style="height: 200px; background-image: url('<?php echo e(asset('assets/upload/about/'.$about->background)); ?>')">
        <div class="col-md-4 text-center">
            <a href="<?php echo e(url('/')); ?>" class="text-uppercase p-0 m-0"><?php echo e(__('app.home')); ?></a>
            <h3 class="text-capitalize p-0 m-0"><?php echo e(__('app.about')); ?></h3>
        </div>
        <div class="col-md-8"></div>
    </div>
    <div class="about-content">
        <div class="container-fluid">
            <div class="about-title">
                <p class="text-capitalize text-muted"><?php echo e(__('app.who_we_are')); ?></p>
            </div>
            <div class="about-desc">
                <h2 class="text-capitalize">
                    <?php if(app()->getLocale() == 'en'): ?>
                        <?php echo e($about->comp_name_en); ?>

                    <?php else: ?>
                        <?php echo e($about->comp_name_ar); ?>

                    <?php endif; ?>
                </h2>
                <p>
                    <?php if(app()->getLocale() == 'en'): ?>
                        <?php echo $about->desc_en; ?>

                    <?php else: ?>
                        <?php echo $about->desc_ar; ?>

                    <?php endif; ?>
                </p>
            </div>
        </div>
    </div>
    <hr class="about-content-line">
    <div class="founder" style="background-color: <?php echo e($about->founder_bc); ?>; color: <?php echo e($about->founder_color); ?>;">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-3">
                    <img src="<?php echo e(asset('assets/upload/about/'.$about->founder_1_img)); ?>" alt="Founder Image">
                </div>
                <div class="col-md-6">
                    <h4><?php echo e(__('app.founder_msg')); ?></h4>
                    <p>
                        <?php if(app()->getLocale() == 'en'): ?>
                            <?php echo $about->founders_msg_en; ?>

                        <?php else: ?>
                            <?php echo $about->founders_msg_ar; ?>

                        <?php endif; ?>
                    </p>
                </div>
                <div class="col-md-3">
                    <img src="<?php echo e(asset('assets/upload/about/'.$about->founder_2_img)); ?>" alt="Founder Image">
                </div>
            </div>
        </div>
    </div>
    <div class="statistics" id="statistics">
        <div class="container-fluid">
            <div class="row justify-content-around align-items-center">
                <div class="col-ms-3">
                    <h3 class="text-capitalize text-center numbers"><?php echo e($home->establish); ?></h3>
                    <p class="text-capitalize text-center text-muted m-0">
                        <i class="fas fa-external-link-alt"></i>
                        <?php echo e(__('app.establish')); ?>

                    </p>
                </div>
                <div class="col-ms-3">
                    <h3 class="text-capitalize text-center numbers"><?php echo e($home->projects); ?></h3>
                    <p class="text-capitalize text-center text-muted m-0">
                        <i class="fas fa-project-diagram"></i>
                        <?php echo e(__('app.projects')); ?>

                    </p>
                </div>
                <div class="col-ms-3">
                    <h3 class="text-capitalize text-center numbers"><?php echo e($home->employees); ?></h3>
                    <p class="text-capitalize text-center text-muted m-0">
                        <i class="fas fa-users"></i>
                        <?php echo e(__('app.employees')); ?>

                    </p>
                </div>
                <div class="col-ms-3">
                    <h3 class="text-capitalize text-center numbers"><?php echo e($home->customers); ?></h3>
                    <p class="text-capitalize text-center text-muted m-0">
                        <i class="fas fa-user-tie"></i>
                        <?php echo e(__('app.customers')); ?>

                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('project-js'); ?>
<script>
    var section = document.querySelector('.statistics');
    var hasEntered = false;
    window.addEventListener('scroll', (e) => {
      var shouldAnimate = (window.scrollY + window.innerHeight) >= (section.offsetTop);
      console.log(shouldAnimate)
      if (shouldAnimate && !hasEntered) {
        hasEntered = true;
        // alert('sss')
        $('.numbers').each(function () {
          $(this).prop('Counter',0).animate({
            Counter: $(this).text()
          }, {
            duration: 4000,
            easing: 'swing',
            step: function (now) {
                $(this).text(Math.ceil(now));
            }
          });
        });
      }
    });
</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\F&D_Eng\resources\views/client/about.blade.php ENDPATH**/ ?>