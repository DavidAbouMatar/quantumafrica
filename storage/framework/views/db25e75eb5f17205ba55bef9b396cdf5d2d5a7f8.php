<div class="path-hint" data-toggle="tooltip" data-title="/resources/themes/velocity/views/layouts/footer/index.blade.php" data-id="634aedbe2da9d"><span class="testing"></span><div class="footer">
    <div class="footer-content">

        <?php echo $__env->make('shop::layouts.footer.newsletter-subscription', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php echo $__env->make('shop::layouts.footer.footer-links', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        

        <?php if(core()->getConfigData('general.content.footer.footer_toggle')): ?>
            <?php echo $__env->make('shop::layouts.footer.copy-right', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php endif; ?>
    </div>
</div>


</div><?php /**PATH C:\xampp\htdocs\quantumafrica/resources/themes/velocity/views/layouts/footer/index.blade.php ENDPATH**/ ?>