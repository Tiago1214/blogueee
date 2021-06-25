<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                      <?php echo e(__('Editar Categoria')); ?></div>
                <div class="card-body">
                <form action="<?php echo e(route('categorias.update',$categoria->id)); ?>" method="POST">
                <?php echo csrf_field(); ?>
                                  <?php echo method_field('PUT'); ?>
                                  <div class="form-group">
                                  <label for="categorianome">Nome da categoria</label>
                                  <input type="text" class="form-control" id="categorianome" name= "categorianome"
                                  value="<?php echo e($categoria ->categorianome); ?>" required>
                                  <?php $__errorArgs = ['categorianome'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                  <div class="alert alert-danger"><?php echo e($message); ?></div>
                                  <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>
                                <button type="submit" class="btn btn-primary">Gravar</button>
                              </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\blogue\resources\views/categorias/edit.blade.php ENDPATH**/ ?>