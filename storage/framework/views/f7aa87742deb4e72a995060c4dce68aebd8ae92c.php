<?php $__env->startSection('title'); ?>
    <?php echo e(__('app.f_d')); ?> | <?php echo e(__('app.contact')); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="container-fluid p-0 m-0">
    <div class="contacts-header" style="height: 200px; background-image: url('<?php echo e(asset('assets/upload/contacts/'.$contacts->background)); ?>')">
        <div class="col-md-4 text-center">
            <a href="<?php echo e(url('/')); ?>" class="text-uppercase p-0 m-0"><?php echo e(__('app.home')); ?></a>
            <h3 class="text-capitalize p-0 m-0"><?php echo e(__('app.contact')); ?></h3>
        </div>
        <div class="col-md-8"></div>
    </div>

    <div class="contacts-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12 contacts-desc">
                    <p class="text-muted text-capitalize p-0 m-0"><?php echo e(__('app.why_us')); ?></p>
                    <p class="p-0 m-0">
                        <?php if(app()->getLocale() == 'en'): ?>
                            <?php echo $contacts->why_us; ?>

                        <?php else: ?>
                            <?php echo $contacts->why_us_ar; ?>

                        <?php endif; ?>
                    </p>
                </div>
            </div>
            <div class="row py-4">
                <div class="col-md-4">
                    <div class="location">
                        <h3 class="text-capitalize loc-title"><?php echo e(__('app.location')); ?></h3>
                        <p class="text-capitalize comp-name"><?php echo e(__('app.f_d')); ?></p>
                        <p>
                            <i class="fas fa-location-arrow"></i>
                            <?php if(app()->getLocale() == 'en'): ?>
                                <?php echo e($contacts->address_en); ?>

                            <?php else: ?>
                                <?php echo e($contacts->address_ar); ?>

                            <?php endif; ?>
                        </p>
                    </div>
                    <div class="communication">
                        <h3 class="text-capitalize loc-title"><?php echo e(__('app.communication')); ?></h3>
                        <p>
                            <i class="fas fa-phone"></i>
                            <?php echo e($contacts->mobile); ?>

                        </p>
                        <p>
                            <i class="fas fa-envelope"></i>
                            <?php echo e($contacts->email); ?>

                        </p>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="contacts-form">
                        <div class="msg-form-success"></div>
                        <div class="contacts-form-title">
                            <p class="text-capitalize text-center m-0 p-0"><?php echo e(__('app.contact_now')); ?></p>
                            <h5 class="text-capitalize text-center"><?php echo e(__('app.we_contact_soon')); ?></h5>
                        </div>
                        <div class="form-group m-auto">
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="my-input" class="text-capitalize">
                                                <?php echo e(__('app.name')); ?>

                                                <span class="form-req">*</span>
                                            </label>
                                            <input id="nameId" class="form-control" type="text" name="name" placeholder="<?php echo e(__('app.name')); ?>">
                                            <div class="name-error mt-2"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="my-input" class="text-capitalize">
                                                <?php echo e(__('app.phone')); ?>

                                            </label>
                                            <input id="phoneId" class="form-control" type="text" name="phone" placeholder="<?php echo e(__('app.phone')); ?>">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="my-input" class="text-capitalize">
                                                <?php echo e(__('app.email')); ?>

                                                <span class="form-req">*</span>
                                            </label>
                                            <input id="emailId" class="form-control" type="text" name="email" placeholder="<?php echo e(__('app.email')); ?>">
                                            <div class="email-error mt-2"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="my-input" class="text-capitalize">
                                                <?php echo e(__('app.message')); ?>

                                                <span class="form-req">*</span>
                                            </label>
                                            <textarea id="messageId" class="form-control" name="message" rows="5" placeholder="<?php echo e(__('app.message')); ?>"></textarea>
                                            <div class="message-error mt-2"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row justify-content-center">
                                    <div class="form-group text-center">
                                        <button class="btn btn-submit">
                                            <span class="text-capitalize"><?php echo e(__('app.send')); ?></span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('project-js'); ?>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script type="text/javascript">
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $(".btn-submit").click(function(e) {
        Swal.fire({
            html: '<?php echo e(__('app.pls_wait')); ?>',
            allowEscapeKey: false,
            allowOutsideClick: false,
            didOpen: () => {
                Swal.showLoading();
            }
        });

        e.preventDefault();
        let name = $("input[name=name]").val();
        let phone = $("input[name=phone]").val();
        let email = $("input[name=email]").val();
        let message = $("textarea[name=message]").val();

        $.ajax({
            type: 'POST',
            url: "contact/message",
            data: {
                name: name,
                phone: phone,
                email: email,
                message: message
            },
            success: (data) => {
                let succMsg = '<div class="alert alert-success">';
                succMsg += '<?php echo e(__('app.mes_sent_succ')); ?>';
                succMsg += '</div>';
                $('.msg-form-success').html(succMsg);
                document.getElementById('nameId').value = '';
                document.getElementById('phoneId').value = '';
                document.getElementById('emailId').value = '';
                document.getElementById('messageId').value = '';
                $('.name-error').html('');
                $('.email-error').html('');
                $('.message-error').html('');
                Swal.close();
            },
            error: (data) => {
                let errors = data.responseJSON.errors;
                $.each(errors, (key, value) => {
                    if (key == 'name') {
                        let nameError = '<div class="alert alert-danger">';
                        nameError += '<?php echo e(__('app.field_req')); ?>';
                        nameError += '</div>';
                        $('.name-error').html(nameError);
                    } else if (key == 'email') {
                        let emailError = '<div class="alert alert-danger">';
                            emailError += '<?php echo e(__('app.field_req')); ?>';
                            emailError += '</div>';
                        $('.email-error').html(emailError);
                    } else if (key == 'message') {
                        let messageError = '<div class="alert alert-danger">';
                            messageError += '<?php echo e(__('app.field_req')); ?>';
                            messageError += '</div>';
                        $('.message-error').html(messageError);
                    } else {
                        $('.name-error').html('');
                        $('.email-error').html('');
                        $('.message-error').html('');
                    }
                });
                Swal.close();
            },
        });
    });
</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\F&D_Eng\resources\views/client/contacts.blade.php ENDPATH**/ ?>