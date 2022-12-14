<div class="path-hint" data-toggle="tooltip" data-title="/resources/themes/velocity/views/layouts/footer/footer-links/footer-middle.blade.php" data-id="634aedbe34359"><span class="testing"></span><div class="col-lg-4 col-md-12 col-sm-12 footer-ct-content">
	<div class="row">

        <?php if($velocityMetaData): ?>
            <?php echo DbView::make($velocityMetaData)->field('footer_middle_content')->render(); ?>

        <?php else: ?>
            <div class="col-lg-6 col-md-12 col-sm-12 no-padding">
                <ul type="none">
                    <li>
                        <a href="https://webkul.com/about-us/company-profile/">
                            <?php echo e(__('velocity::app.admin.meta-data.footer-middle.about-us')); ?>

                        </a>
                    </li>
                    <li>
                        <a href="https://webkul.com/about-us/company-profile/">
                            <?php echo e(__('velocity::app.admin.meta-data.footer-middle.customer-service')); ?>

                        </a>
                    </li>
                    <li>
                        <a href="https://webkul.com/about-us/company-profile/">
                            <?php echo e(__('velocity::app.admin.meta-data.footer-middle.whats-new')); ?>

                        </a>
                    </li>
                    <li>
                        <a href="https://webkul.com/about-us/company-profile/">
                            <?php echo e(__('velocity::app.admin.meta-data.footer-middle.contact-us')); ?>

                        </a>
                    </li>
                </ul>
            </div>
            <div class="col-lg-6 col-md-12 col-sm-12 no-padding">
                <ul type="none">
                    <li>
                        <a href="https://webkul.com/about-us/company-profile/">
                        <?php echo e(__('velocity::app.admin.meta-data.footer-middle.order-and-returns')); ?>

                        </a>
                    </li>
                    <li>
                        <a href="https://webkul.com/about-us/company-profile/">
                            <?php echo e(__('velocity::app.admin.meta-data.footer-middle.payment-policy')); ?>

                        </a>
                    </li>
                    <li>
                        <a href="https://webkul.com/about-us/company-profile/">
                            <?php echo e(__('velocity::app.admin.meta-data.footer-middle.shipping-policy')); ?>

                        </a>
                    </li>
                    <li>
                        <a href="https://webkul.com/about-us/company-profile/">
                            <?php echo e(__('velocity::app.admin.meta-data.footer-middle.privacy-and-cookies-policy')); ?>

                        </a>
                    </li>
                </ul>
            </div>
        <?php endif; ?>
	</div>
</div></div><?php /**PATH C:\xampp\htdocs\quantumafrica/resources/themes/velocity/views/layouts/footer/footer-links/footer-middle.blade.php ENDPATH**/ ?>