<div class="path-hint" data-toggle="tooltip" data-title="/resources/themes/velocity/views/products/price.blade.php" data-id="634bd383f1a4f"><span class="testing"></span><?php echo view_render_event('bagisto.shop.products.price.before', ['product' => $product]); ?>


<div class="product-price">
    <?php echo $product->getTypeInstance()->getPriceHtml(); ?>

</div>

<?php echo view_render_event('bagisto.shop.products.price.after', ['product' => $product]); ?></div><?php /**PATH C:\xampp\htdocs\quantumafrica/resources/themes/velocity/views/products/price.blade.php ENDPATH**/ ?>