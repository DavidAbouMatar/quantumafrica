<div class="path-hint" data-toggle="tooltip" data-title="\packages\Webkul\Velocity\src/resources/views/shop/layouts/particals/wishlist.blade.php" data-id="634aedbde6513"><span class="testing"></span><?php
    $showWishlist = core()->getConfigData('general.content.shop.wishlist_option') == "1" ? true : false;
?>

<?php if($showWishlist): ?>

    <wishlist-component-with-badge
        is-customer="<?php echo e(auth()->guard('customer')->check() ? 'true' : 'false'); ?>"
        is-text="<?php echo e(isset($isText) && $isText ? 'true' : 'false'); ?>"
        src="<?php echo e(route('customer.wishlist.index')); ?>">
    </wishlist-component-with-badge>

<?php endif; ?></div><?php /**PATH C:\xampp\htdocs\quantumafrica\packages\Webkul\Velocity\src/resources/views/shop/layouts/particals/wishlist.blade.php ENDPATH**/ ?>