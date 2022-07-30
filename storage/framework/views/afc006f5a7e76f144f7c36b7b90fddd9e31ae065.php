<footer class="ftco-footer ftco-section bg-light">
    <div class="container p-4">
        <div class="row">
            <div class="mouse">
                <a href="#" class="mouse-icon">
                    <div class="mouse-wheel"><span class="ion-ios-arrow-up"></span></div>
                </a>
            </div>
        </div>
        <div class="row mb-5">
            <div class="col-md">
                <div class="ftco-footer-widget mb-4">
                <h2 class="ftco-heading-2"><?php echo e(__('app.f_d')); ?></h2>
                <div class="footer-map">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4367.830212390713!2d31.20588779625682!3d30.053347853929335!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x145841251e102def%3A0x9004caf808f0e283!2sGool%20Gamal%2C%20Al%20Huwaiteyah%2C%20Agouza%2C%20Giza%20Governorate!5e0!3m2!1sen!2seg!4v1659219962594!5m2!1sen!2seg" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
                <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
                    <li class="ftco-animate"><a href="https://twitter.com/ashrafdiab6" target="_blank"><span class="icon-twitter"></span></a></li>
                    <li class="ftco-animate"><a href="https://www.facebook.com/ashraf.diab.10/" target="_blank"><span class="icon-facebook"></span></a></li>
                    <li class="ftco-animate"><a href="https://www.instagram.com/ashraf_diab96/?hl=en" target="_blank"><span class="icon-instagram"></span></a></li>
                </ul>
                </div>
            </div>
            <div class="col-md">
                <div class="ftco-footer-widget mb-4 ml-md-5">
                <h2 class="ftco-heading-2">Menu</h2>
                <ul class="list-unstyled">
                    <li><a href="<?php echo e(url('/')); ?>" class="py-2 d-block text-capitalize"><?php echo e(__('app.home')); ?></a></li>
                    <li><a href="<?php echo e(url('/about')); ?>" class="py-2 d-block text-capitalize"><?php echo e(__('app.about')); ?></a></li>
                    <li><a href="<?php echo e(url('/contacts')); ?>" class="py-2 d-block text-capitalize"><?php echo e(__('app.contact')); ?></a></li>
                </ul>
                </div>
            </div>

            <div class="col-md">
                <div class="ftco-footer-widget mb-4">
                    <h2 class="ftco-heading-2">Have a Questions?</h2>
                    <div class="block-23 mb-3">
                    <ul>
                        <li>
                            <span class="icon icon-map-marker"></span>
                            <span class="text">
                                <?php if(app()->getLocale() == 'en'): ?>
                                    <?php echo e($contacts->address_en); ?>

                                <?php else: ?>
                                    <?php echo e($contacts->address_ar); ?>

                                <?php endif; ?>
                            </span>
                        </li>
                        <li>
                            <span class="icon icon-phone"></span>
                            <span class="text"><?php echo e($contacts->mobile); ?></span>
                        </li>
                        <li>
                            <span class="icon icon-envelope"></span>
                            <span class="text"><?php echo e($contacts->email); ?></span>
                        </li>
                    </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid bg-dark text-white">
        <div class="row">
            <div class="col-md-12 text-center">
                <p class="m-0 p-3">
                    Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | F&D Engineering </a>
                </p>
            </div>
        </div>
    </div>

</footer>
<?php /**PATH C:\xampp\htdocs\F&D_Eng\resources\views/layouts/footer.blade.php ENDPATH**/ ?>