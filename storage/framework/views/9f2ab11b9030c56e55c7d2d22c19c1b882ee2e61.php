<div class="container">
    <nav class="navbar navbar-expand-sm navbar-light bg-light">
        <a class="navbar-brand" href="#">Logo</a>
        <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId"
            aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="collapsibleNavId">
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                <li class="nav-item">
                    <a class="nav-link text-capitalize" href="<?php echo e(url('/')); ?>"><?php echo e(__('app.home')); ?></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-capitalize" href="<?php echo e(url('/about')); ?>"><?php echo e(__('app.about')); ?></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-capitalize" href="<?php echo e(url('/contacts')); ?>"><?php echo e(__('app.contact')); ?></a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown text-capitalize" href="#" id="dropdownId" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <?php echo e(__('app.lang')); ?>&nbsp;
                        <i class="fas fa-globe"></i>
                    </a>
                    <div class="dropdown-menu" aria-labelledby="dropdownId">
                        <a class="dropdown-item text-capitalize" href="<?php echo e(url('/language', 'en')); ?>"><?php echo e(__('app.english')); ?></a>
                        <a class="dropdown-item text-capitalize" href="<?php echo e(url('/language', 'ar')); ?>"><?php echo e(__('app.arabic')); ?></a>
                    </div>
                </li>
            </ul>
        </div>
    </nav>

</div>
<?php /**PATH C:\xampp\htdocs\website\resources\views/layouts/navbar.blade.php ENDPATH**/ ?>