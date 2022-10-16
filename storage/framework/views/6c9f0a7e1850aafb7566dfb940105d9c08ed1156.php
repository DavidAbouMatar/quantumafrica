<div class="path-hint" data-toggle="tooltip" data-title="/resources/themes/velocity/views/checkout/cart/mini-cart.blade.php" data-id="634aedbdee105"><span class="testing"></span><a class="mini-cart-btn">
    <mini-cart
        is-tax-inclusive="<?php echo e(Webkul\Tax\Helpers\Tax::isTaxInclusive()); ?>"
        view-cart-route="<?php echo e(route('shop.checkout.cart.index')); ?>"
        checkout-route="<?php echo e(route('shop.checkout.onepage.index')); ?>"
        check-minimum-order-route="<?php echo e(route('shop.checkout.check-minimum-order')); ?>"
        cart-text="<?php echo e(__('shop::app.minicart.cart')); ?>"
        view-cart-text="<?php echo e(__('shop::app.minicart.view-cart')); ?>"
        checkout-text="<?php echo e(__('shop::app.minicart.checkout')); ?>"
        subtotal-text="<?php echo e(__('shop::app.checkout.cart.cart-subtotal')); ?>">
    </mini-cart>
</a></div><?php /**PATH C:\xampp\htdocs\quantumafrica/resources/themes/velocity/views/checkout/cart/mini-cart.blade.php ENDPATH**/ ?>