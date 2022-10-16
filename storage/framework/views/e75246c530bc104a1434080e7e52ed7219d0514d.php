<div class="path-hint" data-toggle="tooltip" data-title="\packages\Webkul\Admin\src/resources/views/layouts/content.blade.php" data-id="634b01fc96fb4"><span class="testing"></span><?php $__env->startSection('content-wrapper'); ?>
    <div class="inner-section">

        <div class="content-wrapper">

            <?php echo $__env->make('admin::layouts.tabs', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

            <?php echo $__env->yieldContent('content'); ?>

        </div>

    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin::layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?></div><?php /**PATH C:\xampp\htdocs\quantumafrica\packages\Webkul\Admin\src/resources/views/layouts/content.blade.php ENDPATH**/ ?>