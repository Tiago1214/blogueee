

<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h3>Lista de publicaçoes</h3>
            <?php $__empty_1 = true; $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                <div class="card mb-3" >
                    <div class="row g-0">
                        <div class="col-md-4">
                            <?php if($post->imagem == null): ?>
                                <img src="<?php echo e(asset('appimages/semimagem.png')); ?>" alt="<?php echo e($post->intro); ?>" class="img-fluid">
                            <?php else: ?>
                                <img src="<?php echo e(asset('appimages/noticias/'.$post->imagem)); ?>" alt="<?php echo e($post->intro); ?>" class="img-fluid">
                            <?php endif; ?>
                            </div>
                            <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title"><?php echo e($post->titulo); ?></h5>
                                <p class="card-text"><span class="badge bg-secondary"><?php echo e($post->categoria->categorianome); ?></span></p>
                                <p class="card-text"><?php echo e($post->intro); ?></p>
                                <a href="<?php echo e($post->link); ?>" class="btn btn-primary" target="blank" ><?php echo e($post->textolink); ?></a>
                                <a href="<?php echo e(route('noticias.show',$post->id)); ?>" class="btn btn-primary">Ver mais</a>
                                <p class="card-text text right"><small class="text-muted">Criado por <?php echo e($post->user->name); ?>  <?php echo e($post->created_at->diffForHumans()); ?> <br>Ultima alteracao <?php echo e($post->updated_at->diffForHumans()); ?></small></p>
                            </div>
                        </div>
                    </div>
                </div>

            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                <p>Ainda sem publicaçoes</p>
            <?php endif; ?>
        
        </div>
        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\blogue\resources\views/noticias/index.blade.php ENDPATH**/ ?>