<?php $__env->startSection('content'); ?>
   i am the home page
<?php $__env->stopSection(); ?>








<!-- <html>
    <head>
        <title>App Name - <?php echo $__env->yieldContent('home'); ?></title>
    </head>
    
    <body>

<div class="header clearfix">
        <nav>
          <ul class="nav nav-pills pull-right">
            <li class=""><a href="<?php echo e(url('/')); ?>">Home</a>
            </li>
            <li <?php echo e(Request::is('about*') ? ' class="active"' : null); ?>><a href="<?php echo e(url('about')); ?>">About</a>
            </li>
            <li <?php echo e(Request::is('work*') ? ' class="active"' : null); ?>><a href="<?php echo e(url('work')); ?>">Work</a>
            </li>
            <li <?php echo e(Request::is('contact*') ? ' class="active"' : null); ?>><a href="<?php echo e(url('contact')); ?>">Contact</a>
            </li>
        </ul>
    </nav>
</div>

        <div class="container">
            <?php echo $__env->yieldContent('content'); ?>
        </div>
    </body>
</html> -->
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/jarmo/mylaraportfolio/resources/views/pages/welcome.blade.php ENDPATH**/ ?>