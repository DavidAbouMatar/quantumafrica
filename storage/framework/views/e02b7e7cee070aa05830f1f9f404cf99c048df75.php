<div class="path-hint" data-toggle="tooltip" data-title="/resources/themes/velocity/views/layouts/footer/footer-links/footer-left.blade.php" data-id="634aedbe32672"><span class="testing"></span><div class="col-lg-4 col-md-12 col-sm-12 software-description">
    <div class="logo">
        <a href="<?php echo e(route('shop.home.index')); ?>" aria-label="Logo">
            <?php if($logo = core()->getCurrentChannel()->logo_url): ?>
                <img
                    src="<?php echo e($logo); ?>"
                    class="logo full-img" alt="" width="200" height="50" />
            <?php else: ?>
                <img
                    src="<?php echo e(asset('themes/velocity/assets/images/static/logo-text-white.png')); ?>"
                    class="logo full-img" alt="" width="200" height="50" />
            <?php endif; ?>

        </a>
    </div>

    <?php if($velocityMetaData): ?>
        <?php echo $velocityMetaData->footer_left_content; ?>

    <?php else: ?>
        <?php echo __('velocity::app.admin.meta-data.footer-left-raw-content'); ?>

    <?php endif; ?>
</div></div><?php /**PATH C:\xampp\htdocs\quantumafrica/resources/themes/velocity/views/layouts/footer/footer-links/footer-left.blade.php ENDPATH**/ ?>