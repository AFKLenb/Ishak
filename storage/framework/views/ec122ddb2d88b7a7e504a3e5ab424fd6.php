<?php \ProtoneMedia\Splade\Facades\SEO::title(__($subscription->email)); ?>

<?php if (isset($component)) { $__componentOriginal4619374cef299e94fd7263111d0abc69 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal4619374cef299e94fd7263111d0abc69 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.app-layout','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('app-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
     <?php $__env->slot('header', null, []); ?> 
        <div class="w-full flex items-center justify-between">
            <a href="<?php echo e(route('subscriptions.index')); ?>" class="bg-gray-300 hover:bg-gray-600 hover:text-white text-gray-800 font-bold py-2 px-4 rounded inline-flex items-center"><?php echo e(__('К списку продуктов')); ?></a>
        </div>
         <?php $__env->endSlot(); ?>
        <div class="flex justify-between  my-4 p-4 rounded-md max-w-[1240px] mx-auto bg-white">
            <div class="flex gap-[80px]  items-top  p-[15px]">
                <div class="flex flex-col items-start justify-between">
                    <div class=" w-full items-center">
                    </div>
                    <div class="mt-[30px]">
                        <p class="text-[18px] whitespace-normal "><?php echo e($subscription->email); ?></p>
                    </div>
                </div>
            </div>
            <div class="flex flex-col justify-between p-[15px]">
                <p class="">Дата оставления заявки: <br> <?php echo e($subscription->date); ?></p>

            </div>
        </div>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal4619374cef299e94fd7263111d0abc69)): ?>
<?php $attributes = $__attributesOriginal4619374cef299e94fd7263111d0abc69; ?>
<?php unset($__attributesOriginal4619374cef299e94fd7263111d0abc69); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal4619374cef299e94fd7263111d0abc69)): ?>
<?php $component = $__componentOriginal4619374cef299e94fd7263111d0abc69; ?>
<?php unset($__componentOriginal4619374cef299e94fd7263111d0abc69); ?>
<?php endif; ?>

<?php /**PATH C:\OSPanel\domains\Ishak\resources\views/Admin/subscriptions/show.blade.php ENDPATH**/ ?>