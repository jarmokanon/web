<!doctype html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">

<!-- HEAD -->
<div class="container">
   <header class="row">
       <?php echo $__env->make('includes.head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
   </header>
</div>
<!-- Einde head -->


<body>
<div class="container">
   <div class="row">
       <?php echo $__env->make('includes.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
   </div>
</div>
</body>
</html>
<?php /**PATH /Users/jarmo/mylaraportfolio/resources/views/layouts/app.blade.php ENDPATH**/ ?>