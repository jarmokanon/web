

<?php $__env->startSection('content'); ?>
    <h1>Works</h1>
    <?php if(count($works) > 0): ?>
        <?php $__currentLoopData = $works; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $work): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="well">
                <h3><?php echo e($work->title); ?></h3>
                <small>Aangemaakt op <?php echo e($work->created_at); ?></small>
                <p><?php echo e($work->description); ?></p>
                <img src=<?php echo e($work->imageUrl); ?>>
</div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php else: ?>
<p>No works found!</p>
<?php endif; ?>
<?php $__env->stopSection(); ?>



<!-- 

<?php $__env->startSection('content'); ?>
<section class="portfolio section" id="portfolio">
                <h2 class="section-title">Portfolio</h2>
                <?php if(count($works) > 0): ?>
        <?php $__currentLoopData = $works; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $work): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="portfolio__container bd-grid">
                    <div class="portfolio__img">
                        <img src=<?php echo e($work->imageUrl); ?>>

                        <div class="portfolio__link">
                            <a href="#" class="portfolio__link-name"><?php echo e($work->title); ?><br>Aangemaakt op <?php echo e($work->created_at); ?><br><?php echo e($work->description); ?></a>
                        </div>
                    </div>
</div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php else: ?>
<p>No works found!</p>
<?php endif; ?>
<?php $__env->stopSection(); ?>
</section> -->
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\portfoliojarmo\resources\views/works/index.blade.php ENDPATH**/ ?>