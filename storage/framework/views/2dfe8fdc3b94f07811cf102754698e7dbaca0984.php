<html>
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
</html><?php /**PATH /Users/jarmo/mylaraportfolio/resources/views/welcome.blade.php ENDPATH**/ ?>