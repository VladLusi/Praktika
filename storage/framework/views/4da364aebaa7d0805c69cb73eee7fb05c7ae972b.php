<?php $__env->startSection('content'); ?>
<div class="swiper mySwiper">
    <div class="swiper-wrapper">
  <div class="swiper-button-next">
    <img src="/public/img/61022.png" id="phooto"/>
    <img src="/public/img/pngtree-vector-forward-icon-png-image_931210.jpg" id="phito"/>
<input type="hidden" id="ff" value="0"></span>
<?php $__currentLoopData = $yi; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<?php if($loop->first): ?>
<img class="photo  active" src="<?php echo e($p->Img); ?>" alt="Первый слайд"id="phito"/>
      <?php else: ?>
<img class="photo w-100" src="<?php echo e($p->Img); ?>" alt="Первый слайд"id="phooto"/>
<?php endif; ?>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<div class="tetx">
    <?php $__currentLoopData = $yi; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <p id="text">
        <?php echo e($p->Name); ?>

        </p>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    </div>
    <p class="text">
        Наши новинки!
    </p>
    <p class="Devis">
        Если вы не знаете где покупать игры по выгодным ценам, то скорее к нам!
    </p>
</div>
    </div>

</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /srv/users/gdbxczen/kbfcyag-m1/resources/views/onas.blade.php ENDPATH**/ ?>