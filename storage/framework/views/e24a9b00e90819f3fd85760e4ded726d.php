<?php if (isset($component)) { $__componentOriginal9ac128a9029c0e4701924bd2d73d7f54 = $component; } ?>
<?php $component = App\View\Components\AppLayout::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('app-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\AppLayout::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
     <?php $__env->slot('header', null, []); ?> 
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            <?php echo e(__('Dashboard')); ?>

        </h2>
     <?php $__env->endSlot(); ?>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <div class="flex justify-between items-center">
                        <div class="flex items-center">
                            <span class="font-semibold text-lg">Debit Card</span>
                        </div>
                        <div class="text-xl font-semibold text-green-500">
                            Rp. <?php echo e(number_format($card->balance, 2)); ?>

                        </div>
                    </div>
                    <p class="mt-2 text-gray-600 dark:text-gray-400">
                        Holder Name : <?php echo e(Auth::user()->name); ?>

                    </p>
                    <p class="mt-4 text-gray-600 dark:text-gray-400">
                        Account Number:<?php echo e($card->accountNumber); ?>

                    </p>
                    <p class="mt-4 text-gray-600 dark:text-gray-400">
                        Card Number: <?php echo e(substr($card->cardNumber, 0, 4)); ?>

                        <?php echo e(substr($card->cardNumber, 4, 4)); ?>

                        <?php echo e(substr($card->cardNumber, 8, 4)); ?>

                        <?php echo e(substr($card->cardNumber, 12)); ?>

                    </p>
                    <p class="mt-2 text-gray-600 dark:text-gray-400">
                        Expiry Date: <?php echo e($card->expiresAt); ?>

                    </p>
                </div>
            </div>
        </div>
    </div>

 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal9ac128a9029c0e4701924bd2d73d7f54)): ?>
<?php $component = $__componentOriginal9ac128a9029c0e4701924bd2d73d7f54; ?>
<?php unset($__componentOriginal9ac128a9029c0e4701924bd2d73d7f54); ?>
<?php endif; ?>
<?php /**PATH C:\Users\DesaPonggok\PhpstormProjects\K3-Simple-Laravel-HW6\resources\views/dashboard.blade.php ENDPATH**/ ?>