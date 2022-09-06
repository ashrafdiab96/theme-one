<footer class="footer">
    <div class="container footer-cont p-5">
        <div class="row">
            <div class="mouse">
                <a href="#" class="mouse-icon">
                    <div class="mouse-wheel"><span class="ion-ios-arrow-up"></span></div>
                </a>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3">
                <div class="ftco-footer-widget">
                    <h3 class="text-capitalize mb-3">
                        
                        
                        <img class="footer_logo" src="<?php echo e(asset('assets/upload/home/'.$footer_logo)); ?>" alt="Logo">
                    </h3>
                    <div class="footer-logo-desc">
                        
                        <p class="">
                            <?php if(app()->getLocale() == 'en'): ?>
                                <?php echo $contacts->why_us; ?>

                            <?php else: ?>
                                <?php echo $contacts->why_us_ar; ?>

                            <?php endif; ?>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="ftco-footer-widget ml-md-5">
                    <h2 class="text-capitalize mb-3">
                        <i class="fas fa-link"></i>
                        <?php echo e(__('app.links')); ?>

                    </h2>
                    <ul class="list-unstyled w-75 m-auto">
                        
                        <li class="footer-item">
                            <a href="<?php echo e(url('/services')); ?>" class="footer-link text-capitalize">
                                <?php echo e(__('app.serv')); ?>

                            </a>
                        </li>
                        <li class="footer-item">
                            <a href="<?php echo e(url('/projects')); ?>" class="footer-link text-capitalize">
                                <?php echo e(__('app.projects')); ?>

                            </a>
                        </li>
                        <li class="footer-item">
                            <a href="<?php echo e(url('/blogs')); ?>" class="footer-link text-capitalize">
                                <?php echo e(__('app.blog')); ?>

                            </a>
                        </li>
                        <li class="footer-item">
                            <a href="<?php echo e(url('/contacts')); ?>" class="footer-link text-capitalize">
                                <?php echo e(__('app.contact')); ?>

                            </a>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="col-md-3">
                <div class="ftco-footer-widget ml-md-5">
                    <h2 class="text-capitalize mb-3">
                        <i class="fab fa-servicestack"></i>
                        <?php echo e(__('app.serv')); ?>

                    </h2>
                    <ul class="list-unstyled w-75 m-auto">
                        <?php $__currentLoopData = $services_share; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ser): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li class="footer-item">
                                <a href="<?php echo e(url('service/'.$ser->id)); ?>" class="footer-link text-capitalize">
                                    <?php if(app()->getLocale() == 'en'): ?>
                                        <?php echo e(Str::limit($ser->name_en, 15)); ?>

                                    <?php else: ?>
                                        <?php echo e(Str::limit($ser->name_ar, 15)); ?>

                                    <?php endif; ?>
                                </a>
                            </li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </ul>
                </div>
            </div>

            <div class="col-md-3">
                <div class="ftco-footer-widget">
                    <h2 class="text-capitalize mb-3">
                        <i class="fas fa-address-card"></i>
                        <?php echo e(__('app.contact')); ?>

                    </h2>
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
                                    <i class="fas fa-phone"></i>
                                    <?php echo e($contacts->mobile); ?>

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
        </div>
        <div class="text-center footer-icons">
            
            <a href="<?php echo e($contacts->ln_url); ?>" target="_blank">
                <img src="<?php echo e(asset('assets/icons/linkedin.png')); ?>" alt="linkedin">
            </a>
            
        </div>
    </div>

    <div class="container-fluid copy-footer">
        <div class="row">
            <div class="col-md-12 text-center">
                <p class="m-0 p-3">
                    <?php echo e(__('app.copyright')); ?> &copy;<script>document.write(new Date().getFullYear());</script>&copy; <?php echo e(__('app.rights_reserved')); ?> | <?php echo e(__('app.f_d')); ?> </a>
                </p>
            </div>
        </div>
    </div>

</footer>
<?php /**PATH C:\xampp\htdocs\F&D_Eng\resources\views/layouts/footer.blade.php ENDPATH**/ ?>