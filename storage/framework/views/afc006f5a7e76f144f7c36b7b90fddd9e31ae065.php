<footer class="new-footer">
    <div class="container new-footer-cont">
        <div class="row">
            <div class="col-md-11">
                <div class="row">
                    <div class="col-md-2 text-capitalize">
                        <a href="<?php echo e(url('/about')); ?>" class="footer-item">
                            <?php echo e(__('app.about')); ?>

                        </a>
                    </div>
                    <div class="col-md-2 text-capitalize">
                        <a href="<?php echo e(url('/profile')); ?>" class="footer-item">
                            <?php echo e(__('app.profile')); ?>

                        </a>
                    </div>
                    <div class="col-md-2 text-capitalize">
                        <a href="<?php echo e(url('/services')); ?>" class="footer-item">
                            <?php echo e(__('app.serv')); ?>

                        </a>
                    </div>
                    <div class="col-md-2 text-capitalize">
                        <a href="<?php echo e(url('/projects')); ?>" class="footer-item">
                            <?php echo e(__('app.projects')); ?>

                        </a>
                    </div>
                    <div class="col-md-2 text-capitalize">
                        <a href="<?php echo e(url('/blogs')); ?>" class="footer-item">
                            <?php echo e(__('app.blog')); ?>

                        </a>
                    </div>
                    <div class="col-md-2 text-capitalize">
                        <a href="<?php echo e(url('/contacts')); ?>" class="footer-item">
                            <?php echo e(__('app.contact')); ?>

                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-1">
                <div class="row">
                    <div class="col-md-12">
                        <a href="<?php echo e($contacts->ln_url); ?>" target="_blank" title="LinkedIn">
                            <img class="linkedin-img" src="<?php echo e(asset('assets/icons/linkedin.png')); ?>" alt="linkedin">
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-4">
                <div class="new-footer-about">
                    <?php if(app()->getLocale() == 'en'): ?>
                        <?php echo $contacts->why_us; ?>

                    <?php else: ?>
                        <?php echo $contacts->why_us_ar; ?>

                    <?php endif; ?>
                </div>
            </div>
            <div class="col-md-4">
                <div class="new-footer-about">
                    
                    <div class="block-23">
                        <ul class="list-unstyled">
                            <li class="footer-contact-item">
                                <span>
                                    <i class="fas fa-location-arrow"></i>
                                    <?php if(app()->getLocale() == 'en'): ?>
                                        <?php echo e($contacts->address_en); ?>

                                    <?php else: ?>
                                        <?php echo e($contacts->address_ar); ?>

                                    <?php endif; ?>
                                </span>
                            </li>
                            
                            <li class="footer-contact-item">
                                <span>
                                    <i class="fas fa-envelope"></i>
                                    <?php echo e($contacts->email); ?>

                                </span>
                            </li>
                        </ul>
                    </div>
                    
                </div>
            </div>
            <div class="col-md-2"></div>
        </div>
    </div>
</footer>

<div class="container-fluid new-copy-div p-0">
    <div class="new-copy-footer">
        <div class="col-md-12 text-center">
            <p class="m-0 p-3">
                <?php echo e(__('app.copyright')); ?> &copy;<script>document.write(new Date().getFullYear());</script>&copy; <?php echo e(__('app.rights_reserved')); ?> | <?php echo e(__('app.f_d')); ?> </a>
            </p>
        </div>
    </div>
</div>
<?php /**PATH C:\xampp\htdocs\F&D_Eng\resources\views/layouts/footer.blade.php ENDPATH**/ ?>