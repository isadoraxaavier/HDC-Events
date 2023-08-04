    

    <?php $__env->startSection('title', 'Produtos'); ?>

    <?php $__env->startSection('content'); ?>
    <h1>Tela de produtos</h1>
    <?php if($busca != ''): ?>
    <p>O usuário está buscando por: <?php echo e($busca); ?></p>
    <?php else: ?>
    <p>Por favor, escreva seu produto na url.</p>
    <?php endif; ?>
    <?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Laravel\projetolaravel\resources\views/products.blade.php ENDPATH**/ ?>