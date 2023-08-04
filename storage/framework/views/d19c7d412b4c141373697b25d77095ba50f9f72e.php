<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

        <title><?php echo e(config('app.name', 'Laravel')); ?></title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <?php echo \Livewire\Livewire::styles(); ?>


        <!-- Scripts -->
        <link rel="stylesheet" href="<?php echo e(asset('css/app.css')); ?>">
        <script src="<?php echo e(asset('js/app.js')); ?>" defer></script>
       <!--@vite(['resources/css/app.css', 'resources/js/app.js'])  --> 
    </head>
    <body class="font-sans antialiased">
        <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'jetstream::components.banner','data' => []]); ?>
<?php $component->withName('jet-banner'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>

        <div class="min-h-screen bg-gray-100">
            <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('navigation-menu')->html();
} elseif ($_instance->childHasBeenRendered('9n3lLqV')) {
    $componentId = $_instance->getRenderedChildComponentId('9n3lLqV');
    $componentTag = $_instance->getRenderedChildComponentTagName('9n3lLqV');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('9n3lLqV');
} else {
    $response = \Livewire\Livewire::mount('navigation-menu');
    $html = $response->html();
    $_instance->logRenderedChild('9n3lLqV', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>

            <!-- Page Heading -->
            <?php if(isset($header)): ?>
                <header class="bg-white shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        <?php echo e($header); ?>

                    </div>
                </header>
            <?php endif; ?>

            <!-- Page Content -->
            <main>
                <?php echo e($slot); ?>

            </main>
        </div>

        <?php echo $__env->yieldPushContent('modals'); ?>

        <?php echo \Livewire\Livewire::scripts(); ?>

    </body>
</html>
<?php /**PATH C:\xampp\htdocs\Laravel\projetolaravel\resources\views/layouts/app.blade.php ENDPATH**/ ?>