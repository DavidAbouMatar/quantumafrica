<div class="path-hint" data-toggle="tooltip" data-title="/resources/themes/velocity/views/products/wishlist.blade.php" data-id="634bd38c0c042"><span class="testing"></span><?php $wishListHelper = app('Webkul\Customer\Helpers\Wishlist'); ?>

<?php echo view_render_event('bagisto.shop.products.wishlist.before'); ?>


    <?php if(auth()->guard('customer')->check()): ?>
        <?php
            /* search wishlist on the basis of product's id so that wishlist id can be catched */
            $wishlist = $wishListHelper->getWishlistProduct($product);

            /* link making */
            $href = isset($route) ? $route : ($wishlist ? route('customer.wishlist.remove', $wishlist->id) : route('customer.wishlist.add', $product->product_id));

            /* method */
            $method = isset($route) ? 'POST' : ( $wishlist ? 'DELETE' : 'POST' );

            /* is confirmation needed */
            $isConfirm = isset($route) ? 'true' : 'false';

            /* title */
            $title = $wishlist ? __('velocity::app.shop.wishlist.remove-wishlist-text') : __('velocity::app.shop.wishlist.add-wishlist-text');
        ?>

        <a
            class="unset wishlist-icon <?php echo e($addWishlistClass ?? ''); ?> text-right"
            href="javascript:void(0);"
            title="<?php echo e($title); ?>"
            onclick="submitWishlistForm(
                '<?php echo e($href); ?>',
                '<?php echo e($method); ?>',
                <?php echo e($isConfirm); ?>,
                '<?php echo e(csrf_token()); ?>'
            )"
        >
            <wishlist-component active="<?php echo e($wishlist ? false : true); ?>"></wishlist-component>

            <?php if(isset($text)): ?>
                <?php echo $text; ?>

            <?php endif; ?>
        </a>
    <?php endif; ?>

    <?php if(auth()->guard('customer')->guest()): ?>
        <form
            class="d-none"
            id="wishlist-<?php echo e($product->product_id); ?>"
            action="<?php echo e(route('customer.wishlist.add', $product->product_id)); ?>"
            method="POST">
            <?php echo csrf_field(); ?>
        </form>

        <a
            class="unset wishlist-icon <?php echo e($addWishlistClass ?? ''); ?> text-right"
            href="javascript:void(0);"
            title="<?php echo e(__('velocity::app.shop.wishlist.add-wishlist-text')); ?>"
            onclick="document.getElementById('wishlist-<?php echo e($product->product_id); ?>').submit();">

            <wishlist-component active="false"></wishlist-component>

        </a>
    <?php endif; ?>

<?php echo view_render_event('bagisto.shop.products.wishlist.after'); ?></div><?php /**PATH C:\xampp\htdocs\quantumafrica/resources/themes/velocity/views/products/wishlist.blade.php ENDPATH**/ ?>