<?php $__env->startSection('content'); ?>

<div class="container">
    <section class="products clearfix d-flex flex-wrap">
        <?php $__currentLoopData = $ez; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $r): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="product-wrapper product col-lg-6 d-flex align-items-center">
            
               <div class="d-flex flex-column">
                    <img class="photo pe-3" src="<?php echo e($r->Img); ?>"/>
                    <?php echo e($r->Price); ?>

               </div>

               <div class="containerr">
                    <div class="d-flex gap-4 align-items-center">
                        <h3><?php echo e($r->Name); ?></h3>
                        <p><?php echo e($r->Data); ?></p>
                    </div>
                    <big>Описание</big>
                    <p id="Opisanie">
                        PlayStation 5 получила 16 ГБ оперативной памяти нового стандарта GDDR6 с пропускной способностью 448 ГБ в секунду.
                    PlayStation 5 имеет оптический привод Ultra HD Blu-ray и использует диски
                    Blu-ray объёмом до 100 ГБ.
                    </p>
                    
                </div>
            

          </div>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>

      </div>

    </section>

</div>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /srv/users/gdbxczen/kbfcyag-m1/resources/views/Products.blade.php ENDPATH**/ ?>