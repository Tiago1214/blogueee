

<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                      <?php echo e(__('Ver Notícia')); ?></div>
                <div class="card-body">
                <?php if(session('status')): ?>
                <div class="alert alert-success">
                    <?php echo e(session('status')); ?>

                </div>
                <?php endif; ?>
                    <div class="card">
                        <?php if($post->imagem==null): ?>
                            <img src="<?php echo e(asset('appimages/semimagem.png'.$post->imagem)); ?>" class="card-img-top" alt=<?php echo e($post->intro); ?>>
                        <?php else: ?>
                            <img src="<?php echo e(asset('appimages/noticias/'.$post->imagem)); ?>" class="card-img-top" alt=<?php echo e($post->intro); ?>>
                        <?php endif; ?>
                        
                        <div class="card-body">
                            <h5 class="card-title"><?php echo e($post->titulo); ?></h5>
                            <h6 class="card-subtitle mb-2 text-muted"><?php echo e($post->intro); ?>}</h6>
                            <p class="card-text"><?php echo e($post->corpo); ?></p>
                            <a href="<?php echo e($post->link); ?>" class="btn btn-primary" target="blank" ><?php echo e($post->textolink); ?></a>
                            <p class="card-text"><small class="text-muted">Criado por <?php echo e($post->user->name); ?>  <?php echo e($post->created_at->diffForHumans()); ?> <br>Ultima alteracao <?php echo e($post->updated_at->diffForHumans()); ?></small></p>                          
                        </div>
                        <div class="card-footer" >
                            <a href="<?php echo e(route('noticias.index')); ?>" class="btn btn-primary">Voltar á lista</a>
                            <?php if($post->user_id==Auth::user()->id): ?>
                                <a href="<?php echo e(route('noticias.edit', $post->id)); ?>" class="btn btn-warning">Alterar Notícia</a>
                                <a href="#" class="btn btn-danger">Eliminar Notícia</a>
                            <?php endif; ?>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\blogue\resources\views/noticias/show.blade.php ENDPATH**/ ?>