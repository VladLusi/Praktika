<?php $__env->startSection('content'); ?>

<div class="container">
    <section class="products clearfix justify-content-center d-flex flex-wrap">
        <?php $__currentLoopData = $ez; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $r): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="product-wrapper product flex-wrap col-lg-8 col-md-8 col-sm-12 col-12 d-flex align-items-center">
            
               <div class="d-flex flex-column col-12 col-md-6 text-center align-items-center">
                    <img class="photo pe-3 img-fluid" src="<?php echo e($r->Img); ?>"/>
                    <?php echo e($r->Price); ?>

                    
                   <button class="button"><a href="<?php echo e(url("/add")); ?>/<?php echo e($r->id); ?>"><p id="buttons">Добавить в корзину</p></a></button>
               </div>

               <div class="containerr col-12 col-md-6">
                    <div class="d-flex gap-4 align-items-center ">
                        <h3><?php echo e($r->Name); ?></h3>
                        <p><?php echo e($r->characteristic); ?></p>
                    </div>
                    <big>Описание</big>
                   
                        <a class="nav-link" href="<?php echo e(url("/detal")); ?>/<?php echo e($r->id); ?>">Детальное Описание</a>
                    
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