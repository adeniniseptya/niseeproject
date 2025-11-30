<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Nisee — Login</title>
    <link rel="stylesheet" href="<?php echo e(asset('css/style.css')); ?>">
</head>

<body>

    
    <?php for($i = 0; $i < 25; $i++): ?>
        <div class="decoration-auto"
            style="
                top: <?php echo e(rand(10, 700)); ?>px;
                left: <?php echo e(rand(10, 1200)); ?>px;
                font-size: <?php echo e(rand(20, 45)); ?>px;
            ">
            ★
        </div>
    <?php endfor; ?>

    <main style="padding: 120px 20px; display:flex; justify-content:center;">
        <?php echo e($slot); ?>

    </main>

</body>
</html>
<?php /**PATH C:\xampp\htdocs\niseeproject\resources\views/layouts/auth.blade.php ENDPATH**/ ?>