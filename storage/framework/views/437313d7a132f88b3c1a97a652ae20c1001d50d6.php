

<!doctype html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>
    <meta charset="utf-8">

    <title><?php echo e(config('app.name', 'Laravel')); ?></title>

    <!-- Scripts -->
    <script src="<?php echo e(asset('js/app.js')); ?>" defer></script>

    <!-- Styles -->
    <link href="<?php echo e(asset('css/app.css')); ?>" rel="stylesheet">
</head>

<body>
<div class="container">
   <header class="row">
       <?php echo $__env->make('includes.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
   </header>
   <div id="main" class="row">
           <?php echo $__env->yieldContent('content'); ?>
   </div>
   <footer class="row">
       <?php echo $__env->make('includes.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
   </footer>
</div>
</body>
</html><?php /**PATH /Users/jarmo/mylaraportfolio/resources/views/layouts/default.blade.php ENDPATH**/ ?>