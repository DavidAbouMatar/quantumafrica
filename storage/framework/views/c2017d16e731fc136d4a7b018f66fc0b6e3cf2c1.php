<div class="path-hint" data-toggle="tooltip" data-title="/resources/themes/velocity/views/customers/session/index.blade.php" data-id="634b0f7cd8c10"><span class="testing"></span><?php $__env->startSection('page_title'); ?>
    <?php echo e(__('shop::app.customer.login-form.page-title')); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content-wrapper'); ?>
    <div class="auth-content form-container">

        <?php echo view_render_event('bagisto.shop.customers.login.before'); ?>


            <div class="container">


                    <div class="body col-12">
                        <div class="form-header">
                            <h3 class="fw6">
                                <?php echo e(__('velocity::app.customer.login-form.signin')); ?>

                            </h3>

                            
                        </div>

                        <form
                            method="POST"
                            action="<?php echo e(route('customer.session.create')); ?>"
                            @submit.prevent="onSubmit">

                            <?php echo e(csrf_field()); ?>



                            <div class="form-group" :class="[errors.has('email') ? 'has-error' : '']">
                                <label for="email" class="mandatory label-style">
                                    <?php echo e(__('shop::app.customer.login-form.email')); ?>

                                </label>

                                <input
                                    type="text"
                                    class="form-style"
                                    name="email"
                                    v-validate="'required|email'"
                                    value="<?php echo e(old('email')); ?>"
                                    data-vv-as="&quot;<?php echo e(__('shop::app.customer.login-form.email')); ?>&quot;" />

                                <span class="control-error" v-if="errors.has('email')" v-text="errors.first('email')"></span>
                            </div>

                            <div class="form-group" :class="[errors.has('password') ? 'has-error' : '']">
                                <label for="password" class="mandatory label-style">
                                    <?php echo e(__('shop::app.customer.login-form.password')); ?>

                                </label>

                                <input
                                    type="password"
                                    class="form-style"
                                    name="password"
                                    id="password"
                                    v-validate="'required'"
                                    value="<?php echo e(old('password')); ?>"
                                    data-vv-as="&quot;<?php echo e(__('shop::app.customer.login-form.password')); ?>&quot;" />
                                <input type="checkbox" onclick="myFunction()" id="shoPassword" class="show-password"> <?php echo e(__('shop::app.customer.login-form.show-password')); ?>

                                <span class="control-error" v-if="errors.has('password')" v-text="errors.first('password')"></span>

                                <a href="<?php echo e(route('customer.forgot-password.create')); ?>" class=" show-password float-right">
                                    <?php echo e(__('shop::app.customer.login-form.forgot_pass')); ?>

                                </a>

                                <div class="mt10">
                                    <?php if(Cookie::has('enable-resend')): ?>
                                        <?php if(Cookie::get('enable-resend') == true): ?>
                                            <a href="<?php echo e(route('customer.resend.verification-email', Cookie::get('email-for-resend'))); ?>"><?php echo e(__('shop::app.customer.login-form.resend-verification')); ?></a>
                                        <?php endif; ?>
                                    <?php endif; ?>
                                </div>
                            </div>

                            <div class="form-group">

                                <?php echo Captcha::render(); ?>


                            </div>

                            <?php echo view_render_event('bagisto.shop.customers.login_form_controls.after'); ?>


                            <input class="theme-btn" type="submit" value="<?php echo e(__('shop::app.customer.login-form.button_title')); ?>">


                        </form>
                        <div class="row">
                            <div class="col-6"></div>
                    <div class="col-4 ">

                        <p class="float-lg-right">
                            <?php echo e(__('velocity::app.customer.login-form.create-account')); ?>

                        </p>
                    </div>
                    <div class="col-2">

                        <a href="<?php echo e(route('customer.register.index')); ?>" >
                            
                                <?php echo e(__('velocity::app.customer.login-form.sign-up')); ?>

                            
                        </a>
                    </div>
                    </div>
                </div>
            </div>
            

        <?php echo view_render_event('bagisto.shop.customers.login.after'); ?>

    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('scripts'); ?>

<?php echo Captcha::renderJS(); ?>


<script>
    $(function(){
        $(":input[name=email]").focus();
    });

        function myFunction() {
            var x = document.getElementById("password");
            if (x.type === "password") {
                x.type = "text";
            } else {
                x.type = "password";
            }
        }

    </script>

<?php $__env->stopPush(); ?>




<?php echo $__env->make('shop::layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?></div><?php /**PATH C:\xampp\htdocs\quantumafrica/resources/themes/velocity/views/customers/session/index.blade.php ENDPATH**/ ?>