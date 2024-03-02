<?php
    $product1 =  App\Models\Product::where('isActive', 1)->get();
?>


<?php $__env->startSection('title'); ?> <?php echo e(__('Главная страница')); ?> <?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

        <main class="application__main main-page" id="main-page">
            <div class="main-page__btn-up btn-up__hide"></div>
            <div class="main-page__container container">
                <div class="main-page__wrapper">
                    <section id="about" class="main-page__section about-section">
                        <div class="about-section__content">
                            <img src="<?php echo e(asset('assets/img/33767c99a6d790299fc3.webp')); ?>" alt="Мастер" class="about-section__content-image">
                            <div class="about-section__content-text">
                                <h2 class="about-section__content-title">Наша мастерская самая лучшая по городу Курску.</h2>
                                <p class="about-section__content-description"><br> Мы изготавливаем ювелирные изделия на протяжении 10 лет. Наши профессиональные дизайнеры подберут украшение каджому. <br><br> Наши плюсы: <br><br> <span>1.</span> качество проверенное временем <br><br> <span>2.</span> наличие бюджетных вариантов <br><br> <span>3.</span> быстрое выполнение работы </p>
                            </div>
                        </div>
                    </section>
                    <section id="filter" class="main-page__section filter-section">
                        <div class="filter-section__content">
                            <div class="filter-section__filter">
                                <nav class="filter-section__navbar">
                                    <ul class="filter-section__navbar-list">
                                        <li data-target="Всё" class="filter-section__navbar-category">
                                            <h2 class="filter-section__navbar-name">Всё</h2>
                                        </li>
                                        <?php $__empty_1 = true; $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                            <li data-target="<?php echo e($category->target); ?>" class="filter-section__navbar-category">
                                                <h2 class="filter-section__navbar-name"><?php echo e($category->title); ?></h2>
                                            </li>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                            <?php echo e(__ ('Данные не найдены')); ?>

                                        <?php endif; ?>
                                    </ul>
                                </nav>
                            </div>
                            <div class="filter-section__catalog">
                                <ul class="filter-section__list">
                                    <?php $__empty_1 = true; $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                        <li data-path="<?php echo e($product->patch); ?>" data-target="<?php echo e($product->target); ?>" class="filter-section__card">
                                            <img src="<?php echo e(Storage::url($product->image)); ?>" alt="Подвеска Premium" class="filter-section__card-img">
                                            <h2 class="filter-section__card-name"><?php echo e($product->title); ?></h2>
                                        </li>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                        <?php echo e(__ ('Данные не найдены')); ?>

                                    <?php endif; ?>

                                </ul>
                            </div>
                        </div>
                    </section>
                    <section class="main-page__section product-section">
                        <?php $__empty_1 = true; $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                            <div data-path="<?php echo e($product->target); ?>" class="product-section__content">
                                <div class="product-section__top">
                                    <h2 class="product-section__top-title"><?php echo e($product->title); ?></h2>
                                </div>
                                <div class="product-section__center slider">
                                    <div class="slider__wrapper swiper-wrapper">
                                        <ul class="slider__items swiper-slide">
                                            <li class="slider__item">
                                                <a href="#" class="slider__link">
                                                    <img src="<?php echo e(Storage::url($product->image)); ?>" alt="1 картинка слайдера" class="slider__img">
                                                </a>
                                            </li>
                                        </ul>

                                    </div>
                                    <div class="slider__pagination swiper-slide"></div>
                                </div>
                                <div class="product-section__bottom">
                                    <div class="product-section__bottom-about">
                                        <p class="product-section__bottom-description-left"><span>Описание</span><br>Материал: <span><?php echo e($product->material); ?></span><br>Размеры: <span><?php echo e($product->size); ?></span><br>Время изготовления: <span><?php echo e($product->timeCreate); ?></span></p>
                                        <p class="product-section__bottom-description-right"><?php echo e($product->content); ?></p>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                            <?php echo e(__ ('Данные не найдены')); ?>

                        <?php endif; ?>

                    </section>
                    <section class="main-page__section similar-section">
                        <!-- <div data-path="Подвеска Premium" class="similar-section__content">
                            <div class="similar-section__name">
                                <h2 class="similar-section__title">Похожие изделия</h2>
                            </div>
                            <ul class="similar-section__list">
                                <li data-target="Кольцо Давид" class="similar-section__card">
                                    <img src="/src/assets/img/Ring2.webp" alt="" class="similar-section__card-img">
                                    <h2 class="similar-section__card-name">Кольцо Давид</h2>
                                </li>
                                <li data-target="Кольцо Олег" class="similar-section__card">
                                    <img src="/src/assets/img/Ring3.webp" alt="" class="similar-section__card-img">
                                    <h2 class="similar-section__card-name">Кольцо Олег</h2>
                                </li>
                                <li data-target="Кольцо Вардан" class="similar-section__card">
                                    <img src="/src/assets/img/Ring4.webp" alt="" class="similar-section__card-img">
                                    <h2 class="similar-section__card-name">Кольцо Вардан</h2>
                                </li>
                            </ul>
                        </div> -->













































                        <!-- <div data-path="Цепочка Иван" class="similar-section__content">
                            <div class="similar-section__name">
                                <h2 class="similar-section__title">Похожие изделия</h2>
                            </div>
                            <ul class="similar-section__list">
                                <li class="similar-section__card">
                                    <img src="/src/assets/img/Ring1.webp" alt="" class="similar-section__card-img">
                                    <h2 class="similar-section__card-name">Кольцо Евгения</h2>
                                </li>
                                <li class="similar-section__card">
                                    <img src="/src/assets/img/Ring2.webp" alt="" class="similar-section__card-img">
                                    <h2 class="similar-section__card-name">Кольцо Давид</h2>
                                </li>
                                <li class="similar-section__card">
                                    <img src="/src/assets/img/Ring3.webp" alt="" class="similar-section__card-img">
                                    <h2 class="similar-section__card-name">Кольцо Олег</h2>
                                </li>
                                <li class="similar-section__card">
                                    <img src="/src/assets/img/Ring1.webp" alt="" class="similar-section__card-img">
                                    <h2 class="similar-section__card-name">Кольцо Евгения</h2>
                                </li>
                            </ul>
                        </div> -->
                    </section>
                    <section id="reviews" class="main-page__section reviews-section">
                        <?php $__empty_1 = true; $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                            <div data-path="<?php echo e($product->target); ?>" class="reviews-section__content">
                                <ul class="reviews-section__list">
                                    <?php $__empty_2 = true; $__currentLoopData = $reviews; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $review): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_2 = false; ?>
                                        <li class="reviews-section__review review">
                                            <div class="review__name">
                                                <img src="<?php echo e(Storage::url($review->image)); ?>" alt="Аватар пользователя" class="review__avatar">
                                                <h2 class="review__user-name"><?php echo e($review->name); ?></h2>
                                            </div>
                                            <div class="review__content">
                                                <p class="review__description"><?php echo e($review->text); ?></p>
                                            </div>
                                        </li>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_2): ?>
                                        <?php echo e(__ ('Данные не найдены')); ?>

                                    <?php endif; ?>
                                </ul>
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                            <?php echo e(__ ('Данные не найдены')); ?>

                        <?php endif; ?>

                    </section>
                    <section id="contacts" class="main-page__section contacts-section">
                        <div class="contacts-section__content">
                            <div class="contacts-section__top">
                                <div class="contacts-section__logo">
                                    <a href="#" class="contacts-section__logo-link">
                                        <img src="<?php echo e(asset('/assets/img/79ecf04b67f1c2c76d60.svg')); ?>" alt="Логотип" class="contacts-section__logo-img">
                                    </a>
                                </div>
                                <div class="contacts-section__number">
                                    <a href="tel:+79413758131" class="contacts-section__description"> Контактный телефон: <span>+79413758131</span></a>
                                </div>
                            </div>
                            <div class="contacts-section__mailing-list">
                                <p class="contacts-section__email">Введите email: <input type="email" class="contacts-section__email-field" title="Введите email" name="email"></p>
                                <button class="contacts-section__button">
                                    <p class="contacts-section__link">Подписаться</p>
                                </button>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </main>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('client.layout.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\OSPanel\domains\Ishak\resources\views/Client/index.blade.php ENDPATH**/ ?>