<div class="path-hint" data-toggle="tooltip" data-title="/resources/themes/velocity/views/home/slider.blade.php" data-id="634aedc2d7b72"><span class="testing"></span><?php if($velocityMetaData && $velocityMetaData->slider): ?>
    <div class="slider-container">
        <slider-component
            direction="<?php echo e(core()->getCurrentLocale()->direction); ?>"
            default-banner="<?php echo e(asset('/themes/velocity/assets/images/banner.webp')); ?>"
            :banners="<?php echo e(json_encode($sliderData)); ?>">

            
            <?php if(! empty($sliderData)): ?>
                <img class="col-12 no-padding banner-icon" src="<?php echo e(Storage::url($sliderData[0]['path'])); ?>" alt=""/>
            <?php else: ?>
                <img class="col-12 no-padding banner-icon" src="<?php echo e(asset('/themes/velocity/assets/images/banner.webp')); ?>" alt=""/>
            <?php endif; ?>

        </slider-component>
    </div>
<?php endif; ?>
</div><?php /**PATH C:\xampp\htdocs\quantumafrica/resources/themes/velocity/views/home/slider.blade.php ENDPATH**/ ?>