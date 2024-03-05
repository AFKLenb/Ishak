<?php \ProtoneMedia\Splade\Facades\SEO::title(__('Welcome')); ?>

<div class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center bg-gray-100 selection:bg-red-500 selection:text-white">
    <?php if($canLogin): ?>
        <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right">
            <?php if(auth()->guard()->check()): ?>
                <Link href="<?php echo e(url('/dashboard')); ?>" class="font-semibold text-gray-600 hover:text-gray-900 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Dashboard</Link>
            <?php else: ?>
                <Link href="<?php echo e(route('login')); ?>" class="font-semibold text-gray-600 hover:text-gray-900 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log in</Link>

                <?php if($canRegister): ?>
                    <Link href="<?php echo e(route('register')); ?>" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</Link>
                <?php endif; ?>
            <?php endif; ?>
        </div>
    <?php endif; ?>
    <div class="">
        <h1 class="text-[40px]">Hello user</h1>
    </div>
</div>
<?php /**PATH C:\OSPanel\domains\Ishak\resources\views/welcome.blade.php ENDPATH**/ ?>