<div class="path-hint" data-toggle="tooltip" data-title="\packages\Webkul\Admin\src/resources/views/layouts/tabs.blade.php" data-id="634b01fca2b4a"><span class="testing"></span><div class="tabs">
    <?php if(request()->route()->getName() != 'admin.configuration.index'): ?>

        <?php $keys = explode('.', $menu->currentKey);  ?>


        <?php if($items = \Illuminate\Support\Arr::get($menu->items, implode('.children.', array_slice($keys, 0, 2)) . '.children')): ?>

            <ul>

                <?php $__currentLoopData = \Illuminate\Support\Arr::get($menu->items, implode('.children.', array_slice($keys, 0, 2)) . '.children'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                    <li class="<?php echo e($menu->getActive($item)); ?>">
                        <a href="<?php echo e($item['url']); ?>">
                            <?php echo e(trans($item['name'])); ?>

                        </a>
                    </li>

                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            </ul>

        <?php endif; ?>

    <?php else: ?>

        <?php if($items = \Illuminate\Support\Arr::get($config->items, request()->route('slug') . '.children')): ?>

            <ul>

                <?php $__currentLoopData = $items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                    <li class="<?php echo e($key == request()->route('slug2') ? 'active' : ''); ?>">
                        <a href="<?php echo e(route('admin.configuration.index', (request()->route('slug') . '/' . $key))); ?>">
                            <?php echo e(trans($item['name'])); ?>

                        </a>
                    </li>

                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            </ul>

        <?php endif; ?>

    <?php endif; ?>
</div></div><?php /**PATH C:\xampp\htdocs\quantumafrica\packages\Webkul\Admin\src/resources/views/layouts/tabs.blade.php ENDPATH**/ ?>