<div class="container-fluid p-0 bg-dark">

    <div class="container top-nav">
        <div class="row">
                <div class="col-md-4">
                    <span class="top-nav-mail">
                        <i class="fas fa-envelope m-1"></i>
                        <span>ashraf.diab22.ad@gmail.com</span>
                    </span>
                </div>
                <div class="col-md-6">
                    <span class="nav-item mx-5 top-nav-phone">
                        <img class="mx-2" src="<?php echo e(url('assets/icons/egypt.png')); ?>" alt="Egypt Flag" width="25" height="25">
                        <i class="fas fa-phone-square-alt"></i>&nbsp;
                        <span>00201020869595</span>
                    </span>
                </div>
                <div class="col-md-2">
                    <span class="nav-item top-nav-lang">
                        <?php if(app()->getLocale() == 'ar'): ?>
                            <a class="text-capitalize" href="<?php echo e(url('/language', 'en')); ?>">
                                <i class="fas fa-globe"></i>&nbsp;
                                <?php echo e(__('app.lang')); ?>

                            </a>
                        <?php else: ?>
                            <a class="text-capitalize" href="<?php echo e(url('/language', 'ar')); ?>">
                                <i class="fas fa-globe"></i>&nbsp;
                                <?php echo e(__('app.lang')); ?>

                            </a>
                        <?php endif; ?>
                    </span>
                </div>
            </div>
    </div>
</div>
<?php /**PATH C:\xampp\htdocs\F&D_Eng\resources\views/layouts/topNav.blade.php ENDPATH**/ ?>