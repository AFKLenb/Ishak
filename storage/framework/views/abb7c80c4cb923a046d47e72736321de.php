<?php
    $setting = App\Models\Setting::find(1);
    $socials =  App\Models\Social::where('isActive', 1)->get();
?>
<footer class="application__footer footer" id="footer-top">
    <div class="footer__container container">
        <div class="footer__inner">
            <div class="footer__logo">
                <a href="#" class="footer__logo-link">
                    <img src="<?php echo e(Storage::url($setting->logo)); ?>" alt="Логотип" class="footer__logo-img">
                </a>
            </div>
            <nav class="footer__navbar">
                <ul class="footer__list">
                    <?php $__empty_1 = true; $__currentLoopData = $socials; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $social): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                        <li class="footer__item">
                            <a href="<?php echo e($social->link); ?>" class="footer__link"><img src="<?php echo e(Storage::url($social->image)); ?>" class=" w-full h-[auto] " alt=""></a>
                        </li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                        <?php echo e(__ ('Данные не найдены')); ?>

                    <?php endif; ?>
                </ul>
                <div class="footer__email">
                    <a href="mailto:dr.grobovick@yandex.ru" class="footer__description"><?php echo e($setting->email); ?></a>
                </div>
            </nav>
        </div>
    </div>
</footer>
<?php /**PATH C:\OSPanel\domains\Ishak\resources\views/client/include/footer.blade.php ENDPATH**/ ?>