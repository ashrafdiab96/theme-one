<footer class="footer">
    <div class="container footer-cont p-4">
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
                        <i class="fas fa-hard-hat"></i>
                        <?php echo e(__('app.f_d')); ?>

                    </h3>
                    <div class="footer-logo-desc">
                        <h4 class="text-capitalize"><?php echo e(__('app.why_us')); ?></h4>
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
                            <a href="<?php echo e(url('/')); ?>" class="footer-link text-capitalize">
                                <?php echo e(__('app.home')); ?>

                            </a>
                        </li>
                        <li class="footer-item">
                            <a href="<?php echo e(url('/about')); ?>" class="footer-link text-capitalize">
                                <?php echo e(__('app.about')); ?>

                            </a>
                        </li>
                        <li class="footer-item">
                            <a href="<?php echo e(url('/profile')); ?>" class="footer-link text-capitalize">
                                <?php echo e(__('app.profile')); ?>

                            </a>
                        </li>
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
                                        <?php echo e($ser->name_en); ?>

                                    <?php else: ?>
                                        <?php echo e($ser->name_ar); ?>

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
                    <div class="footer-map">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4367.830212390713!2d31.20588779625682!3d30.053347853929335!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x145841251e102def%3A0x9004caf808f0e283!2sGool%20Gamal%2C%20Al%20Huwaiteyah%2C%20Agouza%2C%20Giza%20Governorate!5e0!3m2!1sen!2seg!4v1659219962594!5m2!1sen!2seg" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
        </div>
        <div class="p-4 text-center footer-icons">
            <a href="<?php echo e($contacts->fb_url); ?>" target="_blank">
                <img src="<?php echo e(asset('assets/icons/facebook.png')); ?>" alt="facebook">
            </a>
            <a href="<?php echo e($contacts->ln_url); ?>" target="_blank">
                <img src="<?php echo e(asset('assets/icons/linkedin.png')); ?>" alt="linkedin">
            </a>
            <a href="<?php echo e($contacts->tw_url); ?>" target="_blank">
                <img src="<?php echo e(asset('assets/icons/twitter.png')); ?>" alt="twitter">
            </a>
            <a href="<?php echo e($contacts->in_url); ?>" target="_blank">
                <img src="<?php echo e(asset('assets/icons/instagram.png')); ?>" alt="instagram">
            </a>
            <a href="<?php echo e($contacts->yu_url); ?>" target="_blank">
                <img src="<?php echo e(asset('assets/icons/youtube.png')); ?>" alt="youtube">
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