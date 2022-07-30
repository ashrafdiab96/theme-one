<div class="container-fluid p-0 main-nav-cont">

    <div class="container nav-container h-100">
        <nav class="navbar navbar-expand-sm navbar-light bg-trasperant h-100 p-0">
            <a class="navbar-brand main-logo" href="<?php echo e(url('/')); ?>">F & D ENGINEERING</a>
            <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId"
                aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse h-100" id="collapsibleNavId">
                <ul class="navbar-nav ml-auto mt-2 mt-lg-0 h-100">
                    <li class="nav-item <?php echo e(request()->is('/') ? 'active-after' : ''); ?>">
                        <a class="nav-link text-capitalize <?php echo e(request()->is('/') ? 'active-link' : ''); ?>" href="<?php echo e(url('/')); ?>"><?php echo e(__('app.home')); ?></a>
                    </li>
                    <li class="nav-item <?php echo e(request()->is('about') ? 'active-after' : ''); ?>">
                        <a class="nav-link text-capitalize <?php echo e(request()->is('about') ? 'active-link' : ''); ?>" href="<?php echo e(url('/about')); ?>"><?php echo e(__('app.about')); ?></a>
                    </li>
                    <li class="nav-item <?php echo e(request()->is('profile') ? 'active-after' : ''); ?>">
                        <a class="nav-link text-capitalize <?php echo e(request()->is('profile') ? 'active-link' : ''); ?>" href="<?php echo e(url('/profile')); ?>"><?php echo e(__('app.cmp_prof')); ?></a>
                    </li>
                    <li class="nav-item <?php echo e(request()->is('services') ? 'active-after' : ''); ?>">
                        <a class="nav-link text-capitalize <?php echo e(request()->is('services') ? 'active-link' : ''); ?>" href="<?php echo e(url('/services')); ?>"><?php echo e(__('app.services')); ?></a>
                    </li>
                    <li class="nav-item <?php echo e(request()->is('projects') ? 'active-after' : ''); ?>">
                        <a class="nav-link text-capitalize <?php echo e(request()->is('projects') ? 'active-link' : ''); ?>" href="<?php echo e(url('/projects')); ?>"><?php echo e(__('app.projects')); ?></a>
                    </li>
                    <li class="nav-item <?php echo e(request()->is('blogs') ? 'active-after' : ''); ?>">
                        <a class="nav-link text-capitalize <?php echo e(request()->is('blogs') ? 'active-link' : ''); ?>" href="<?php echo e(url('/blogs')); ?>"><?php echo e(__('app.blog')); ?></a>
                    </li>
                    <li class="nav-item <?php echo e(request()->is('contacts') ? 'active-after' : ''); ?>">
                        <a class="nav-link text-capitalize <?php echo e(request()->is('contacts') ? 'active-link' : ''); ?>" href="<?php echo e(url('/contacts')); ?>"><?php echo e(__('app.contact')); ?></a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>

</div>
<?php /**PATH C:\xampp\htdocs\F&D_Eng\resources\views/layouts/navbar.blade.php ENDPATH**/ ?>