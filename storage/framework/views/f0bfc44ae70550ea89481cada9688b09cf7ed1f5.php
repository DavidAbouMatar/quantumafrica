<div class="path-hint" data-toggle="tooltip" data-title="/resources/themes/velocity/views/layouts/header/desktop.blade.php" data-id="634aedbe274a5"><span class="testing"></span><div>
    <sidebar-header heading= "<?php echo e(__('velocity::app.menu-navbar.text-category')); ?>">

        
        <div class="main-category fs16 unselectable fw6 left">
            <i class="rango-view-list align-vertical-top fs18"></i>

            <span class="pl5"><?php echo e(__('velocity::app.menu-navbar.text-category')); ?></span>
        </div>

    </sidebar-header>
</div>

<div class="content-list right">
    <right-side-header :header-content="<?php echo e(json_encode(app('Webkul\Velocity\Repositories\ContentRepository')->getAllContents())); ?>">

        
        <ul type="none" class="no-margin">
        </ul>

    </right-side-header>
</div></div><?php /**PATH C:\xampp\htdocs\quantumafrica/resources/themes/velocity/views/layouts/header/desktop.blade.php ENDPATH**/ ?>