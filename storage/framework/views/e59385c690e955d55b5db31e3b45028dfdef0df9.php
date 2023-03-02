<?php $__env->startSection('content'); ?>
<?php $__currentLoopData = $ez; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $r): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<div class="container">
    <section class="products clearfix">
        <div class="product-wrapper">
            <a href="" class="product">
               <img class="photo" src="<?php echo e($r->Img); ?>"/>
                <br>
            </a>
        </div>

    </section>

</div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<div class="container">
    <section class="products clearfix">
        <div class="product-wrapper">
            <a href="" class="product">
               <img class="photo" src="<?php echo e($r->Img); ?>"/>
                <br>
                <?php echo e($r->Name); ?>

                <?php echo e($r->Price); ?>

                <?php echo e($r->Data); ?>

            </a>
        </div>

    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /srv/users/gdbxczen/kbfcyag-m1/resources/views/Products.blade.php ENDPATH**/ ?>