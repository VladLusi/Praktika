<?php $__env->startSection('content'); ?>
<?php $__currentLoopData = $Nas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $m): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<div class="map">
    <div class="center">
    <img class="mapp" src="<?php echo e($m->Img); ?>"/>
</div>
    <p id="tr">
        <?php echo e($m->Adres); ?>

        <?php echo e($m->email); ?>

        <?php echo e($m->Phone); ?>

    </p>
</div>


<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /srv/users/gdbxczen/kbfcyag-m1/resources/views/Gde.blade.php ENDPATH**/ ?>